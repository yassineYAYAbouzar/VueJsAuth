<?php
require '../controller/helper.php';

require '../controller/UserController.php';

if (isset($_POST['id'])) {
    $data = array(
        'id' => $_POST['id'],
        'FirtName' => $_POST['FirtName'],
        'LastName' => $_POST['LastName'],
        'Password' => $_POST['Password'],
        'Email' => $_POST['Email'],
    );
    $test = new UsersController ;
    $test->UpdateSumUser($data);
}


?>