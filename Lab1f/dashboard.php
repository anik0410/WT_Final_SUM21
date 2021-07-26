<?php
//session_start();
if (!isset($_COOKIE["loggeduser"]))
	//if (!isset($_SESSION["loggeduser"]))
{
	header("Location: SessionCookie.php");
}
?>
<html>
<head><title>Dash Board</title></head>
<body>
<h1 align = "center">Welcome <?php echo $_COOKIE["loggeduser"];?> </h1>
<a href = "Addproduct.php">Add Products</a>
<a href = "">All products</a>
<a href = "">All Users</a>
<a href = "">All Categories</a>

</body>
</html>