<?php
require '../controller/helper.php';

require '../controller/UserController.php';
$neta = array(
	'email' => $_POST['email'],
	'password' => $_POST['password'],
);
$test1 = new UsersController ;
$test1->auth($neta);
?>