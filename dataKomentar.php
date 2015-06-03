<html>
<head>
	<meta charset="UTF-8">
	<title>WIF Travel</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie.css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" class="logo"><img src="images/WIF EX.png" width="242" height="89"></a>
		</div> 
		<div class="navigation">
			<ul>
				<li><a href="dataPaket.php">Data Paket</a></li>
                <li><a href="dataPembayaran.php">Data PEMBAYARAN</a></li>
				<li>
					<a href="dataKomentar.php">Data Komentar</a>
				</li>
				<li>
					<a href="dataAdmin.php">kembali</a>
				</li>
               
                
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="contact">
					
						
						<label for="subject"> <span></span>
							
						</label>
				
					
				<h1 align="center"> TABEL KOMENTAR</h1>
<table border="1" align="center">
<tr>
<td>Nama </td> <td align="center"> Email </td><td align="center"> Komentar </td><td align="center"> ket </td><td align="center"> ubah </td>
</tr>

<?php
include"koneksi.php";
$query=mysql_query("SELECT * FROM coment");
while($RS=mysql_fetch_array($query))
{
	$vnama=$RS['nama'];
	$vemail=$RS['email'];
	$vkomentar=$RS['komentar'];
	
	echo"<tr>";
	
	echo"<td>$vnama</td>";
	echo"<td>$vemail</td>";
	echo"<td>$vkomentar</td>";
	echo"<td><a href='hapusdata_pemesanan.php?id=$vID_pemesanan'>Hapus</a></td>";
	echo"<td><a href='ubahdata_pemesanan.php?id=$vID_pemesanan'>Update</a></td>";
	echo"</tr>";
}
?>
