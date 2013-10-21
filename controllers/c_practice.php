<?php
class practice_controller extends base_controller{
  public function test1(){
	require(APP_PATH.'/libraries/image.php');
	#echo "testing! one";
	$imgObj = new Image(APP_PATH.'/images/1000.jpeg');
   	$imgObj->resize(200, 200);
	$imgObj->display();
  }
  public function test2(){
	echo "testing 2: db insert";
	# Our SQL command
	$q = "INSERT INTO users SET 
		first_name = 'Sam', 
	    last_name = 'Seaborn',
		email = 'seaborn@whitehouse.gov'";

	# Run the command
	echo DB::instance(DB_NAME)->query($q);
  }	
  public function test3(){
	echo "testing 3: update db";
	# Our SQL command
	$q = "UPDATE users
		SET email = 'samseaborn@whitehouse.gov'
	    WHERE email = 'seaborn@whitehouse.gov'";

	# Run the command
	echo DB::instance(DB_NAME)->query($q);
 }
  public function test4(){
	echo "testing 4: remove from db";
	# Our SQL command
	$q = "DELETE FROM users
		WHERE email = 'samseaborn@whitehouse.gov'";

	# Run the command
	echo DB::instance(DB_NAME)->query($q);
  }
}
?>