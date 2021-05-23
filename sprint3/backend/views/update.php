
<?php
require '../controller/helper.php';

require '../controller/EtudientController.php';
if (isset($_POST['ID'])) {
    $data = array(
        'ID' => $_POST['ID'],
        'Fulname' => $_POST['Fulname'],
        'Email' => $_POST['Email'],
    );
    $test = new EtudientController ;
    $test->UpdateSumEtudient($data);
}


?>