<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
	public function index()
	{
		if($_POST){
			 $email = $this->input->post("email");
			 $pass = $this->input->post("password");
			
			$this->load->model('user_model');
			$check = $this->user_model->checkIfExistUser($email, $pass);
			//if user is not a valid use
			if(!$check){
				$this->session->set_flashdata('invlogin','Invalid Username or Password');
				redirect('admin');
			}
			//if user is a valid user
			else{
				$userdata = array('userinfo'=>$check);
				$this->session->set_userdata($userdata);
				redirect('admin/home');
			}
		}
	//else form poseted
	$this->load->view('login');
	}
	function logout(){
		$this->session->unset_userdata('userinfo');
		$this->session->set_flashdata('logoutmsg','You have successfully terminated your session');
		redirect('admin');
	}
}
