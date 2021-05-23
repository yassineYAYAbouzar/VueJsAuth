<?php
require '../controller/helper.php';

require '../controller/UserController.php';
$data = array(
	'email' => $_POST['email'],
	'fulname' => $_POST['fulname'],
	'lastname' => $_POST['lastname'],
	'password' => $_POST['password'],
);
$test = new UsersController ;
$test->register($data);

?>