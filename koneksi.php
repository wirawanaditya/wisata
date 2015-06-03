<?php
$konek=mysql_connect("localhost","root","");
$pilihdb=mysql_select_db("proyek");

if(!$pilihdb)
{
	echo"Data Base Tidak Ada";	
}
?>
