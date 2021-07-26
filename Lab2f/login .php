<?php 'include main header.php';?>

<html>
<head>
<h1 align="center">
<h1> LOGIN PAGE</h1>
</head>
<body>

<form action="" method="post">
Username:<input type="text" placeholder="username" value="<?php echo $uname;?>" name="uname"><span><?php echo $err_uname;?></span><br>
Password:<input type="password" placeholder="password" value="<?php echo $pass;?>" name="pass"><span><?php echo $err_pass;?></span><br>
Submit:<input type="submit" placeholder="Login" name="Login"><br>
<a href= "signup.php">Sign_up</a>
</form>
</body>
</html>
<?php 'include footer.php';?>