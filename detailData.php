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
  
    </ul>
    </center>
  </div>
  <div id="content">
    <div>
     
      
      <?php
include"koneksi.php";
$xkdwis=$_GET['kd_wisata'];

$query=mysql_query("SELECT * FROM wisata WHERE kd_wisata = $xkdwis");
while($RS=mysql_fetch_array($query))
{
	$vKD_wisata=$RS['kd_wisata'];
	$vnama=$RS['nama_wisata'];
	$vlokasi=$RS['lokasi_gambar'];
	$vketerangan=$RS['keterangan'];
	
	
	?>
    <div class="first"> <a href="#"><img src="<?php echo $vlokasi; ?>" width="250" height="150"/></a>
        <h2><?php echo $vnama; ?></h2>
        <p><?php echo $vketerangan; ?></p>
		
      </div>
    <?php
	
}
?>
<form action="isiKomentar.php?kd_wisata=<?php echo $vKD_wisata; ?>" method="post">
Komentar:<br /><textarea name="komentar" rows="6" cols="50"></textarea></br></br>
        <input type="submit" name="submit" value="komentar">
</form>

<?php
include"koneksi.php";
$query=mysql_query("SELECT * FROM komentar where kd_wisata='$xkdwis'");
while($RS=mysql_fetch_array($query))
{
	$vkd_komentar=$RS['kd_komentar'];
	$vKD_member=$RS['kd_member'];
	$vwisata=$RS['kd_wisata'];
	$vpesan=$RS['pesan'];
	$jenis=$RS['jenis_komentar'];
	
	
	
	$query2=mysql_query("SELECT * FROM member where kd_member='$vKD_member'");
	$RS2=mysql_fetch_array($query2);
	$vnamaMember=$RS2['nama'];
	$vfoto=$RS2['foto'];
	
	echo"
	<form action='isiTanggapi.php?kd_member=$vsession&kd_komentar=$vkd_komentar&kd_wisata=$xkdwis' method='post'>
	 <table border=0>
	 	
		<tr>
			<td rowspan='2'>
				<img src='$vfoto' width='100' height='125'>
			</td>
			<td>Username :</td>
			<td>$vnamaMember</td>
		</tr>
		<tr>
		<td>Komentar :</td>
		<td>$vpesan</td>
		</tr>
		
		<Tr>
			<Td colspan='2'>
				<input type='text' name='tTanggapi'>
				<input type='submit' name='submit' value='Tanggapi'>
			</td>
		</tr>
	 </table>
	 </form>
	";
	$query3=mysql_query("SELECT * FROM tanggapi where kd_komentar=$vkd_komentar");
	while($RS3=mysql_fetch_array($query3))
	{
		$ymember=$RS3['kd_member'];
		$query4=mysql_query("SELECT * FROM member where kd_member='$ymember'");
		$RS4=mysql_fetch_array($query4);
		$ynamaMember=$RS4['nama'];
		$xkd_member=$RS3['kd_member'];
		$xpesan=$RS3['pesan'];
		echo"
		<table border='0' style='margin-right: 300px'>
		<tr>
			<Td>Nama</td><td>:</td><Td>$ynamaMember</td>
		</tr>
		<tr>
			<Td>Tanggapan</td><td>:</td><Td>$xpesan</td>
		</tr>
		<tr>
			<td>------------------</td>
			<td>---</td>
			<td>------------------</td>
		</tr>
		</table>
		";
	}
	echo"<br><hr>";	
}
	?>
    </div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>