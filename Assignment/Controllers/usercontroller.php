<?php
include 'Models/dbconfig.php';
$name = "";
$err_name = "";
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$email = "";
$err_email = "";
$err_db = "";
$hasError = false;

if(isset($_POST["sign_up"])){
	if(empty($_POST["name"])){
		$hasError = true;
		$err_name = "This field cannot be empty.";
	}
	else{
		$name = $_POST["name"];
	}
	if(empty($_POST["uname"])){
		$hasError = true;
		$err_uname = "This field cannot be empty.";
	}
	else{
		$uname = $_POST["uname"];
	}
	if(empty($_POST["pass"])){
		$hasError = true;
		$err_pass = "This field cannot be empty.";
	}
	else{
		$pass = $_POST["pass"];
	}
	if(empty($_POST["email"])){
		$hasError = true;
		$err_email = "This field cannot be empty.";
	}
	else{
		$email = $_POST["email"];
	}
	if(!$hasError){
		$rs = insertUser($name, $uname, $email, $pass);
		if($rs === true){
			header("Location: login.php");
		}
		else{
			$err_db = $rs;
		}
	}
}

elseif(isset($_POST["btn_login"])){
	if(empty($_POST["uname"])){
		$hasError = true;
		$err_uname = "This field cannot be empty.";
	}
	else{
		$uname = $_POST["uname"];
	}
	if(empty($_POST["pass"])){
		$hasError = true;
		$err_pass = "This field cannot be empty.";
	}
	else{
		$pass = $_POST["pass"];
	}
	
	if(!$hasError){
		if(authenticateUser($uname, $pass)){
			header("Location: dashboard.php");
		}
		$err_db = "Username or password invalid.";
	}
}
function insertUser($name, $uname, $email, $pass){
	$query = "insert into users values(NULL, '$name', '$uname', '$email','$pass')";
	return execute($query);
}

function authenticateUser($uname, $pass){
	$query = "select * from users where username = '$uname' and password = '$pass'";
	$rs = get($query);
	if(count($rs) > 0){
		return true;
	}
	return false;
}
?>