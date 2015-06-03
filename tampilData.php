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
      <div><a href="index.html"><img src="images/Untitled-1.jpg" width="336" height="86" /></a></div>
      <span>Blankontour@gmail.com <br />
      <br />
      +6281939000900
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
     
      
      <?php
include"koneksi.php";
$query=mysql_query("SELECT * FROM wisata");
while($RS=mysql_fetch_array($query))
{
	$vKD_wisata=$RS['kd_wisata'];
	$vnama=$RS['nama_wisata'];
	$vlokasi=$RS['lokasi_gambar'];
	$data=$RS['keterangan'];
	$vketerangan=substr($data,0,250);

	?>
    <div class="first"> <a href="#"><img src="<?php echo $vlokasi; ?>" width="250" height="150"/></a>
        <h2><?php echo $vnama; ?></h2>
        <p><?php echo $vketerangan; ?></p>
		<a href="detailData.php?kd_wisata=<?php echo $vKD_wisata; ?>">Selanjutnya</a>
      </div>
    <?php
	
}
?>
    </div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>