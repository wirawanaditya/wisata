<?php
session_start();
$vsession=$_SESSION['akun'];
?>
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
      <div><a href="index.php"><img src="images/Untitled-1.jpg" width="336" height="86" /></a></div>
      <span>Blankontour@gmail.com <br />
      <br />
      +6281939000900
      <br>
      <br>
      <?php
	  	if(!$vsession)
		{
			echo"<a href='loginMember.php'> <h3>login</h3></a>";	
		}
        else
        {
        	echo"<a href='logout.php'> <h3>log Out</h3></a>";
        }
	  ?>
      </span> </div>
      
      <center>
    <ul>
      <li class="current"><a href="about.php">Home</a></li>
      <li><a href="tampilData.php">Wisata</a></li>
      <li><a href="contact.php">register</a></li>
    </ul>
    </center>
  </div>
  <div id="content">
    <div>
      <h3>Member</h3>
      <div class="first"> <a href="#">
      <h2>Masuklah Menjadi Member Kami</h2>
					

<html>
<body>


<form action="prosesDaftar.php" method="post" enctype="multipart/form-data">

Nama:<br />
<input name="nama" type="text" /><br />
Email:<br />
<input name="email" type="text" /><br />
Password:<br />
<input name="password" type="text" /><br />
No.Telepon:<br />
<input name="telpon" type="text" /><br />
Foto:
<br /><input type="file" name="gmb">
</br>
</br>
<input type="submit" name="submit" value="Masuk" />
</form>
</body>
</html>
      </div>
      
    </div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>