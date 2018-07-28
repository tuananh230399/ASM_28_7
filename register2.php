<?php  
	function login() {
		if (!empty($_POST)) {
			$fullname = $_POST['fullname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$phonenumber = $_POST['phonenumber'];
			

			$connect = new mysqli("localhost", "root", "", "php_basic");

			mysql_set_charset($connect, "utf8");
			if ($connect->connect_error) {
				var_dump($connect->connect_error);
				die();
			}

			$query = "INSERT INTO STUDENT(FULL_NAME, USER_NAME, PASSWORD, EMAIL, PHONE_NUMBER)
			VALUES ('','','','','')"
			mysqli_query($connect, $query);

			$connect->close();

			header("Location: Hello.php");			
?>