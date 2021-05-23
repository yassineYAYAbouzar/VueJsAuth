
<?php
require '../controller/helper.php';

require '../controller/EtudientController.php';

    $stm2= DB::connect()->prepare("SELECT `id` FROM `classes` WHERE `ClassName`= :ClassName");
    $stm2->bindParam(":ClassName",$_POST['ClassName']);
    $stm2->execute();
    $count = $stm2->rowCount();
  if($count === 1 ){
    echo "success";
    $t = $stm2->fetch(PDO::FETCH_OBJ);
  }else{
    echo 'error';
  }

  $id_clas= $t->id;
  print_r($id_clas);
  $data = array(
    'Fulname' => $_POST['Fulname'],
    'Email' => $_POST['Email'],
    'Id_Classe' => $id_clas,
);
$test = new EtudientController ;
$test->adsumEtudient($data);
?>