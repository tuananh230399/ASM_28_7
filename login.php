<?php  
	function login() {
		if (!empty($_POST)) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$connect = new mysqli("localhost", "root", "", "", "gokisoft");

			mysqli_set_charset($connect, "utf8");

			if ($connect->connect_error){
				var_dump($connect->connect_error);
				die();
			}

			$query = "SELECT * FROM STUDENT WHERE EMAIL = '".$email."' AND PASSWORD = '".$password."'";
			$result = mysqli_query($connect,$query);
			$data = array();
			while ($row = mysqli_fetch_array($result, 1)) {
			 	$data[] = $row;
			 } 

			if ($data != null && count($data) > 0) {
				header("Location: Hello.php");
			}
		}
	}
?>
