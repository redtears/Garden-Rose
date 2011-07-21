<?php
/*
 * Created on 2007-9-9
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class DBClass{
	
	const localhost = "localhost"; 		//mysql database ip
	const username = "root";			//mysql user name
	const password = "kimi";			//mysql user login password
	const databaseName = "Garden-Rose";		//mysql database name
	
	private $db = null;
	
	public function __construct(){
		
		@ $db = new mysqli(self::localhost,self::username,self::password,self::databaseName);
		$db->autocommit(FALSE);
		$db->set_charset('utf8');
		
		if(mysqli_connect_errno()){
			$this->setDB(null);
		}else{
			$this->setDB($db);
		}
	}
	
	public function getDB(){
		return $this->db;
	} 	
	private function setDB($db){
		$this->db = $db;
	}
	
	public function commit(){
		$this->db->commit();
	}
	
	public function rollback(){
		$this->db->rollback();
	}
	
	public function close(){
		$this->db->close();
	}
 }
?>
