<?php
require '../controller/helper.php';

require '../controller/EtudientController.php';

$etidient = new EtudientController ;
$etud = $etidient->getAllEtidient();
echo json_encode($etud);
?>