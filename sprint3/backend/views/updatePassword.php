<?php
require '../controller/helper.php';

require '../controller/UserController.php';

    $data = array(
        'Password' => $_POST['Password'],
        'Email' => $_POST['Email'],
    );
    $test = new UsersController ;
    $test->UpdateSumPassword($data);
?>