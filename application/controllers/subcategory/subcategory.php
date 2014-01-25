<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subcategory extends My_Controller {

	public function index()
	{
		$this->load->model('sub_category_model');
		$data['all_subcategory']=$this->sub_category_model->selectAll();
		$this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidenav');
		$this->load->view('subcategory/subcategory_all_view',$data);
		$this->load->view('layout/admin/footer');
	}
	function addSubcategory(){
		$this->load->model('sub_category_model');
		$this->load->model('category_model');
		if($_POST){
			$sc_name = $this->input->post("scname");
			$sc_description = $this->input->post("scdescription");
			$sc_type = $this->input->post("sctype");
			$scid=$this->uri->segment(4);
			if($scid){
				//this is update
				$up = $this->sub_category_model->updateSubcategory($scid,$sc_type,$sc_name,$sc_description);
				if($up){
					$this->session->set_flashdata('scatup', 'Selected Sub Category has been updated succesfully.');
					redirect("admin/subcategory");
				}
			}
			else {
				//this is add/new
				$add = $this->sub_category_model->newSubcategory($sc_type,$sc_name,$sc_description);
				if($add){
				$this->session->set_flashdata('scatadd', 'New Sub Category added succesfully.');
				redirect("admin/subcategory");
				}
			}		
		}
		else{
			if($this->uri->segment(4)){
				$scid=$this->uri->segment(4);
				$data['scdatas']=$this->sub_category_model->getById($scid);
			}
			$this->load->view('layout/admin/header');
			$this->load->view('layout/admin/sidenav');
			$data['all_category']= $this->category_model->selectAll();
			$this->load->view('subcategory/subcategory_new',$data);
			$this->load->view('layout/admin/footer');
		}
	}
	function delete($scid){
		$this->load->model('sub_category_model');
		$del = $this->sub_category_model->delSubcategory($scid);
		if($del){
			$this->session->set_flashdata('scatdel', 'Selected Sub Category has been deleted successfully.');
			redirect("admin/subcategory");
		}
	}
}

/* End of file sub_category.php */
/* Location: ./application/controllers/sub_category.php */