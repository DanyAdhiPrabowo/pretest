<!DOCTYPE html>
<html>
<head>
	<title>Segitiga Siku-Siku</title>
</head>
<body>

<?php
function piramida($angka){		
	$prima = [2,3,5,7,11,13];
	for( $i=0; $i<$angka; $i++){
		for($j=0;$j<=$i;$j++){
			print_r($prima[$j].' ') ;
		}
	echo "<br>";
	}
}

piramida(6)

?>



</body>
</html>