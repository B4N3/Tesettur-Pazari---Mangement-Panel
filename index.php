<?php
session_start();
require 'app/config/urls.php';
if (isset($_SESSION['token'])) {
	$token=$_SESSION['token'];
include 'app/includes/app.php';
}else{
	include 'login.php';
}
