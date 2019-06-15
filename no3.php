<!DOCTYPE html>
<html>
<head>
	<title>Pohon Imajinatif</title>
</head>
<body>

<?php 

$tahun=4;
$panjang_sebelumnya	= 3;

// siapkan angka awal
$panjang_sekarang	= 0;

for ($i=0; $i<$tahun; $i++)
{
  // hitung angka yang akan ditampilkan
  $semi 	= $panjang_sebelumnya*2;
  $output 	= $semi +1;
 
  //siapkan angka untuk perhitungan berikutnya
  $panjang_sebelumnya = $output;
}
  echo $output;



?>

</body>
</html>