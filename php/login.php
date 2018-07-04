<?php 
	session_start();
	$host="localhost";
	$user="root";
	$passw="";
	$database="forensic";
	$table="user_details";
	extract($_POST);
	$mysqli=new mysqli($host,$user,$passw,$database);
	 $query="SELECT username FROM $table  WHERE email='$email' AND password='$pwd'";
	 $query2="SELECT username FROM $table  WHERE email='$email' AND password='$pwd'";
	 $query1="SELECT path FROM $table WHERE email='$email' AND password='$pwd'";
	 $res=$mysqli->query($query);
	 $name=$mysqli->query($query2);
	 if($name->num_rows>0)
	 {
	 	while($row=$name->fetch_assoc())
	 	$_SESSION['Name']=$row['username'];
	 echo $_SESSION['Name'];
	 }
	 $targetpath=$mysqli->query($query1);
	 if($targetpath->num_rows>0)
	 {
	 	while($row=$targetpath->fetch_row())
	 	$_SESSION['Image']=$row[0];
	 echo $_SESSION['Image'];
	 }
	$_SESSION['Email']="$email";
	 	if($res->num_rows>0)
	 	{
	 		header("location:../profile.php");
	 	}
	 	else
	 		header("location:../index.html");
	 	?>