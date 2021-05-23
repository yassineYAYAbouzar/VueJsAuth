<?php
require '../controller/helper.php';

require '../controller/ClassesController.php';

$Classe = new ClassesController ;
$ClasseName = $Classe->getAllClasses();
echo json_encode($ClasseName);
?>