<?php

require_once "../database/dbconnect.php";

$usernum = $deluser = $idvalue = "";

if (isset($_POST['search_user'])) {
    $usernum = mysqli_real_escape_string($db, $_POST['searchid']);

    $searchquery = "SELECT * FROM appointments WHERE  ID = '$usernum'";
    $searchresults = mysqli_query($conn, $searchquery);
    $_SESSION['patientid'] = $usernum;
    if (mysqli_num_rows($searchresults) == 0) {
        $_SESSION['statmsg'] = "No Appointments Made";
        $_SESSION['msg_type'] = "danger";
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delquery = "DELETE FROM appointments WHERE idkey = '$id'";
    $del = mysqli_query($conn, $delquery);
    $_SESSION['statmsg'] = "Deleted successfull";
    $_SESSION['msg_type'] = "danger";
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editapp = "SELECT * FROM appointments WHERE idkey ='$id'";
    $editresult = mysqli_query($conn, $editapp);
    $userrow = mysqli_fetch_array($editresult);
    $idvalue = $userrow['idkey'];
    $appointmentdate = $userrow['appdate'];


    if (count($userrow) == 1) {
        $newapp = $userrow['appdate'];
    }
}

if (isset($_POST['editsub'])) {
    $newdate = $_POST['newdate'];
    $newtime = $_POST['newtime'];
    $idvalue = $_POST['idkey'];
    $new = $newdate . " " . $newtime;
    $updateapp = "UPDATE appointments SET appdate = '$new' WHERE idkey = $idvalue ";
    $updateresult = mysqli_query($conn, $updateapp);
    $_SESSION['statmsg'] = "Update successfull";
    $_SESSION['msg_type'] = "success";
}


if (isset($_POST['message'])) {
    $drmsg = mysqli_real_escape_string($conn, $_POST['message']);
    $drfname = $_SESSION['id'];
    $drlname = $_SESSION['lastname'];
    $drid = $_SESSION['username'];

    if (!empty($_SESSION['patientid'])) {
        $patientid = $_SESSION['patientid'];

        $notesquery = "INSERT INTO drnotes(registeredID,drNotes,drID,dr_fname,dr_lname) VALUES ('$patientid','$drmsg','$drid','$drfname','$drlname')";
        $notesresult = mysqli_query($conn, $notesquery);
        $_SESSION['statmsg'] = "Upload successfull";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['statmsg'] = "No user selected";
        $_SESSION['msg_type'] = "danger";
    }
}
