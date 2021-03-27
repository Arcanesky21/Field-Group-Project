<?php
session_start();

require_once "../database/dbconnect.php";
require_once "register_structure.php";
$registerHandle = new register_users();
$registerHandle->regisFunct();
