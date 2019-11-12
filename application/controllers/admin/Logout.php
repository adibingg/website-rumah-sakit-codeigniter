<?php

defined('BASEPATH') OR exit("No dirrect script access allowed!");

class Logout extends CI_Controller{


	function index(){
        $this->session->sess_destroy();
	}
}