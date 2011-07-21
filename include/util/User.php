<?php
/*
 * Created on 2007-9-13
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 require_once($_SERVER["DOCUMENT_ROOT"]."/include/connect/DBClass.php");
  
 class User extends DBClass{
 	private $id;
 	private $name;
 	private $sex;
 	private $birthday;
 	private $mobile;
 	private $address; 	
 	private $password;
 	private $email; 
 	
	function getID(){
		return $this->id;		
	} 		
	
	function setID($id){
		$this->id=$id;
	}
	
	function getName(){
		return $this->name;
	}
	
	function setName($name){
		$this->name=$name;
	}
	
 	function getSex(){
		return $this->sex;
	}
	
	function setSex($sex){
		$this->sex=$sex;
	}
	
 	function getBirthday(){
		return $this->birthday;
	}
	
	function setBirthday($birthday){
		$this->birthday=$birthday;
	}
	
 	function getMobile(){
		return $this->mobile;
	}
	
	function setMobile($mobile){
		$this->mobile=$mobile;
	}
	
 	function getAddress(){
		return $this->address;
	}
	
	function setAddress($address){
		$this->address=$address;
	}
	
	function getPassword(){
		return $this->password;
	}
	
	function setPassword($password){
		$this->password=$password;
	}
	
 	function getEmail(){
		return $this->email;
	}
	
	function setEmail($email){
		$this->email=$email;
	}

	function getUserById($id){
		$db=$this->getDB();
				
 	
	 	if($db!=null){	 		
		 	$sql = "select u.id as id, u.name as name, u.password as password, u.logo as logo, u.isclient as isclient, u.email as email";
		 	$sql.= " from c_user u";
		 	$sql.= " where u.id=".$id; 
		 	
		 	$result = $db->query("call pr_get_user_by_id(".$id.")");		 	
		 	
		 	$db->query($sql);
		 	
		 	if($result->num_rows>0){
		 		$row = $result->fetch_assoc();
		 		$this->setID($row['id']);
		 		$this->setName($row['name']);
		 		$this->setPassword($row['password']);
		 		$this->setEmail($row['email']);
		 	}
		 	
		 	$result->close();
		 	$db->close();
	 	}
	}
	
	function __construct(){
		parent::__construct();
	}
	
	function setAll($id,$name,$password,$logo,$isClient,$email){
		$this->id = $id;
		$this->name = $name;
		$this->password = $password;
		$this->email = $email;
	}
}
?>
