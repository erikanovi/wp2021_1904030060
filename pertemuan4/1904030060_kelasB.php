<!DOCTYPE html>
<html>
<head>
	<title>tugas pertemuan 4</title>
</head>
<body>
	<h1>Membuat Array</h1>
	<?php 
	$values = array(1,2,3,4,5.60);
	var_dump($values);
	echo"<br>";
	echo($values[2]);
	echo "<br>";

	$fk = ["F.Teknik","F.Hukum","F.Agama Islam","F.Ekonomi"	,"FKIP","FT"];
	var_dump($fk);
	echo"<br>";
	echo "$fk[3]";

	echo"<br>";
	//mengganti isi value
	$fk[4] = "F.Keguruan";
	var_dump($fk);
	echo"<br>";

	//menambahkan value
	$fk[] = "F.Ilmu Sosial";
	var_dump($fk);
	echo"<br>";

	//menghapus salah satu value
	unset($fk[5]);
	var_dump($fk);
	echo"<br>";

	//menghitung total array
	echo"<br>";
	var_dump(count($fk));
	?>
<hr>
	<h1>Map dengan Array</h1>
	<?php 
	$en = array("id" => "ika", "nama" => "erikanov", "umur" => 20);
	var_dump($en);
	echo"<br>";
	$fn = ["id" => "fny", "nama" => "fanny debby", "umur" => 23, "alamat" => ["kota" => "Tangerang", "Prov" => "Banten"]];
	var_dump($fn);
	// echo"<br>";
	// echo("nama id : " . $fn["id"]);
	// echo"<br>";
	// echo("nama lengkap : " . $fn["nama"]);
	// echo"<br>";
	// echo("umur : " . $fn["umur"]);
	?>

<hr>
<h1>Operator Matematika</h1>
	<?php
	$tambah = 30 + 20;
	$kurang = 150 - 50;
	$kali = 7*3;
	$bagi = 60 / 2;
	$modular = 100 % 3;
	$pangkat = 5**3;
	echo "Tambah : " . $tambah . "<br>";
	echo "Kurang : " . $kurang . "<br>";
	echo "Kali : " . $kali . "<br>";
	echo "Bagi : " . $bagi . "<br>";
	echo "Modular : " . $modular . "<br>";
	echo "Pangkat : " . $pangkat . "<br>";
	?>

<hr>
<h2>Increment</h2>
	<?php
	$a = 15;
	$a++;
	// $a = $a + 1;
	$a++;
	$a--;

	echo($a);
  ?>

<hr>
 	<h1>Membuat Array di PHP</h1>
	<?php

	//membuat array kosong
	$array1 = array("elemen","elemen");//cara dibawah php 5
	$array2 = array("elemen","elemen");//diatas php 5

	//membuat array sekaligus mengisinya
	$minuman = array("Tea Jus", "Milk Tea", "Es Kopi", "Air Mineral");
	$makanan = ["Hotang", "Corndog,", "Seblak", "Donat"];
	var_dump($minuman);
	echo"<br>";
	print_r($makanan);
	echo"<br>";
	echo"$minuman[0]";
	echo"<br>";
	echo"$makanan[2]";
	 ?>

<hr>
	<?php 
	//membuat array mhs
	$mhs = ["Erika Novianti", "Putri Prianingrum",
		"Annisa Azizatul", "Anisa Nurul", "Fanny Debby",
		"Reyhan Alul"];
 	?>
 	<?php 
	//menampilkan isi array dengan perulangan for
	for($i=0; $i < count($mhs); $i++){
		echo $mhs[$i]."<br>";
	}
 	?>

<hr>
	<?php 
	//membuat array kumpulan hijab
	$kerudung = ["Pashmina", "Paris", "Bergo",
				"Bella Square", "Turban", "Voal"];
 	 
	//menampilkan isi array dengan perulangan foreach
	foreach ($kerudung as $hijab) {
		echo $hijab."<br>";
	}
 	?>

 <hr>
 <h1>Menambahkan Array</h1>
 	<?php
 	//membuat array
 	$hobi = ["Berenang", "Futsal", "Traveling"];

 	//membuat isi pada indeks ke-2
 	$hobi[2] = "Shopping";
 	//membuat isi pada indeks ke-3
 	$hobi[3] = "Ngevlog";
 	//membuat isi pada indeks ke-3
 	$hobi[3] = "Bisnis";
 	//membuat isi pada indeks terakhir
 	$hobi[] = "Makan";

 	//cetak array dengan perulangan
 	foreach ($hobi as $hobiku) {
		echo $hobiku."<br>";
	}
 	 ?>

<hr>
 <h1>Array Asosiatif</h1>
 	<?php
 	//membuat array asosiatif
 	$mhs = ["nim" => "1904030060",
 			"nama" => "Erika Novianti",
 			"fakultas" => "Teknik",
 			"jurusan" => "Teknik Informatika"];

 	//mencetak isi array asosiatif
 	echo "<h2>Data Mahasiswa</h2>";
 	echo "<p>NIM: ".$mhs["nim"]."<br>";
 	echo "<p>Nama: ".$mhs["nama"]."<br>";
 	echo "<p>Fakultas: ".$mhs["fakultas"]."<br>";
 	echo "<p>Jurusan: ".$mhs["jurusan"]."<br>";
 	?>

<hr>
 <h1>Array Multi Dimensi</h1>
 	<?php
 	//ini adalah array dua dimensi
 	$matriks = [
 			[2,3,4],
 			[7,5,0],
 			[4,3,8]

 	];

 	//cara mengakses isinya
 	echo $matriks[1][0]; //output 7
 	?>

<hr>
	<?php
	//membuat array 2 dimensi yang berisi array asosiatif
	$fmly = [
		["nama" => "Eriko", "sts" => "adik"],
		["nama" => "Fanny", "sts" => "kakak"],
	];

	//menampilkan array
	foreach ($fmly as $klrg) {
		echo "<h2>".$klrg["nama"]."</h2>";
		echo "<p>".$klrg["sts"]."<p>";
		echo "<br>";
	}

	  ?>




</body>
</html>