<?php
require '../databases/db.php';
class Etudient{
	//get all etudient
	static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM etudient JOIN classes ON etudient.id_classe = classes.ID ORDER BY Fulname");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
    //add Etudient
    static public function addEtudient($data){
		$stmt = DB::connect()->prepare('INSERT INTO  `etudient` (`Fulname`, `Email`, `Id_Classe`)
			VALUES (:Fulname,:Email,:Id_Classe)');
		$stmt->bindParam(':Fulname',$data['Fulname']);
		$stmt->bindParam(':Email',$data['Email']);
		$stmt->bindParam(':Id_Classe',$data['Id_Classe']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
	//delet Etudient
    static public function DeletEtudient($data){
		$stmt = DB::connect()->prepare('DELETE FROM `etudient` WHERE `etudient`.`ID` = :ID ');
		$stmt->bindParam(':ID',$data['ID']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
	//Update Etudient
    static public function updateEtudient($data){
		$stmt = DB::connect()->prepare('UPDATE `etudient` SET `Fulname` = :Fulname , `Email` = :Email WHERE `etudient`.`ID` = :ID');
		$stmt->bindParam(':ID',$data['ID']);
		$stmt->bindParam(':Fulname',$data['Fulname']);
		$stmt->bindParam(':Email',$data['Email']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
}
?>