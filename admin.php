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
      +6281939000900
      <br>
      <br>
      <a href="login.php"> <h3>login</h3></a>
      </span> </div>
      
      <center>
    <ul>
      <li class="current"><a href="about.html">Home</a></li>
  
    </ul>
    </center>
  </div>
  <div id="content">
    <div>
      <h3>Admin</h3>
      <div class="first"> <a href="#">
      <?php
include"koneksi.php";
$query=mysql_query("SELECT * FROM komentar");
while($RS=mysql_fetch_array($query))
{
	$vKD_member=$RS['kd_member'];
	$vwisata=$RS['kd_wisata'];
	$vpesan=$RS['pesan'];
	$jenis=$RS['jenis_komentar'];
	
	$query2=mysql_query("SELECT * FROM member where kd_member='$vKD_member'");
	$RS2=mysql_fetch_array($query2);
	$vnamaMember=$RS2['nama'];
	$vfoto=$RS2['foto'];
	
	echo"
	 <table border=1>
	 	<tr>
			<td rowspan='2'>
				<img src='$vfoto' width='100' height='125'>
			</td>
			<td>$vnamaMember</td>
		</tr>
		<tr>
		<td>$vpesan</td>
		<td><a href</td>
		</tr>
	 </table>
	
	";
}
	
	?>
      </div>
      
    </div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>