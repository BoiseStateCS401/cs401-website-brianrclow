<?php
class Dao
{
	private $host = 'xefi550t7t6tjn36.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
	private $dbname = 'lc21acry1dwuj1mk';
	private $username = 'f6sl32mav9ykpww2';
	private $password = 'waj3pfigr5ng76ky';
	private $logger;
	
	public function getConnection() {
	  try {
		 $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
	  } catch (Exception $e) {
		echo print_r($e,1);
	  }
	  return $connection;
	}
	  
	public function getComments() {
	  $conn = $this->getConnection();
	  try {
	  return $conn->query("select * from chat order by PostDate desc", PDO::FETCH_ASSOC);
	  } catch(Exception $e) {
		echo print_r($e,1);
		exit();
	  }
	}
  
	  public function isValidUser($username, $password){
		  $conn = $this->getConnection();
		  $loginquery = "SELECT * FROM user WHERE Username = ? && Password = ?";
		   $q = $conn->prepare($loginquery);
		   $q->execute([$username, $password]);
		  $valid = $q->fetch();
		  return $valid;
	  }
	  
  
	public function registerUser($u_name, $u_email, $u_password)
	{
	 $conn = $this->getConnection();
	  $Query = "SELECT * FROM user WHERE Username = ? && Email = ?";
	  $q1 = $conn ->prepare($Query);
	  $q1->execute([$u_name,$u_email]);
	  $valid = $q1->fetch();
		
		if(empty($valid))
		{
			$conn = $this->getConnection();
			$registerQuery = "insert into user (Username, Email, Password) values (:Username, :Email, :Password)";
			$q = $conn->prepare($registerQuery);
			$q->bindParam(":Username", $u_name);
			$q->bindParam(":Email", $u_email);
			$q->bindParam(":Password", $u_password);
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
  