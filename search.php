<?php

	$host="localhost";
	$user="root";
	$passw="";
	$database="forensic";
	$table="user_details";
	$mysqli=new mysqli($host,$user,$passw,$database);

	if($mysqli->connect_errno) {
		die('Connect Error: ' . $mysqli->connect_errno);
	}

	$query = $_REQUEST["query"];

	$sqlquery = "SELECT * FROM user_details WHERE UPPER(username) LIKE UPPER('%$query%')";

	$sql = $mysqli->query($sqlquery);

	if($sql->num_rows > 0) {
		while($row = $sql->fetch_assoc()) {
			$email = $row['email'];
			echo "
			<div class='column-item'>
				<button onclick='userSearch(\"$email\")'><h3>" . $row['username'] . "</h3></button>
				<div id='" . $row['email'] . "'></div>
			</div>
			";
		}
	}

?>