<?php 
	
	$host="localhost";
	$user="root";
	$passw="";
	$database="forensic";
	$table="user_details";
	extract($_POST);
	$mysqli=new mysqli($host,$user,$passw,$database);
	$gender=$_POST['gender'];
	$target_path="../profile_images/";
	$target_path=$target_path.basename($_FILES['profile_img']['name']);
	move_uploaded_file($_FILES['profile_img']['tmp_name'], $target_path);
	 $query="INSERT INTO $table values('$rname','$remail','$rpswd','$rage','$gender','$target_path')";
	 $_SESSION['Image']=$target_path;
	 $res=$mysqli->query($query);
	 header("location:../index.html");
?>