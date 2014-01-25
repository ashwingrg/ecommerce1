<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct()
	{
		parent::__construct();	
	}
	public function add($id){
		//add the product to the cart
		$this->load->model('product_model');
		$prddet = $this->product_model->getById($id);
		session_start();
		$itemcount = count(@$_SESSION['NB_CART']);
		$yesno = 0;
		//to be done task
		if($itemcount!=0){
			foreach(@$_SESSION['NB_CART'] as $nc){
				if($id == $nc['product_id']){
					$yesno =1;
				}
			}
		}
		//check the id
		if($yesno==1){
			//item in cart
			echo 0;
		}
		else{
			//if matches found
			$_SESSION['NB_CART'][] =$prddet; 	
			$totalprice = 0;
			if($itemcount!=0){
				foreach($_SESSION['NB_CART'] as $nc){
					$totalprice = $totalprice+$nc['product_price'];
				}
			}
			else{
				$totalprice = $prddet['product_price'];
			}
			$resarray =array($totalprice,$itemcount+1);
			echo json_encode($resarray);
		}
	}
	public function cartUpdate(){
		session_start();
		$key = $this->uri->segment(4);
		$quantity = $this->input->post("qty");
		// echo $quantity;
		// echo "<pre>";
		// print_r(@$_SESSION['NB_CART']);
		foreach($_SESSION['NB_CART'] as $k=>$val):
			if($k==$key){
				//echo "matched";
				$_SESSION['NB_CART'][$key]['product_qty'] = $quantity;
				//echo $_SESSION['NB_CART'][$key]['product_qty'];
				$data = $this->session->set_flashdata('qtyup', 'Number of qty updated successfully.');
				redirect("home/cart/displayAll");
			}
		endforeach;
	}
	public function cartDelete(){
		session_start();
		$key = $this->uri->segment(4);
		foreach($_SESSION['NB_CART'] as $k=>$val):
			if($k==$key){
				unset($_SESSION['NB_CART'][$key]);
				redirect("home/cart/displayAll");
			}
		endforeach;
	}
	public function checkOut(){
		if($this->session->userdata('userinfo')){
			echo "this goes to paypal";
		}
		else {
			redirect("home/login");
		}
	}
	public function cartdet(){
		session_start();
		echo "<pre>";

		print_r(@$_SESSION['NB_CART']);
	}
	public function destroyCart(){
		session_start();
		session_destroy();
	}
	public function displayAll(){
		$this->load->model('frontend_model');
		$data['subview'] = 'layout/frontend/cart_view';
		$this->load->model('category_model');
		$data['all_category']= $this->category_model->selectAll();
		$data['all_latest_product'] = $this->frontend_model->getLatestProduct('');
		$data['getLatestProductHead'] = $this->frontend_model->getLatestProductSuper();
		$data['all_sub_category'] = $this->frontend_model->getAllSubcategory();
		$data['special_product'] = $this->frontend_model->getProductSpecial();
		$data['new_product'] = $this->frontend_model->getProductSpecial();
		$data['newproduct'] = $this->frontend_model->newProduct();
		$this->load->view('layout/frontend/layouts.php',$data);
		// $this->load->view('cart_view');
	}
}