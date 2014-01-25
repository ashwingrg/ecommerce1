<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends My_Controller {

	public function index()
	{
		$this->load->model('category_model');
		$data['all_category']= $this->category_model->selectAll();
		$this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidenav');
		$this->load->view('category/category_index_view',$data);
		$this->load->view('layout/admin/footer');	
	}
	function addCategory(){
		$this->load->model('category_model');
		if($_POST){
			$cname = $this->input->post("cname");
			$cdescription = $this->input->post("cdescription");
			$cid = $this->uri->segment(4);
			if($cid){
				//go for update
				if($this->category_model->updateCategory($cid,$cname,$cdescription)){
					$this->session->set_flashdata('catup', ' Selected Category hase been updated successfully.');
					redirect('admin/category');
				}
			}
			else{
					$added = $this->category_model->newCategory($cname,$cdescription);
					if($added){
						$this->session->set_flashdata('catadd', 'New Category added successfully.');
						redirect('admin/category');
					}
			}
		}
		else{
				//we have 2 cases
				//1 for edit
				if($this->uri->segment(4)){
					//this is edit
					$cid = $this->uri->segment(4);
					$data['datas'] = $this->category_model->selectById($cid);

				}

				$data['all_category']= $this->category_model->selectAll();
				$this->load->view('layout/admin/header');
				$this->load->view('layout/admin/sidenav');
				$this->load->view('category/category_new',$data);
				$this->load->view('layout/admin/footer');	
		}
		

	}

	function delete($cid){
		$this->load->model('category_model');
		if($this->category_model->delCategory($cid)){
			$this->session->set_flashdata('catdel', 'Selected Category has been deleted successfully.');
			redirect("admin/category");
		}
	}
}

