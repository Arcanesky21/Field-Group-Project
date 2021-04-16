<?php
require_once "../database/dbconnect.php";
$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "medicalcenter";


$db = new mysqli($servername, $username, $passwor, $dbname);

$fname = $userID = $lname = $service = $contact = $moddate = $date = $time = $newdate = $message = "";

if(isset($_POST["sub_appointment"])){
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: signin.php");
        echo "Please log in first";
        exit();
      }else
      {
        $fname = mysqli_real_escape_string($db, $_POST['First-Name']);
        $lname = mysqli_real_escape_string($db, $_POST['Last-Name']);
        $service = mysqli_real_escape_string($db, $_POST['service']);
        $contact = mysqli_real_escape_string($db, $_POST['contact']);
        $date = mysqli_real_escape_string($db, $_POST['appdate']);
        $time = mysqli_real_escape_string($db, $_POST['apptime']);
        $message = mysqli_real_escape_string($db, $_POST['message']);
        $userID = $_SESSION["idnum"];

        $moddate = $date ." ". $time;
        $newdate = DateTime::createFromFormat('Y-m-d H:i:A', $moddate);
      
        $sqlquery = "INSERT INTO appointments(first_name,last_name,services,appdate,contact,messages,ID) VALUES ('$fname','$lname','$service','$moddate','$contact','$message','$userID')";
        $appdata = mysqli_query($db,$sqlquery);
        $_SESSION["appointment"] = "Appointment successful";
      }
}

function displaymessage(){

if(isset($_SESSION["appointment"]) ===true ){
    echo $_SESSION["appointment"];
}
}
?>