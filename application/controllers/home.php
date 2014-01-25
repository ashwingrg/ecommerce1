<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends My_Controller {

	// function __construct(){
	// 	parent::construct();
	// }
	function index(){
		$this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidenav');
		$this->load->view('home_view');
		$this->load->view('layout/admin/footer');	
	}
}//end of class