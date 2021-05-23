<?php
require '../databases/db.php';
class User{

	///Forget password
	static public function forgetPas($data){
		$email = $data['email'];
		try{
			$query = 'SELECT * FROM users WHERE Email = :email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(':email' => $email));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo  'erreur' . $ex->getMessage();
		}
	}
	//Login
	static public function login($data){
		$email = $data['email'];
		try{
			$query = 'SELECT * FROM users WHERE Email = :email';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(':email' => $email));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo  'erreur' . $ex->getMessage();
		}
	}
	//register
	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO  `users` (`FirtName`, `LastName`, `Email`, `Password`)
			VALUES (:fulname,:lastname,:email,:password)');
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':fulname',$data['fulname']);
		$stmt->bindParam(':lastname',$data['lastname']);
		$stmt->bindParam(':password',$data['password']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
	//update user
	static public function updateUserProfile($data){
		$stmt = DB::connect()->prepare('UPDATE `users` SET `FirtName` = :FirtName , `LastName` = :LastName  , `Email` = :Email   , `Password` = :Password WHERE `users`.`id` = :id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':FirtName',$data['FirtName']);
		$stmt->bindParam(':LastName',$data['LastName']);
		$stmt->bindParam(':Email',$data['Email']);
		$stmt->bindParam(':Password',$data['Password']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
	//update user
	static public function updatePassword($data){
		$stmt = DB::connect()->prepare('UPDATE `users` SET `Password` = :Password WHERE `users`.`Email` = :Email');
		$stmt->bindParam(':Email',$data['Email']);
		$stmt->bindParam(':Password',$data['Password']);
		if($stmt->execute()){
			echo "success";
		}else{
			echo 'error';
		}
		$stmt = null;
	}
}

 ?>