<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
	// private $category_id;
	// private $category_name;
	// private $category_description;
	function selectAll(){
		$query = $this->db->get('category');
		$data = $query->result();
		return $data;
	}
	function selectById($cid){
		$sql = "SELECT * FROM category WHERE category_id='$cid'";
		$d = mysql_query($sql);
		$dat = mysql_fetch_assoc($d);
		return $dat;
	}
	function newCategory($cname,$cdescription){
		$data = array(
						"category_name"=>$cname,
						"category_description"=>$cdescription
					);
		if($this->db->insert('category',$data)){
			return true;
		}
	}
	function delCategory($cid){
		$this->db->where('category_id', $cid);
		$this->db->delete('category'); 
		if($this->db->last_query()){
			return true;
			// redirect("category");
		}
	}
	function updateCategory($cid,$cname,$cdescription){
		$this->db->where('category_id',$cid);
		$data = array(
						"category_name"=>$cname,
						"category_description"=>$cdescription
					);
		if($this->db->update('category',$data)){
			return true;
		}
	}

	function returnSubCategory($catid){
		$this->db->where('category_id',$catid);
		$query = $this->db->get('subcategory');
		return $query->result();
	}
} // end of class
/* End of file category_model.php */
/* Location: ./application/models/category_model.php */