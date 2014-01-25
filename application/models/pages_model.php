<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {
	function selectAll(){
		$query = $this->db->get('pages');
		return $query->result();
	}
	function getById($pgid){
		$this->db->where('page_id',$pgid);
		$query = $this->db->get('pages');
		return $query->row();
	}
	function newPage($page_name,$page_link,$page_desc){
		$data = array(
			"page_name"=>$page_name,
			"page_link"=>$page_link,
			"page_desc"=>$page_desc
		);
		if($this->db->insert('pages',$data)){
			return true;
		}
	}
	function updatePage($pgid,$page_name,$page_link,$page_desc){
		$data = array(
			"page_id"=>$pgid,
			"page_name"=>$page_name,
			"page_link"=>$page_link,
			"page_desc"=>$page_desc
		);
		$this->db->where('page_id',$pgid);
		if($this->db->update('pages',$data)){
			return true;
		}
	}
	function delPage($page_id){
		$this->db->where('page_id',$page_id);
		if($this->db->delete('pages')){
			return true;
		}
	}
}

/* End of file pages_model.php */
/* Location: ./application/models/pages_model.php */