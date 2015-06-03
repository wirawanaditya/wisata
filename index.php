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
      +6281939000900 <br>
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
      </span> 
      </div>
       
      <center>
    <ul>
      <li class="current"><a href="about.php">Home</a></li>
      <li><a href="tampilData.php">Wisata</a></li>
      <li><a href="contact.php">Register</a></li>
    </ul>
    </center>
  </div>
  <div id="content">
    <div>
      <h3>Malang</h3>
      <div class="first"> <a href="#"><img src="images/Malang_WEB.jpg" width="430" height="300"/></a>
        <h2>You can Enjoy in Malang City</h2>
        <p>Kota Malang adalah sebuah kota yang terletak di Provinsi Jawa Timur, Indonesia. Kota yang berpenduduk 820.243 (2010) ini berada di dataran tinggi yang cukup sejuk, terletak 90 km sebelah selatan Kota Surabaya, dan wilayahnya dikelilingi oleh Kabupaten Malang. Luas wilayah kota Malang adalah 252,10 km2. Malang merupakan kota terbesar kedua di Jawa Timur setelah Surabaya, dan dikenal dengan julukan kota pelajar..</p>
      </div>
      
    </div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>