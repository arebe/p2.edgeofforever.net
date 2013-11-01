<?php

class posts_controller extends base_controller(){
  public functon __construct(){

  public function add(){
	$this->template->content = View::instance('v_posts_add');
	$this->template->title = "New post";
	echo $this->template;
  }

  public function p_add(){

  }

  public function index(){

  }
}