<?php
include 'header.php';
include 'dbconfig.php';

	$query = "insert into users values(NULL,'Anik Nur','anik0410','123')";
	//echo execute($query);
	/*if (mysqli_query($conn,$query)){
		echo "Values inserted";
	}
	else{
		if (mysqli_errno($conn) == "1136"){
			echo "Probable error in data insertion: Coloumn missmatch ";
		};
	}*/
	$query = "Select * from users";
	//$query = "Select id, name from users";
	$result = get($query);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	echo "<table border = '1'>";
	echo "<tr>
	       <th>ID</th><th>Name</th><th>Username</th>
	      <tr>";
	//var_dump($result);
	foreach($result as $row){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["username"]."</td>";
		echo "</tr>";
	}
	echo "</table>";

include 'footer.php';
?>