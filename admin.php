<!DOCTYPE html>
<html>
<head>
	<title>BookMyDoc</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin: 0px;">
<div style="position:absolute; width: 100%; ">
	<img  id="cover"  width="100%"  height="250px" src="cover.jpg"   >
	</div>
	<div align="right" style=" position:relative;padding-right:20px; padding-top: 20px;  "   >
<a href="lout.php" ><img height="50dp" width="" src="logout.png"></a>
</div>

<div id="login" style="position:relative; margin: auto;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:#b6e6ff; margin-top: 350px;">
<?php
$con=mysqli_connect("localhost","root","virurohan","hospital");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM patientinfo");
$res = mysqli_query($con,"SELECT * FROM doctorinfo");

echo "<table border='0'>
<tr>
<th>name</th>
<th>phone number</th>
<th>doctor name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['phonenumber'] . "</td>";
$x=$row['docid'];
$res = mysqli_query($con,"SELECT * FROM doctorinfo where id='".$x."'");
$r = mysqli_fetch_array($res);
echo "<td>" . $r['name'] . "</td>";


echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</div>

</body>
</html>

<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: login.php"); // Redirecting To Home Page
}
?>
