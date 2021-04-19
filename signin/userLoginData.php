<?php

require_once "../database/dbconnect.php";

$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "medicalcenter";


$db = new mysqli($servername, $username, $passwor, $dbname);
$errors = array();
$pass_error = $id_error = $username = $password = $row = $query = $query1 = $passquery = "";
$student = "Student";
$dr = "Doctor";

if (isset($_POST['commit'])) {
	$username = trim(mysqli_real_escape_string($db, $_POST['id_Number']));
	$password = trim(mysqli_real_escape_string($db, $_POST['password']));

	if (empty($username)) {
		global $id_error;
		$id_error =  "Please enter an ID number";
	}
	if (empty($password)) {
		$pass_error;
		"Please enter password";
	}

	if (count($errors) == 0) {
		$hashed = password_hash($password, PASSWORD_DEFAULT); //encrypt the password before saving in the database
		$query1 = "SELECT * FROM registeredusers WHERE registeredID='$username'";
		$passquery = mysqli_query($db, $query1);
		$row = mysqli_fetch_array($passquery);

		$query = "SELECT * FROM registeredusers WHERE registeredID='$username' AND pass='$hashed'";
		$results = mysqli_query($db, $query);
		
		  if (password_verify($password,$row["pass"]) == 1) {
			session_start();
			$_SESSION['username'] = $row["registeredID"];
			$_SESSION['loggedin'] = true;
			$_SESSION["id"] = $row["first_name"];
			$_SESSION["lastname"] = $row["last_name"];
			$_SESSION["bd"] = $row["dOB"];
			$_SESSION["idnum"] = $row["registeredID"];
			$_SESSION['success'] = "You are now logged in";
			$_SESSION['status'] = $row['reg_status'];
			if($_SESSION['status'] == $student){
			header('location:home.php');
			}elseif($_SESSION['status'] == $dr){
				header('location:RealdocHome.php');
			}
			
		} else {
			echo "Wrong username/password combination";
		} 
	} 
}

