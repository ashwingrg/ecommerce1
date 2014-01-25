<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	function selectAll(){
		$query = $this->db->get('product');
		$data = $query->result();
		return $data;
	}
	function getById($pr_id){
		$sql = "SELECT * FROM product WHERE product_id='$pr_id'";
		$query = mysql_query($sql);
		$dat = mysql_fetch_assoc($query);
		return $dat;

		// $this->db->where('product_id',$pr_id);
		// $query = $this->db->get('product');
		// return $query->row();
	}
	function deleteProduct($pr_id){
		$this->db->where('product_id',$pr_id);
		$this->db->delete('product');
		if($this->db->last_query()){
			return true;
		}
	}
	function newProduct($c_type,$sc_type,$pr_name,$pr_price,$pr_description,$imgname){
		$data = array(
			"category_id"=>$c_type,
			"subcategory_id"=>$sc_type,
			"product_name"=>$pr_name,
			"product_price"=>$pr_price,
			"product_desc"=> $pr_description,
			"product_thumb_image"=>$imgname
		);
		if($this->db->insert('product',$data)){
			return true;
		}
	}
	function updateProduct($pr_id,$c_type,$sc_type,$pr_name,$pr_price,$pr_description,$imgname){
		$this->db->where('product_id',$pr_id);
		$data = array(
			"category_id"=>$c_type,
			"subcategory_id"=>$sc_type,
			"product_name"=>$pr_name,
			"product_price"=>$pr_price,
			"product_desc"=> $pr_description,
			"product_thumb_image"=>$imgname
		);
		if($this->db->update('product',$data)){
			return true;
		}
	}

	function getAllSubcategory($catid){
		$this->db->where('category_id',$catid);
		$query = $this->db->get('subcategory');
		return $query->result();
	}
}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */