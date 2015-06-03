<?php
include"koneksi.php";
$vnama=$_POST['nama'];
$vemail=$_POST['email'];
$vpassword=$_POST['password'];
$vtelpon=$_POST['telpon'];

move_uploaded_file($_FILES['gmb']['tmp_name'],"images/".$_FILES['gmb']['name']);
$namaFile=$_FILES['gmb']['name'];

$query=mysql_query("insert into member(nama,email,password,no_telpon,foto) values('$vnama','$vemail','$vpassword','$vtelpon','images/$namaFile')");
if($query)
{
	?>
    <script language="javascript">
		alert("Daftar Berhasil Silahkan Login");
		document.location='loginMember.php';
	</script>
    <?php
}
else
{
	?>
    <script language="javascript">
		alert("Daftar Member Gagal");
		document.location='contact.php';
	</script>
    <?php
}
?>