<?php
class Dao
{

	// important information for the database
	private $host = 'us-cdbr-iron-east-05.cleardb.net';
	private $dbname = 'heroku_da004f557afe2d0';
	private $username = 'b5b9568d237966';
	private $password = 'b5ab58cd';
	
	// gets the connection to the database
	public function getConnection() {
	  try {
		 $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
	  } catch (Exception $e) {
		echo print_r($e,1);
	  }
	  return $connection;
	}

	// registers a new user
	public function registerUser($user_username,$user_email,$user_password) {	// username, email and password are passed in
	  $conn = $this->getConnection();											// connection is established with the database
	  $checkUserExistsQuery = "SELECT * FROM users WHERE user_email = :user_email";			// create a query to check if there is a user that already exists with the same email
	  $q1 = $conn ->prepare($checkUserExistsQuery);											// prepare the query in a prepared statement
	  $q1->execute([$user_email]);												// execute the prepared statement with the value passed in
	  $valid = $q1->fetch();													// fetch the results 
		
		// if there are no results (this means there are no users already existing with that email)
		if(empty($valid))
		{
			$conn = $this->getConnection();										// get another connection

			$user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
			if(!$user_password_hash) {
				throw new Exception("Password could not be hashed.");
			}


			$registerNewUserQuery = "INSERT INTO users (user_username, user_email, user_password) VALUES (:user_username, :user_email, :user_password)";	//SQL query to add user to database
			$q = $conn->prepare($registerNewUserQuery);							// create new prepared statement		
			$q->bindParam(":user_username", $user_username);					// bind username
			$q->bindParam(":user_email", $user_email);							// bind email
			$q->bindParam(":user_password", $user_password_hash);				// bind password
			$q->execute();														// execute the prepared statement
			$_SESSION['messages'] = "You are registered";						// set the messages
			header("Location: Login.php");										// redirect to login page for user to login to account
		}

		// there is a user that exists with that email, error back to registration
		else{
			$_SESSION['exists'] = "Your user name or email already exists!";	// sets message to say user already exists
			header("Location: Register.php");									// refirect to registration page
		}
	}

	// validate user credentials are in databse
	public function validUserCredentials($user_username, $user_password){
		$conn = $this->getConnection();																	// get the database connection
		$stmt = $conn->prepare("SELECT user_password FROM users WHERE user_username = :user_username");	// prepare SQL statement
		$stmt->bindParam(':user_username',$user_username);												//
		$stmt->execute();																				//
		$row = $stmt->fetch();																			//
		if(!$row) {																						//
			return false;																				//
		} else {
			$user_password_hash = $row['user_password'];												//
			return password_verify($user_password, $user_password_hash);			
		}
	}


	// UPDATE USERNAME
	public function changeUserUsername($user_username,$user_email,$new_username) {
		$conn = $this->getConnection();
		$updateusernameQuery = "UPDATE users SET user_username = :new_username WHERE user_email = :user_email";
		$q = $conn->prepare($updateusernameQuery);
		$q->bindParam(":new_username", $new_username);	
		$q->bindParam(":user_email", $user_email);	
		$q->execute();
		$valid = $q->fetch();
		if(!$valid){
			return false;
		}
		else {
			return true;
		}
	}
	  
  }
  