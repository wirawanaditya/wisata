<?php
session_start();
include"koneksi.php";
$vwisata=$_GET['kd_wisata'];
$vkomentar=$_POST['komentar'];
$vakun=$_SESSION['akun'];
$vjenis=1;
$vtanggal=date('Y/d/m');

$query=mysql_query("insert into komentar(kd_member,kd_wisata,pesan,jenis_komentar,tanggal) values($vakun,$vwisata,'$vkomentar',$vjenis,'$vtanggal')");
if($query)
{
	?>
    <script language="javascript">
		document.location='detailData.php?kd_wisata=<?php echo $vwisata; ?>';
	</script>
    <?php
}
else
{
	?>
    <script language="javascript">
		alert("Komentar Gagal");
		document.location='detailData.php?kd_wisata=<?php echo $vwisata; ?>';
	</script>
    <?php
}
?>