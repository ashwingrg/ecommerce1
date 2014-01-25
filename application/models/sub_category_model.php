<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sub_category_model extends CI_Model {
	function selectAll(){
		$query = $this->db->get('subcategory');
		$data = $query->result();
		return $data;
	}
	function getById($scid){
		$sql = "SELECT * FROM subcategory WHERE subcategory_id=$scid";
		$res=mysql_query($sql);
		@ $re = mysql_fetch_assoc($res);
		return $re;
	}
	function newSubcategory($sc_type,$sc_name,$sc_description){
		$data = array(
			"category_id"=>$sc_type,
			"subcategory_name"=>$sc_name,
			"subcategory_description"=>$sc_description
		);
		if($this->db->insert('subcategory',$data)){
			return true;
		}
	}
	function delSubcategory($sc_id){
		$this->db->where('subcategory_id',$sc_id);
		$this->db->delete('subcategory');
		if($this->db->last_query()){
			return true;
		}
	}
	function updateSubcategory($sc_id,$sc_type,$sc_name,$sc_description){
		$this->db->where('subcategory_id',$sc_id);
		$data = array(
						"category_id"=>$sc_type,
						"subcategory_name"=>$sc_name,
						"subcategory_description"=>$sc_description
					);
		if($this->db->update('subcategory',$data)){
			return true;
		}
	}
}
/* End of file sub_category_model.php */
/* Location: ./application/models/sub_category_model.php */