<?php
session_start();

require_once "../database/dbconnect.php";
// require_once "register_structure.php";
/* $registerHandle = new register_users();
$registerHandle->regisFunct(); */


$errors = array();
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicalcenter";

$db = new mysqli($servername, $username, $password, $dbname);

$fName = "";
$lName = "";
$email = "";
$dOB = "";
$gender = "";
$idNumber = " ";
$password = "";

include "errors.php";

if (isset($_POST['reg_user'])) {

    $fName = mysqli_real_escape_string($db, $_POST['first_name']);
    $lName = mysqli_real_escape_string($db, $_POST['last_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $dOB = mysqli_real_escape_string($db, $_POST['birth_date']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $idNumber = mysqli_real_escape_string($db, $_POST['identification']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
      }

    $user_check_query = "SELECT * FROM registeredusers WHERE registeredID='$idNumber' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['registeredID'] === $idNumber) {
            array_push($errors, "ID already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_DEFAULT); //encrypt the password before saving in the database

        $query = "INSERT INTO registeredusers (registeredID,first_name,last_name,gender,dOB,email,pass) 
                  VALUES('$idNumber', '$fName', '$lName', '$gender', '$dOB','$email','$password')";

        mysqli_query($db, $query);
        $_SESSION['first_name'] = $fName;
        $_SESSION['success'] = "You are now logged in";
        header('location:index.php');
    }
}
