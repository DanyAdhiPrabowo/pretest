<!DOCTYPE html>
<html>
<head>
	<title>Simple Math</title>
</head>
<body>



<?php 

$uang		= 52500;
$harga		= 2500;
$pembelian	= 4;
$bonus		= 1;
$kelipatan 	= $uang/($harga*4);
$barang 	= $kelipatan * ($pembelian+$bonus);


echo "Jumlah barang yang didapat ".$barang;

?>



</body>
</html>