<?php
require '../databases/db.php';
class Classes{
	//get all Classes
	static public function getAllsunClasses(){
        $stmt = DB::connect()->prepare("SELECT * FROM classes");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
    //add Classe
    static public function addClasse($data){
		$stmt = DB::connect()->prepare('INSERT INTO  `classes` (`ClassName`)
			VALUES (:ClassName)');
		$stmt->bindParam(':ClassName',$data['ClassName']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
	//delet Classe
    static public function DeletClasse($data){
		$stmt = DB::connect()->prepare('DELETE FROM `classes` WHERE id =:id');
		$stmt->bindParam(':id',$data['id']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
	//Update Claasse
    static public function updateClass($data){
		$stmt = DB::connect()->prepare('UPDATE `classes` SET `ClassName` = :ClassName WHERE `classes`.`id` = :id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':ClassName',$data['ClassName']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	} 
}

 ?>