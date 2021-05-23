<?php
require '../controller/helper.php';

require '../controller/ClassesController.php';
if (isset($_POST['id'])) {
    $data = array(
        'id' => $_POST['id'],
        'ClassName' => $_POST['ClassName'],
    );
    $ClasseName = new ClassesController ;
    $ClasseName->UpdateSumClass($data);
}


?>