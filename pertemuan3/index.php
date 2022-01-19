<!DOCTYPE html>
<html>
<head>
	<title>pertemuan 3</title>
</head>
<body>
	<!-- PHP dalam HTML -->
	<h1>selamat datang, <?php echo "Erika"; ?></h1>

	<!-- tag HTML dalam PHP -->

	<?php echo "<h2>di pembelajaran web programing</h2>"; ?>
<hr>
	<h2>tipe data integer</h2>

	<?php
	echo "Desimal : "; var_dump(1966); echo "<br>";
	echo "Octal : "; var_dump(01234); echo "<br>";
	echo "Hexadesimal : "; var_dump(0x1a); echo "<br>";
	echo "Binary : "; var_dump(0b111111); echo "<br>";
	

	  ?>
<hr>
	<h2>variable</h2>
	<?php
	$namadpn = "Erika";
	$namablkg = "Novianti";
	$mk = "Web Programing";
	$nim = "1904030060";
	$ttl = "Tegal, 15 November 2000";
	$umur = (0x15);
	$jenkel = "Perempuan";
	$hobi = "Belanja";
	$alamat = "Kp. Waru Desa Pasir Jaya Cikupa, Tangerang";
	$notelp = "0896789004325";
	?>

	<h4>identitas diri</h4>
	<p>Nama : <?php echo $namadpn ." ". $namablkg; ?></p>
	<p>Mata Kuliah : <?php echo $mk; ?></p>
	<p>NIM : <?php echo $nim; ?></p>
	<p>Tempat, Tanggal Lahir : <?php echo $ttl; ?></p>
	<p>Umur : <?php echo $umur; ?></p>
	<p>Jenis Kelamin : <?php echo $jenkel; ?></p>
	<p>Hobi : <?php echo $hobi; ?></p>
	<p>Alamat : <?php echo $alamat; ?></p>
	<p>No Telepon : <?php echo $notelp; ?></p>

</body>
</html>