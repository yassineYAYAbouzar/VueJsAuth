<?php
require '../model/User.php';
class UsersController {

	public function forgetPassword($item){
		$data['email'] = $item['email'];
		$result = User::forgetPas($data);
		if($result->Email === $item['email']){
			require_once 'mail.php';
				$mail->addAddress($item['email']);
				$mail->Subject = "password";
				$mail->Body = '
					modifier Password 
					<br>
					' . '<a href="http://localhost:8080/resetPassword?email='.$item['email']. 
					'&code='.$item['id'].'">http://localhost:8080/resetPassword?email='.$item['email']. 
					'&code='.$item['id'].'</a>';
					;
					
					$mail->setFrom("barberhb6@gmail.com", "yaya");
					$mail->send();
					echo 'success';
		}else{
			echo 'hellog';
		}
    }
	public function auth($item){
		$data['email'] = $item['email'];
		$result = User::login($data);
		if($result->Email === $item['email'] && password_verify($item['password'],$result->Password)){
			$user = $result;
			$_SESSION['UserRole'] =$user;
			if ($_SESSION["UserRole"]) {
				echo json_encode($user);
			exit();
			}else{
				echo 'Error';
			}
		}else{
			echo 'Error';
		}
    }
	public function register($item){
		    $email =  $item['email'];
			$fulname =  $item['fulname'];
			$lastname = $item['lastname'];
			$password = $item['password'];
		if(!empty($fulname) && !empty($email) && !empty($lastname) && !empty($password) ){
			
			$options = [
				'cost' => 12
			];
			$password = password_hash($item['password'],PASSWORD_BCRYPT,$options);
			$data = array(
				'email' => $item['email'],
				'fulname' => $item['fulname'],
				'lastname' => $item['lastname'],
				'password' => $password,
			);
			$result = User::createUser($data);
			if($result === "success"){
				echo "success";
			}else{
				echo $result;
			}
		}else{
		    echo 'all file is required';
		}
    }
//updateUser
	public function UpdateSumUser($item){
        $id = $item['id'];
        $Password = $item['Password'];
		if(!empty($id) && !empty($Password)){
			$options = [
				'cost' => 12
			];
			$password = password_hash($item['Password'],PASSWORD_BCRYPT,$options);
			$data = array(
				'id' => $item['id'],
				'FirtName' => $item['FirtName'],
				'LastName' => $item['LastName'],
				'Email' => $item['Email'],
				'Password' => $password,
			);
			$result = User::updateUserProfile($data);
			if($result === "success"){
				echo "success";
			}else{
				echo $result;
			}
		}else{
			echo 'all file is required';
		}
    }
	public function UpdateSumPassword($item){
        $Email = $item['Email'];
        $Password = $item['Password'];
		if(!empty($Email) && !empty($Password)){
			$options = [
				'cost' => 12
			];
			$Password = password_hash($item['Password'],PASSWORD_BCRYPT,$options);
			$data = array(
				'Email' => $item['Email'],
				'Password' => $Password,
			);
			$result = User::updatePassword($data);
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
