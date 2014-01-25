<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_model extends CI_Model {

	function getLatestProduct($id){
		$this->db->order_by('product_id','desc');
		$this->db->limit(9);
		if($id){
			$this->db->where('category_id',$id);
		}
		$query = $this->db->get('product');
		return $query->result();
	}
	function getLatestProductSuper(){
		$this->db->order_by('product_id','desc');
		$this->db->limit(1);
		$query = $this->db->get('product');
		return $query->row();
	}
	function getAllSubcategory(){
		$query=$this->db->get('subcategory');
		return $query->result();
	}
	function getProductSpecial(){
		// $this->db->order_by->rand();
		// $this->db->limit(1);
		// $query = $this->db->get('product');
		// return $query->row();
		$query = $this->db->query("select * from product order by rand() limit 1");
		return $query->row();
	}
	function newProduct(){
		$query = $this->db->query("select * from product limit 1");
		return $query->row();
	}
	function getSubCatProducts($scid){
		$this->db->where('subcategory_id',$scid);
		$query = $this->db->get('product');
		return $query->result();
	}
	function getAboutUs(){
		$this->db->where('page_name','About Us');
		$query = $this->db->get('pages');
		return $query->row();
	}
	function usrTblSignup($email,$password){
		$data = array(
			"email"=>$email,
			"password"=>$password
		);
		if($this->db->insert('user',$data)){
			$id = $this->db->insert_id();
			return $id;
		}
	}
	function usrInfoSignup($id,$fname,$mname,$lname,$phone,$paddress,$saddress,$city,$state,$country,$zip,$addressinfo,$infotype){
		$data = array(
			"user_id"=>"$id",
			"last_name"=>"$lname",
			"first_name"=>"$fname",
			"middle_name"=>"$mname",
			"phone_1"=>"$phone",
			"address_1"=>"$paddress",
			"address_2"=>"$saddress",
			"city"=>"$city",
			"state"=>"$state",
			"country"=>"$country",
			"zip" =>"$zip",
			"addressinfo"=>"$addressinfo",
			"infotype"=>"$infotype"
		);
		if($this->db->insert('user_info',$data)){
			return true;
		}
	}
	function userValidation($usremail, $usrpsw){
		$pass = hash("sha512",$usrpsw);
		$this->db->where('email',$usremail);
		$this->db->where('password',$pass);
		$query = $this->db->get('user');
		if($query->num_rows()>0){
			return $query->row();
		}
		else {
			return false;
		}
	}
}

/* End of file frontend_model.php */
/* Location: ./application/models/frontend_model.php */