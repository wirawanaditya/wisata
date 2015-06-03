<?php
session_start();
include"koneksi.php";
$xwisata=$_GET['kd_wisata'];
$vkdmember=$_GET['kd_member'];
$vkd_komentar=$_GET['kd_komentar'];
$vtanggapi=$_POST['tTanggapi'];
$vtanggal= date('Y-d-m');

$query=mysql_query("insert into tanggapi(kd_member,kd_komentar,pesan,tanggal) values($vkdmember,$vkd_komentar,'$vtanggapi','$vtanggal')");
if($query)
{
	?>
    <script language="javascript">
		alert("Tanggapi Masuk");
		document.location='detailData.php?kd_wisata=<?php echo $xwisata; ?>';
	</script>
    <?php
}
else
{
	?>
    <script language="javascript">
		alert("Tanggapi Gagal");
		document.location='detailData.php?kd_wisata=<?php echo $xwisata; ?>';
	</script>
    <?php
}
?>