<!DOCTYPE html>
<html>
<head>
	<title>BookMyDoc</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin: 0px;">
<div style="position: absolute; width: 100%; ">
	<img  id="cover"  width="100%"  height="250px" src="cover.jpg"   >
	</div>
	<div align="right" style="position: relative; padding-right:20px; padding-top: 20px; "   >
<a href="index.php" ><img height="50dp" width="" src="home.png"></a>
</div>



<div id="login" style="position:relative; margin: auto;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:#b6e6ff; margin-top: 350px;">
  <h2 style="align-self: center;">Admin Login</h2>
  <form action="" method="post" >
   <label>Username :</label>
   <input id="name" name="username" placeholder="username" type="text"><br><br>
   <label>Password :    </label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input style="width:100%;
background-color:#2f90ff;
color:#fff;
border:2px solid #white;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;" name="submit" type="submit"  value=" Login ">
   <span><?php echo $error; ?></span>
  </form>
 </div>



</body>
</html>

<?php
include('lin.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: admin.php"); // Redirecting To Profile Page
}
?> 
