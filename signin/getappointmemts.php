<?php 
require_once "home.php";

$userid = $_SESSION["idnum"];
$getappoint = "SELECT * FROM appointments WHERE ID = '$userid'";
$appointquery = mysqli_query($db,$getappoint);

/* while($allappoint = mysqli_fetch_array($appointquery)){
    echo $allappoint['first_name'] . " " . $allappoint["last_name"] . " " .$allappoint["contact"]. " ". $allappoint["services"] . " ". $allappoint["appdate"] ."</br>". "</br>";
} */


?>