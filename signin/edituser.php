<?php

require_once "home.php";

$fname = $lname = " ";

if (isset($_POST['updateinfo'])) {
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $dOB = mysqli_real_escape_string($db, $_POST['dob']);
    $user = $_SESSION["idnum"];

    $updatequery = "UPDATE registeredusers SET first_name = '$fname',last_name = '$lname',dOB = '$dOB' WHERE registeredID = '$user'";
    $updateresult = mysqli_query($db, $updatequery);
    $_SESSION['statmsg'] = "Update successfull";
    $_SESSION['msg_type'] = "success";
}


