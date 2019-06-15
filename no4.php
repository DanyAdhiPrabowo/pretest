<!DOCTYPE html>
<html>
<head>
	<title>Data Sorting</title>
</head>
<body>

<?php 

$bilangan = [6, 22, 34, 15, 2, 13, 26, 57, 42, 32];
$panjang = count($bilangan);

echo "Angka Terkecil ".min($bilangan);
echo "<br>";
echo "Angka Terbesar ".max($bilangan);
echo "<br>";
echo "Ascending ";
	sort($bilangan);
	for($x = 0; $x < $panjang; $x++) {
	    echo $bilangan[$x]." ";
	}
echo "<br>";
echo "Descending ";
	rsort($bilangan);
	for($x = 0; $x < $panjang; $x++) {
	    echo $bilangan[$x]." ";
	}
?>


</body>
</html>