<!DOCTYPE html>
<html>
<head>
    <title>Decimal To Binary</title>
</head>
<body>

<?php 


$decimal = 8;
$binary = '';

while ($decimal > 0) {
    if ($decimal%2 == 0) {
        $binary .= 0;
        // ngerubah nilai desimal awal
        $decimal /= 2;
    }
    else {
        $binary .= 1;
        //menghapus sisa bagi 0,5
        $decimal = ($decimal/2)-0.5;
    }
}
$result = strrev($binary);
echo "<br>hasilnya adalah $result.";



?>

</body>
</html>