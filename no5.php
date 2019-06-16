<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$string = "banananana";
$cari 	= "nana";

function pisah($teks, $panjang) {
    $i = 0;
    $length = strlen($teks);
    $teksSplit;
    if (strlen($teks) < $panjang) {
        $teksSplit[] = $teks;
    } else {
        for ($i; $i <= $length - $panjang; $i++) {
            $teksSplit[] = substr($teks, $i, $panjang);
        }
    }
    return $teksSplit;
}


function cari($string, $cari){
	$jum = count(str_split($cari));
	$pisah = pisah($string, $jum);
	$pisah2 = pisah(strrev($string), $jum);

	$a=0;
	for ($i=0; $i < count($pisah) ; $i++) { 
		if($cari==$pisah[$i]){
			$a++;
		}elseif($cari==$pisah2[$i]){
			$a++;
		}
	}
	return $a;
}

var_dump(cari($string,$cari)) ;


?>

</body>
</html>