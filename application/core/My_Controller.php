<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$sessarray = $this->session->userdata('userinfo');
		if(!$sessarray){
			redirect('login');
		}
	}
}

