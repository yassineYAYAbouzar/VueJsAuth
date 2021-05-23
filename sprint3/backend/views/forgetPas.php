<?php
require '../controller/helper.php';

require '../controller/UserController.php';
$neta = array(
	'email' => $_POST['email'],
);
$test2 = new UsersController ;
$test2->forgetPassword($neta);

?>