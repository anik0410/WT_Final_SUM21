<?php
include 'Models/dbconfig.php';
$err_db = "";
//validation variables
if(isset($POST["add_category"])){
	//do validation
	//if no error
	$rs = insertCategory($POST["name"]);
	if($rs === true){
		header("Location: allcategories.php");
	}
	$err_db = $rs;
}

function insertCategory($name){
	$quert = "insert into categories values (NULL, '$name')";
	return execute($query);
}
?>