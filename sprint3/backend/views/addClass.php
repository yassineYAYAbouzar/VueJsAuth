
<?php
require '../controller/helper.php';

require '../controller/ClassesController.php';
    $data = array(
        'ClassName' => $_POST['ClassName'],
    );
    $dataClasse = new ClassesController ;
    $dataClasse->addClasseName($data);
?>