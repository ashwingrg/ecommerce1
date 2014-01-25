<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{
		$this->load->model('frontend_model');
		$data['subview'] = 'layout/frontend/home';
		$this->load->model('category_model');
		$data['all_category']= $this->category_model->selectAll();
		$data['all_latest_product'] = $this->frontend_model->getLatestProduct('');
		$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
		$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
		$data['special_product'] = $this->frontend_model->getProductSpecial();
		$data['new_product'] = $this->frontend_model->getProductSpecial();
		$data['newproduct'] = $this->frontend_model->newProduct();
		$this->load->view('layout/frontend/layouts.php',$data);
	}
	function category($id){
		$this->load->library('pagination');
		$this->load->model('frontend_model');
		$data['subview'] = 'layout/frontend/catlist_home';
		$this->load->model('category_model');
		$data['all_category']= $this->category_model->selectAll();
		$data['all_latest_product'] = $this->frontend_model->getLatestProduct($id);
		$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
		$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
		$data['special_product'] = $this->frontend_model->getProductSpecial();
		$data['new_product'] = $this->frontend_model->getProductSpecial();
		$data['newproduct'] = $this->frontend_model->newProduct();
		
		$quantity = 6; // how many per page
		$start = $this->uri->segment(4); // this is auto-incremented by the pagination class
		if(!$start) $start = 0; // default to zero if no $start

		// slice the array and only pass the slice containing what we want (i.e. the $config['per_page'] number of records starting from $start)
		$data['items'] = array_slice($data['all_latest_product'], $start, $quantity);

		$config['base_url'] = base_url().'home/category/'.$id.'/';
		$config['uri_segment'] = 4;
		$config['total_rows'] = count($data['all_latest_product']);
		$config['per_page'] = $quantity;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links(); 
		$this->load->view('layout/frontend/layouts.php',$data);

	}

	function captcha(){
		$data['subview'] = 'layout/frontend/captcha_view';
		$this->load->model('frontend_model');
		$this->load->model('product_model');
		// $data['prod_detail'] = $this->product_model->getById($id);
		$this->load->model('category_model');
		$data['all_category']= $this->category_model->selectAll();
		// $data['all_latest_product'] = $this->frontend_model->getLatestProduct($id);
		$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
		$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
		$data['special_product'] = $this->frontend_model->getProductSpecial();
		$data['new_product'] = $this->frontend_model->getProductSpecial();
		$data['newproduct'] = $this->frontend_model->newProduct();
		$this->load->view('layout/frontend/layouts.php',$data);
	}

	function productdetails($id){
		$this->load->model('frontend_model');
		$this->load->model('product_model');
		$data['prod_detail'] = $this->product_model->getById($id);
		$data['subview'] = 'layout/frontend/prod-details';
		$this->load->model('category_model');
		$data['all_category']= $this->category_model->selectAll();
		$data['all_latest_product'] = $this->frontend_model->getLatestProduct($id);
		$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
		$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
		$data['special_product'] = $this->frontend_model->getProductSpecial();
		$data['new_product'] = $this->frontend_model->getProductSpecial();
		$data['newproduct'] = $this->frontend_model->newProduct();
		$this->load->view('layout/frontend/layouts.php',$data);
	}

	function subProducts($scatid){
		$this->load->model('frontend_model');
		$this->load->model('product_model');
		$this->load->model('category_model');
		$data['prod_detail'] = $this->product_model->getById($scatid);
		$data['subview'] = 'layout/frontend/subcatlist_home';
		$data['all_category']= $this->category_model->selectAll();
		$data['all_scat_products'] = $this->frontend_model->getSubCatProducts($scatid);
		$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
		$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
		$data['special_product'] = $this->frontend_model->getProductSpecial();
		$data['new_product'] = $this->frontend_model->getProductSpecial();
		$data['newproduct'] = $this->frontend_model->newProduct();
		$this->load->view('layout/frontend/layouts.php',$data);
	}
	function aboutus(){
		$this->load->model('frontend_model');
		$data['subview'] = 'layout/frontend/aboutus';
		$this->load->model('category_model');
		$data['all_category']= $this->category_model->selectAll(); //for all category
		$data['all_latest_product'] = $this->frontend_model->getLatestProduct('');
		$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper(); 
		$data['all_sub_category'] = $this->frontend_model->getAllSubcategory(); //for all subcategory
		$data['special_product'] = $this->frontend_model->getProductSpecial(); 
		$data['new_product'] = $this->frontend_model->getProductSpecial();
		$data['newproduct'] = $this->frontend_model->newProduct(); // for new product
		$data['pageds'] = $this->frontend_model->getAboutUs(); //for page description
		$this->load->view('layout/frontend/layouts.php',$data);
	}
	function login(){
		$this->load->model('frontend_model');
		if($_POST){
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$login = $this->frontend_model->userValidation($email,$password);
			if($login){
				$userdata = array("userinfo"=>$login);
				$this->session->set_userdata($userdata);
				redirect('home');
			}
			else {
				$this->session->set_flashdata('invlogin', 'Invalid Username and Password.');
				redirect('home/login');
			}
		}
		else {
			$this->load->model('frontend_model');
			$data['subview'] = 'layout/frontend/login_view';
			$this->load->model('category_model');
			$data['all_category']= $this->category_model->selectAll();
			$data['all_latest_product'] = $this->frontend_model->getLatestProduct('');
			$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
			$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
			$data['special_product'] = $this->frontend_model->getProductSpecial();
			$data['new_product'] = $this->frontend_model->getProductSpecial();
			$data['newproduct'] = $this->frontend_model->newProduct();
			$this->load->view('layout/frontend/layouts.php',$data);
		}
	}
	function signup(){
		$this->load->model('frontend_model');
		if($_POST){
			$fname = $this->input->post("fname");
			$mname = $this->input->post("mname");
			$lname = $this->input->post("lname");
			$phone = $this->input->post("phone");
			$paddress = $this->input->post("paddress");
			$saddress = $this->input->post("saddress");
			$city = $this->input->post("city");
			$state = $this->input->post("state");
			$country = $this->input->post("country");
			$zip = $this->input->post("zip");
			$addressinfo = $this->input->post("addressinfo");
			$infotype = $this->input->post("infotype");
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$id = $this->frontend_model->usrTblSignup($email,$password);
			$inserted = $this->frontend_model->usrInfoSignup($id,$fname,$mname,$lname,$phone,$paddress,$saddress,$city,$state,$country,$zip,$addressinfo,$infotype);
			if($inserted){
				redirect ('home/signup');
			}
		}
		else {
			$this->load->model('frontend_model');
			$data['subview'] = 'layout/frontend/signup_view';
			$this->load->model('category_model');
			$data['all_category']= $this->category_model->selectAll();
			$data['all_latest_product'] = $this->frontend_model->getLatestProduct('');
			$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
			$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
			$data['special_product'] = $this->frontend_model->getProductSpecial();
			$data['new_product'] = $this->frontend_model->getProductSpecial();
			$data['newproduct'] = $this->frontend_model->newProduct();
			$this->load->view('layout/frontend/layouts.php',$data);
		}
	}
	function logout(){
		$this->session->unset_userdata('userinfo');
		redirect('home');
	}
}

