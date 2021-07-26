<?php
//session_start();
//if (!isset($_SESSION["loggeduser"]))
	if (!isset($_COOKIE["loggeduser"]))
{
	header("Location: SessionCookie.php");
}
?>
<html>
<head><title>Add products</title></head>
<body>
<h1 align = "center">Welcome <?php echo $_COOKIE["loggeduser"]; ?></h1>
<a href = "">Add Products</a>
<a href = "">All products</a>
<a href = "">All Users</a>
<a href = "">All Categories</a>
<br>
<form>
Id<input type = "text" name = "Id" value = ""><br>
Name<input type = "text" name = "Name" value = ""><br>
Quantity<input type = "text" name = "Quantity" value = ""><br>
Price<input type = "text" name = "Price" value = ""><br>
Description<input type = "textbox" name = "Desc" value = ""><br>
<input type = "submit" value = "Add">
</form>
</body>
</html>