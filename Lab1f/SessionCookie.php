<?php
//session_start();
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$hasError = false;

    $user = array("anik"=>"123", "khwaja"=>"456", "showvik"=>"789");
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
		 if(empty($_POST["uname"])){
			 $hasError = true;
			 $err_uname = "Username Required!";
			 }
		 else{
			 $uname = $_POST["uname"];
		 }
		 if(empty($_POST["pass"])){
			 $hasError = true;
			 $err_pass = "Password Required!";
		 }
		 else{
			 $pass = $_POST["pass"];
		 }
		 
		 
		 if (!$hasError){
			 foreach($user as $u=>$p){
				 if ($uname == $u && $pass == $p)
					 //$_SESSION["loggeduser"] = $uname;
				     setcookie("loggeduser", $uname,time()+120);
			         header("Location: dashboard.php");
			 }
			 echo "Invalid username or password ";
		 
	 }
	 }
?>

<html>
<head>
<title>A General form</title>
<h1>Login please</h1>
</head>
<body>
<form method = "post" action = "">
username: <input type = "text" name = "uname" placeholder = "input username please" value = "<?php echo $uname; ?>"/> <span><?php echo $err_uname; ?></span>
<br/>
password: <input type = "password" name = "pass" placeholder = "input password" value = "<?php echo $pass; ?>"/><span><?php echo $err_pass; ?></span>
<br/>
<input type = "submit" value = "Login">
</form></body>

</html>