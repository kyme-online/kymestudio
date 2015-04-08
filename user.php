<?php

include_once('connection.php');



class User{

	private $db;
	
	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();	
	}

	public function Login($name, $pass){
		if(!empty($name) && !empty($pass)){
			$st = $this->db->prepare("select * from user where username=? and password=?");
			$st->bindParam(1, $name);
			$st->bindParam(2, $pass);
			$st->execute();
			
			
			if($st->rowCount() == 1){
				$_SESSION['username'] = $name;
				header('Location: securedpage.php');
			}else {
				return "Incorrect username and password";			
			}
			
		}else{
			return "Please enter username and password";
		}
		
	}
}

?>