<?php 
	session_start();
	$host="localhost";
	$user="root";
	$passw="";
	$database="forensic";
	$table="blog_details";
	$email=$_SESSION['Email'];
	$head=$_POST['posttitle'];
	$data=$_POST['sharepost'];
	$mysqli=new mysqli($host,$user,$passw,$database);
	$target_path="../blog_images/";
	$target_path=$target_path.basename($_FILES['blog_pic']['name']);
	move_uploaded_file($_FILES['blog_pic']['tmp_name'], $target_path);
	 $query="INSERT INTO $table values('$email','$head','$data','$target_path')";
	    $res=$mysqli->query($query);
	    if($res)
			{
			echo "update success";
			echo "".$email."";
			header("location:../profile.php");
			}
		else
			{
			echo "Update failed";
			echo "".$email." ".$head." ".$data;
			}
	/*$check="SELECT 'heading' FROM $table WHERE $table.email='$email'";
	$checkres=$mysqli->query($check);
	$st=0;
	while($row=$checkres->fetch_row())
	{
		if($row==$head)
		{
			 $st=1;
		}
	}
	if($st==1)
	{
		echo "This blog already exist";
	}
	else
	{*/
	   
	//}
?>