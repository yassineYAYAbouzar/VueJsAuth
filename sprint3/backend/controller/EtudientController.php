<?php
require '../model/etudient.php';
class EtudientController {
	//get all etudient
	static public function getAllEtidient(){
        $Etidient = Etudient::getAll();
        return $Etidient;
    }
    //add Etudient
    public function adsumEtudient($item){
        $Email =  $item['Email'];
        $Fulname =  $item['Fulname'];
        $Id_Classe = $item['Id_Classe'];
        if(!empty($Email) && !empty($Fulname) && !empty($Id_Classe)){
            $data = array(
                'Fulname' => $item['Fulname'],
                'Email' => $item['Email'],
                'Id_Classe' => $item['Id_Classe'],
            );
            $result = Etudient::addEtudient($data);
            if($result === "success"){
                echo "success";
            }else{
                echo $result;
            }
        }else{
            echo 'all file is required';
        }
    }
    //Delet Etudient
    public function deleteSumEtudient($item){
        $ID = $item['ID'];
        if(!empty($ID)){
            $data = array(
                'ID' => $item['ID'],
            );
            $result = Etudient::DeletEtudient($data);
            if($result === "success"){
                echo "success";
            }else{
                echo $result;
            }
        }else{
            echo 'all file is required';
        }
    }
    //UPdate Etudient
    public function UpdateSumEtudient($item){
        $ID = $item['ID'];
        if(!empty($ID)){
            $data = array(
                'ID' => $item['ID'],
                'Fulname' => $item['Fulname'],
                'Email' => $item['Email'],
            );
            $result = Etudient::updateEtudient($data);
            if($result === "success"){
                echo "success";
            }else{
                echo $result;
            }
        }else{
            echo 'all file is required';
        }
    }
}
