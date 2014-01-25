<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends My_Controller {

	public function index()
	{
		$this->load->model('product_model');
		$data['all_products'] = $this->product_model->selectAll();
		$this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidenav');
		$this->load->view('product/product_index_view',$data);
		$this->load->view('layout/admin/footer');	
	}

	public function addProduct(){
		$this->load->model('product_model');
		if($_POST){
			$prid = $this->uri->segment(4);
			$ctype = $this->input->post("ctype");
			$sctype = $this->input->post("sctype");
			$prname = $this->input->post("prname");
			$prprice = $this->input->post("prprice");
			$prdescription = $this->input->post("prdescription");
			//image upload
			//if edit
			if($prid){
				if($_FILES['product_image']['name']==""){
					$product_thumb = $this->input->post('image_old');
				}
				else{
						$oldfile =  $this->input->post('image_old');
						@unlink('uploads/'.$oldfile);
						$config['upload_path'] = 'uploads/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']	= '200';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';
						$config['encrypt_name'] = true;

						$this->load->library('upload', $config);

						if ( ! $this->upload->do_upload('product_image'))
						{
							$error = array('error' => $this->upload->display_errors());				
						}
						else
						{
							$data = array('upload_data' => $this->upload->data());
						}
						$product_thumb = $data['upload_data']['file_name'];
				}
			}
			else{
						$config['upload_path'] = 'uploads/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']	= '200';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';
						$config['encrypt_name'] = true;
						$this->load->library('upload', $config);
						if ( ! $this->upload->do_upload('product_image'))
						{
							$error = array('error' => $this->upload->display_errors());
						}
						else
						{
							$data = array('upload_data' => $this->upload->data());
						}
						$product_thumb = $data['upload_data']['file_name'];
				}
			if($prid){
				if($this->product_model->updateProduct($prid,$ctype,$sctype,$prname,$prprice,$prdescription,$product_thumb)){
					$this->session->set_flashdata('proup', 'Selected Product has been updated successfully');
					redirect ("admin/product");
				}			
			}
			else{
				$added=$this->product_model->newProduct($ctype,$sctype,$prname,$prprice,$prdescription,$product_thumb);
				if($added){
					$this->session->set_flashdata('proadd', 'New Product added successfully.');
					redirect("admin/product");
				}
			}
		}
		else{
			if($this->uri->segment(4)){
				$proid = $this->uri->segment(4);
				$data['prdatas'] = $this->product_model->getById($proid);
				$product_cat_id = $data['prdatas']['category_id'];
				//all subcategories
				$data['all_subcategory']=$this->product_model->getAllSubcategory($product_cat_id);
			}
			$this->load->view('layout/admin/header');
			$this->load->view('layout/admin/sidenav');
			$this->load->model('category_model');
			$data['all_category']= $this->category_model->selectAll();
			$this->load->view('product/product_new',$data);
			$this->load->view('layout/admin/footer');	
		}
	}
	public function delete($pr_id){
		$this->load->model('product_model');
		if($this->product_model->deleteProduct($pr_id)){
			$this->session->set_flashdata('prodel', 'Selected Product has been delete successfully.');
			redirect("admin/product");
		}
	}
	public function ajaxfilter(){
		$catid = $this->input->post('categoryid');
		$this->load->model('category_model');
		$data['subcat_list'] = $this->category_model->returnSubCategory($catid);
		$this->load->view('product/filter',$data);
	}
}

