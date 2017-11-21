<?php
$con = mysqli_connect("localhost","root","virurohan","hospital");
$name=$_POST['name'];
$id=$_GET['id'];
echo "$id";
$phonenumber=$_POST['phonenumber'];
$sql = "insert into patientinfo (name,phonenumber,docid) values ('$name',$phonenumber,$id)";
if (!mysqli_query($con,$sql))
{
 echo 'Not Inserted';
}

else
{
 echo 'Inserted Successfully';
 header("location: index.php");
}




?>

