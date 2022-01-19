<!DOCTYPE html>
<html>
<head>
	<title>array pada PHP</title>
</head>
<body>
	<h1>Membuat Array di PHP</h1>
	<?php

	//membuat array kosong
	$array1 = array("elemen","elemen");//cara dibawah php 5
	$array2 = array("elemen","elemen");//diatas php 5

	//membuat array sekaligus mengisinya
	$minuman = array("Kopi","Teh", "Jus Jeruk");
	$makanan = ["Nasi Goreng", "Soto", "Bubur"];
	var_dump($minuman);
	echo"<br>";
	print_r($makanan);
	echo"<br>";
	echo"$makanan[1]";
	 ?>

<hr>
	<?php 
	//membuat array mhs
	$nim = ["Asep Hardiyanto", "Febri Pradita", "Ade Ismail", "Mikhayla Azzahra Praditya", "Arief Tri Dewantoro"];
 	?>
 	<?php 
	//menampilkan isi array dengan perulangan for
	for($i=0; $i < count($nim); $i++){
		echo $nim[$i]."<br>";
	}
 	?>

<hr>
	<?php 
	//membuat array kumpulan buku
	$books = ["Belajar Web Programing", "Desain Grafis dengan Vektor", "Kursus 2 Jam HTML"];
 	 
	//menampilkan isi array dengan perulangan foreach
	foreach ($books as $book) {
		echo $book."<br>";
	}
 	?>

 <hr>
 <h1>Menambahkan Array</h1>
 	<?php
 	//membuat array
 	$hobi = ["Membaca", "Menulis", "Ngeblog"];

 	//membuat isi pada indeks ke-2
 	$hobi[2] = "Mengaji";
 	//membuat isi pada indeks ke-3
 	$hobi[3] = "Coding";
 	//membuat isi pada indeks terakhir
 	$hobi[] = "Olahraga";

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
	$dosens = [
		["nama" => "erika", "mk" => "web programing"],
		["nama" => "eriko", "mk" => "mobile android"],
		["nama" => "fanny", "mk" => "struktur data"]
	];

	//menampilkan array
	foreach ($dosens as $dosen) {
		echo "<h2>".$dosen["nama"]."</h2>";
		echo "<p>".$dosen["mk"]."<p>";
		echo "<br>";
	}

	  ?>

</body>
</html>