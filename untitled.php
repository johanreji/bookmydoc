style="position: absolute; width: 100%; "
style="position: relative; padding-right:20px; padding-top: 20px;  " 


'$name','$phonenumber','$did'


?did={$row['id']}


<?php
$con=mysqli_connect("localhost","root","virurohan","hospital");
 
if(mysqli_connect_errno($con))
{
    echo 'Failed to connect';
}
 
//  $name=$_POST['name'];
// $phonenumber=$_POST['phonenumber'];

// $did=$_GET['did'];
?did={$row['id']}
 

 
mysqli_query($con,"INSERT INTO patientinfo(name,phonenumber,docid)
        VALUES("john","895624",	"1001")");

mysqli_close($con);
header("location: admin.php");

?>




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

<div id="patientdetails" style="position:relative; margin: auto;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:#b6e6ff; margin-top: 350px;">
  <h2 style="align-self: center;">Patient Details</h2>
  <form action="insert.php" method="post" >
   <label>Patient Name :</label>
   <input id="name" name="name" placeholder="Patient Name" type="text"><br><br>
   <label>Phone Number :    </label>
   <input id="phonenumber" name="phonenumber" placeholder="+91" type="Number"><br><br>
   <input style="width:100%;
background-color:#2f90ff;
color:#fff;
border:2px solid #white;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;" name="submit" type="submit"  value=" submit ">
   <span><?php echo $error; ?></span>
  </form>
 </div>

</body>
</html>

