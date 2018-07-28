<?php 
//var_dump($_POST);
if (isset($_REQUEST['fullname'])) {
	$fullname = $_REQUEST['fullname'];
	$password = $_REQUEST['password'];
	$address = $_REQUEST['address'];
	$email = $_REQUEST['email'];

echo 'Fullname : ' ;
echo $fullname;
echo '<br/>';

echo 'Password : ' ;
echo $password;
echo '<br/>';

echo 'Adress : ' ;
echo $address;
echo '<br/>';

echo 'Email : ' ;
echo $email;
echo '<br/>';
}
?>