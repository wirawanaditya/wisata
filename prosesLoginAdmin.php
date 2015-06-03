<?php
session_start();
include"koneksi.php";
$vusername=$_POST['nama'];
$vpassword=$_POST['password'];
$query=mysql_query("SELECT * from admin WHERE nama='$vusername' AND password='$vpassword'");
$kodeAkun="";
while($RS=mysql_fetch_array($query))
{
	$kodeAkun=$RS['kd_admin'];
}
$jml=mysql_num_rows($query);
if($jml>0)
	{
		$_SESSION['akun']=$kodeAkun;
	?>
	<script language="javascript">
		alert("Selamat Datang di Malang traveling")
		document.location='admin.php';
	</script>    
	<?php
	}

else
{
	
	?>
	<script language="javascript">
		alert("Data GAGAL")
		document.location='loginAdmin.php';
	</script>    
	<?php
	}
?>