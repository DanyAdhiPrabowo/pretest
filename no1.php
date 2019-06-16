<!DOCTYPE html>
<html>
<head>
	<title>Simple Math</title>
</head>
<body>



<?php 
$uang		= 60000;
$harga		= 2500;
$dapat		= $uang/$harga;
$bonus		= ($dapat - ($dapat%4))/4;
$barang 	= $dapat +$bonus;

echo "Jumlah barang yang didapat ".$barang;
?>



</body>
</html>
