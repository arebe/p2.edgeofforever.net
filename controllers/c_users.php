<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function signup() {

        # Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = "Sign Up";

        # Render template
            echo $this->template;

    }

    public function p_signup() {

        # Dump out the results of POST to see what the form submitted
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';          
    }

	public function profile($user_name = NULL){
	  $this->template->content = View::instance('v_users_profile');
	  $this->template->title = "Profile";
	  $this->template->content->user_name = $user_name;
	  echo $this->template;
	}

} # eoc