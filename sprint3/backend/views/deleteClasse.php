<?php
require '../controller/helper.php';

require '../controller/ClassesController.php';
if (isset($_GET['id'])) {
    $data = array(
        'id' => $_GET['id'],
    );
    $ClasseName = new ClassesController ;
    $ClasseName->deleteSumClasse($data);
}


?>