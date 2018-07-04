<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/topnav.css">
</head>
<?php 
	session_start();
	$host="localhost";
	$user="root";
	$passw="";
	$database="forensic";
	$table="blog_details";
	extract($_POST);
	$mysqli=new mysqli($host,$user,$passw,$database);
	$email=$_SESSION['Email'];
	$name=$_SESSION['Name'];
	$targetpath=$_SESSION['Image'];
?>
<body style="background-color: #ffc100;">
	<div class="topnav" id="myTopnav">
	<img src="images/logo.png" alt="logo" style="width:80px; padding-top:10px; object-position: left;">
  	<a href="#events" >Events</a>
  	<a href="#books">Books</a>
  	<a href="#fsl">FSL Details</a>
  	<a href="#research">Research Papers</a>
  	<a href="#login">
  	<form action="php/login.php" method="post">
  	Email address<input type="text" name="email" required>&nbsp;Password<input type="password" name="pwd" required>&nbsp;&nbsp;<input type="submit" name="submitbtn" value="Sign In">
  	</form>
  	</a>
	</div>
	<div id="three-columns">
			<div id="column1" style="margin-left:00px;">
				<div id="profile_image"><center><img src="<?php echo "profile_image/".$targetpath; ?>" width="200" height="200" alt="" style="border-radius: 70%;" />
				</center>
				</div>
				<div id="name"><center><?php echo $name;?></center></div>
				<div id="email"><p>E-mail: <?php echo "$email";?></p></div>
			</div>
			<div id="column2" style="border-radius: 3px; background-color: #0000000";>
				<div class="write-post-title">
					<h3>Write Post</h3>
				</div>
				<form action="php/blog-update.php" method="post" enctype="multipart/form-data">
					<div class="post-title-wrapper">
						<input type="text" id="posttitle" name="posttitle" placeholder="Title" style="width:530px">
					</div>
					<div class="user-post-wrapper">
						<input type="text" id="userpost" name="sharepost" placeholder="Share an article or image" style="width:530px; height: 100px;">
					</div>

					<div class="image-input">
						<label for="image-input">
							Upload Image:    <img src="images/image upload.png">
						</label><input type="file" name="blog_pic" accept="image/*" id="image-input">
					</div>
					<div class="post-upload">
						<input type="submit" name="write" value="Write Post">
					</div>
				</form>
			</div>
			<div id="column3">
				<h2>Upload</h2>
				<div class="book-upload">
					<h4>ADD BOOKS</h4>
					<form action="uploadFile.php" method="post" enctype="multipart/form-data">
    				<div class="image-input">
						<label for="image-input">
							Upload Image:    <img src="images/image upload.png">
						</label><input type="file" name="pic" accept="image/*" id="image-input">
					</div>
    				<input type="submit" value="Upload File" name="submitfile">
					</form>
				</div>
				<div class="event">
					<h4>ADD EVENTS</h4>
					<form action="uploadEvent.php" method="post" enctype="multipart/form-data" style="background-color: lightgrey;  width: 150px; border: 25px #0077b5; padding: 25px; margin: 25px;">
    				<input type="text" name="eventToUpload" id="eventToUpload" placeholder=" Event Heading">
    				<input type="text" name="url" id="url" placeholder=" Upload URL"> <br>
    				<input type="submit" value="Upload Event" name="submitevent">
				</form>
				</div>
				<div class="research">
					<h4>ADD RESEARCH PAPER</h4>
					<form action="uploadResearch.php" method="post" enctype="multipart/form-data" style="background-color: lightgrey;  width: 150px; border: 25px #0077b5; padding: 25px; margin: 25px;">
    				<input type="text" name="url" id="url" placeholder=" Upload URL"> <br>
    				<input type="submit" value="Upload Event" name="submitevent">
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
