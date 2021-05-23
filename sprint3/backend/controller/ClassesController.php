<?php
require '../model/Classes.php';
class ClassesController {
	//get all Classes
	static public function getAllClasses(){
        $Classes = Classes::getAllsunClasses();
        return $Classes;
    }
    //add Classe
    public function addClasseName($item){
        $Email =  $item['ClassName'];
        if(!empty($Email)){
            $data = array(
                'ClassName' => $item['ClassName'],
            );
            $result = Classes::addClasse($data);
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
    public function deleteSumClasse($item){
        $id = $item['id'];
        if(!empty($id)){
            $data = array(
                'id' => $item['id'],
            );
            $result = Classes::DeletClasse($data);
            if($result === "success"){
                echo "success";
            }else{
                echo $result;
            }
        }else{
            echo 'all file is required';
        }
    }
    //UPdate Classe
    public function UpdateSumClass($item){
        $id = $item['id'];
        $ClassName = $item['ClassName'];
        if(!empty($id) && !empty($ClassName)){
            $data = array(
                'id' => $item['id'],
                'ClassName' => $item['ClassName'],
            );
            $result = Classes::updateClass($data);
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
