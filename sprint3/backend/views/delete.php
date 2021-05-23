<?php
require '../controller/helper.php';

require '../controller/EtudientController.php';
if (isset($_GET['ID'])) {
    $data = array(
        'ID' => $_GET['ID'],
    );
    $test = new EtudientController ;
    $test->deleteSumEtudient($data);
}


?>