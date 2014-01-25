<?php 
class user_model extends CI_Model{
	private $u_id;
	private $psw;
	private $email;
	private $msg;
	private $from;
	function __construct(){
		
	}
	function selectAll(){
		$sql = "SELECT * FROM user";
		$res = mysql_query($sql);
		$row = array();
		while($r = mysql_fetch_array($res)){
	   		$row[] = $r;
		}
		return $row;
	}
	function getByID($uid){
		$this->u_id = $uid;
		$sql = "SELECT * FROM user where user_id='$this->u_id'";
		$inf = mysql_query($sql);
		$info = array();
		$info = mysql_fetch_assoc($inf);
		return $info;
	}
	function addUser($nemail,$hashpassword){
		$this->email = $nemail;
		$this->psw = $hashpassword;		
		$sql = "INSERT INTO user values('','$this->email''$this->psw','','','','')";
		if(mysql_query($sql)){
			//
		}
		else{ echo "error while adding"; }
	}
	function delAUser($uid){
		$this->u_id = $uid;
		$sql = "DELETE FROM tbl_user where user_id='$this->u_id'";
		if(mysql_query($sql)){
			redirect("/user");
		}
	}
	function delAllUser(){
		$sql = "TRUNCATE TABLE tbl_user";
		if(mysql_query($sql)){
			redirect("/user");
		}
	}
	function checkIfExistUser($email, $pass){
		$pass = hash("sha512",$pass);
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		$query = $this->db->get('user');
		
		if($query->num_rows()>0){
			return $query->row();
		}
		else{
			return false;
		}
	}
	function updateUser($uid,$nusername,$hashpassword,$nemail){
		$this->u_id = $uid;
		$this->usrname = $nusername;
		$this->psw = $hashpassword;
		$this->email = $nemail;
		$sql = "UPDATE tbl_user SET username='$this->usrname', password='$this->psw', user_email='$this->email' WHERE user_id='$this->u_id'";
		if(mysql_query($sql)){
			redirect("/user");
		}
	}
}//end of class