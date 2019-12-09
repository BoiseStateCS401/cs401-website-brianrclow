<?php
class Dao
{
	private $host = 'us-cdbr-iron-east-05.cleardb.net';
	private $dbname = 'heroku_da004f557afe2d0';
	private $username = 'b5b9568d237966';
	private $password = 'b5ab58cd';
	
	public function getConnection() {
	  try {
		 $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
	  } catch (Exception $e) {
		echo print_r($e,1);
	  }
	  return $connection;
	}

	// VALID USER CHECK used for login
	public function isValidUser($username, $password){
		$conn = $this->getConnection();
		$loginquery = "SELECT * FROM users WHERE name = ? && password = ?";
		$q = $conn->prepare($loginquery);
		$q->execute([$username, $password]);
		$valid = $q->fetch();
		return $valid;
	}

	// REGISTER NEW USER
	public function registerUser($u_name, $u_email, $u_password)
	{
	 $conn = $this->getConnection();
	  $Query = "SELECT * FROM users WHERE name = ? && email = ?";
	  $q1 = $conn ->prepare($Query);
	  $q1->execute([$u_name,$u_password]);
	  $valid = $q1->fetch();
		
		if(empty($valid))
		{
			$conn = $this->getConnection();
			$registerQuery = "insert into users (name, email, password) values (:name, :email, :password)";
			$q = $conn->prepare($registerQuery);
			$q->bindParam(":name", $u_name);
			$q->bindParam(":email", $u_email);
			$q->bindParam(":password", $u_password);
			$q->execute();
			$_SESSION['messages'] = "You are registered";
			header("Location: Login.php");
		}
		else{
			$_SESSION['exists'] = "Your user name or email already exists!";
			header("Location: Register.php");
		}
	}
	  
  }
  