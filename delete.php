<?php

$userId = $_GET['id'];
include_once 'functions.php';



$functions = new UserRepository();

$functions->deleteUser($userId);

header("location:dashboard.php");


?>