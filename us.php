<?php
session_start();
$vsession=$_SESSION['akun'];
?>
<html>
<head>
<title>Aviation School | About</title>
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
			echo"<a href='login.php'> <h3>login</h3></a>";	
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
      <li><a href="us.php">Wisata</a></li>
      <li><a href="contact.php">Register</a></li>
    </ul>
    </center>
  </div>
  <div id="content">
    <div>
      <h3>Wisata Malang</h3>
      <div class="first"> <a href="www.museumangkut.com"><img src="images/6f1V7bnU.jpeg" width="250" height="150"/></a>
        <h2>Museum Angkut</h2>
        <p>Museum Angkut atau ada yang menyebutnya Museum Otomotif merupakan wahana wisata baru yang ada di kota Batu Malang ini. Sebuah wahana yang akan membuat Anda sekeluarga terkagum-kagum atas apa yang ada di dalamnya.
 Menurut kabar, Museum Angkut di Kota Batu ini merupakan konsep wisata pertama yang ada di Indonesia, bahkan di Asia Tenggara.
Museum Angkut menghadirkan perpaduan tempat wisata yang unik  yang berisi sejarah dan perkembangan dunia angkutan di jamannya dengan latar belakang kota-kota dan bangunan eksotis yang ada di Batavia, Eropa, Amerika.
Desain yang apik dan detil membuat kita seolah-olah berada dalam wilayah yang nyata sesuai lokasi/tema masing-masing.

Museum Angkut ini dibangun dengan tujuan untuk menghargai para pencipta berbagai jenis angkutan di dunia mengingat perkembangan teknologi angkutan terus berkembang setiap saat. Dunia angkutan atau transportasi juga telah membawa perubahan yang sangat signifikan bagi kehidupan umat manusia.

Selain dapat menikmati berbagai display angkutan dan kendaraan, Anda dan rombongan juga dapat mengadakan kegiatan yang menyangkut dunia angkutan atau otomotif di sini, seperti pameran, launching produk otomotif, event komunitas, lelang, Kontes Modifikasi, CSR bidang angkutan, dan lain sebagainya.</p>
      <input type="submit" value="Komentar" />
      
      </div>
      <div class="first"> <a href="#"><img src="images/musium brawijaya malang.jpg" width="250" height="150"/></a>
        <h2>Museum Brawijaya</h2>
        <p>Museum Brawijaya yang terletak di Jalan Ijen Kota Malang ini merupakan salah satu tempat yang akan memberikan gambaran pada Ngalamers tentang beratnya masa-masa perjuangan warga Malang melawan penjajah. 

Di museum ini Ngalamers akan menemukan banyak barang peninggalan sejarah yang masih terawat dengan baik. Seperti tank yang terdapat tepat di depan museum yang merupakan tank yang dipergunakan pada saat pertempuran 10 November 1945 di Surabaya. Ada juga sebuah senjata yang dirampas dari tentara Jepang pada September 1945, meriam canon sebesar 3.5 inch dengan nama 'Si Buang', serta sebuah sebuah tank AMP-Track yang digunakan para pejuang TRIP.

Yang menjadi koleksi unggulan Museum Brawijaya adalah Gerbong Maut. Mendengar namanya yang horror saja sudah seram ya Ngalamers. Dan memang gerbong ini menyimpan cerita kelam dari masa penjajahan Belanda dulu. Gerbong ini dahulu digunakan mengangkut 100 tawanan pejuang Indonesia dari penjara Bondowoso menuju Surabaya pada tanggal 23 November 1947. Keadaan gerbong yang tertutup rapat mengakibatkan 46 orang meninggal, 11 sakit parah, 31 sakit, dan hanya 12 yang masih sehat. Gerbong Maut tersebutkini bisa Ngalamers lihat di halaman belakang Museum Brawijaya ini..</p>

<input type="submit" value="Komentar" />
      </div>
      <div class="first"> <a href="#"><img src="images/Paket-Wisata-Bromo.jpg" width="250" height="150"/></a>
        <h2>Gunung Bromo</h2>
        <p>Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama Hindu), merupakan gunung berapi yang masih aktif dan paling terkenal sebagai obyek wisata di Jawa Timur. Sebagai sebuah obyek wisata, Gunung Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif.

Bromo mempunyai ketinggian 2.392 meter di atas permukaan laut itu berada dalam empat wilayah, yakni Kabupaten Probolinggo, Pasuruan, Lumajang, dan Kabupaten Malang. Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi.

Gunung Bromo mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo..</p>

<input type="submit" value="Komentar" />
      </div>
      
    </div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>