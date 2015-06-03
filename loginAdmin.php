<?php
session_start();
$vsession=$_SESSION['akun'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Malang Tour</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
      <div><a href="index.html"><img src="images/Untitled-1.jpg" width="336" height="86" /></a></div>
      <span>Blankontour@gmail.com <br />
      <br />
      +6281939000900</span> </div>
      <center>
    <ul>
      <li class="current"><a href="admin.php">Home</a></li>
      
      <li>
      <?php
	  	if(!$vsession)
		{
			echo"<a href='admin.php'>Register</a>";	
		}
	  ?>
      </li>
    </ul>
    </center>
  </div>
  <div id="content">
    <div>
     
      <h1>Register Admin</h1>


<form action="prosesLoginAdmin.php" method="post">
Username : 
<input type="text" name="nama"><br><br>
Password  : 
<input type="password" name="password"><br>


<input type="submit" value="masuk">
</form>



    
    
  <div id="footer"></div>
</div>
</body>
</html>