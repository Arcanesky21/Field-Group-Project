<?php

// header("location:home.php");

require_once "userLoginData.php";
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "medicalcenter";



$info = 'Student';

$db = new mysqli($servername, $user, $password, $dbname);
$query3 = "INSERT INTO drnotes(registeredID) SELECT registeredID FROM registeredusers WHERE gender = '$info' ";
$data = mysqli_query($db, $query3);


$username = $_SESSION["username"];

$query4 = "SELECT * FROM drnotes WHERE registeredID = ' $username ' ";
$q4result = mysqli_query($db, $query4);
