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

	$email = $_REQUEST["email"];

	echo "<div class='column-item'> <h2>BLOG</h2> </div>";

	$blogQuery = "SELECT * FROM blog_details WHERE email = '$email' AND blog_image IS NOT NULL";

	$blogSqlImage = $mysqli->query($blogQuery);
	if($blogSqlImage->num_rows > 0) {
		while($row = $blogSqlImage->fetch_assoc()) {
			echo "<div class='column-item'>
					<div class='post-title'>
						<h3> " . $row['heading'] . 
					"</h3></div>
					<div class='post-body'>
						<p> " . $row['data'] .
						"</p>
					</div>
					<div class = 'post-image'>
						<img src='" . $row['blog_image'] . "'>
					</div>
					</div> ";
		}
	}
?>