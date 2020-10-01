<?php
class modelAdmin{
	public static function userAuthentication()
	{
		if (isset($_SESSION['sessionId'])) {
			$login=true;
		}
		else {
			$login=false;
			if(isset($_POST['btnLogin']))
			{
				if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email']!="" && $_POST['password']!="") {
					$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
					$password = filter_input(INPUT_POST, 'password');
					$sql='SELECT * FROM `users` WHERE `email` ="'.$email.'"';
					$db = new database();
					$item = $db->getOne($sql);

					if($item!=null) {
						$loginEmail = strtolower($_POST['email']);
						$password = $_POST['password'];
						if ($loginEmail == $item['email'] && password_verify($password, $item['password']))
					}
				}
			}
		}
	}
}