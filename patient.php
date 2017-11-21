<!DOCTYPE html>
<html>
<head>
 <title>Book my doc</title>
</head>
<body>
<div style="position: absolute; width: 100%; ">
  <img  id="cover"  width="100%"  height="250px" src="cover.jpg"   >
  </div>
  <div align="right" style="position: relative; padding-right:20px; padding-top: 20px; "   >
<a href="index.php" ><img height="50dp" width="" src="home.png"></a>
</div>

<?php
$id=$_GET['id'];
 //echo $id;

?>
<div id="login" style="position:relative; margin: auto;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:#b6e6ff; margin-top: 350px;">

<form action="insert.php?id=<?php echo $id ?>" method="post" >
Name : <input type="text" name="name">
<br/>
phone number : <input type="number" name="phonenumber">
<br/>
<input type="submit" >

 
</form>
</div>

</body>
</html>