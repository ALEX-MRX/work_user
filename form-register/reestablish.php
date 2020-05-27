<?php 
session_start();
	if(isset($_POST['login']) and isset($_POST['password'])){
		$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
		$new_password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	} else {
		echo "ERROR";
	}
	require "connect.php";
	
	$new_password = password_hash($new_password, PASSWORD_DEFAULT);
		$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
		if(mysqli_num_rows($result) > 0) {
			$res = $mysql->query("UPDATE `users` SET `password`='$new_password' WHERE `login` = '$login'");
			if($res == true){
				header('Location: /');
			} else {
				echo "Данные не изменены";
			} 
		}
		
		$mysql->close();
		


	
?>