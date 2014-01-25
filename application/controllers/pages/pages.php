<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends My_Controller {

	public function index()
	{
		$this->load->model('pages_model');
		$data['all_pages'] = $this->pages_model->selectAll();
		$this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidenav');
		$this->load->view('pages/pages_index_view',$data);
		$this->load->view('layout/admin/footer');	
	}
	public function addPage(){
		$this->load->model('pages_model');
		if($_POST){
			$pgid = $this->uri->segment(4);
			$pagename = $this->input->post("pagename");
			$pagelink = $this->input->post("pagelink");
			$pgdescription = $this->input->post("pgdescription");
			if($pgid){
				$updated = $this->pages_model->updatePage($pgid,$pagename,$pagelink,$pgdescription);
				if($updated){
					$this->session->set_flashdata('pageup', 'Selected page has been updated successfully.');
					redirect('admin/pages');
				}
			}
			else {
				$added = $this->pages_model->newPage($pagename,$pagelink,$pgdescription);
					if($added){
					$this->session->set_flashdata('pageadd', 'New page added successfully.');
					redirect('admin/pages');
				}
			}
		}
		else{
			$pgid = $this->uri->segment(4);
			$data['pgdata'] = $this->pages_model->getById($pgid);
			$this->load->model('pages_model');
			$this->load->view('layout/admin/header');
			$this->load->view('layout/admin/sidenav');
			$this->load->view('pages/page_new',$data);
			$this->load->view('layout/admin/footer');
		}
	}
	public function delete($pgid){
		$this->load->model('pages_model');
		$del = $this->pages_model->delPage($pgid);
		if($del){
			$this->session->set_flashdata('pagedel', 'Selected page has been deleted successfully.');
			redirect('admin/pages');
		}
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages/pages.php */