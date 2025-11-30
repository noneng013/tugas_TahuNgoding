<?php
function hitungLuas($p, $l) {
    return $p * $l;
}
$panjang = 15;
$lebar = 8;

$luas = hitungLuas($panjang, $lebar);

echo "Panjang: " . $panjang . "\n";
echo "Lebar: " . $lebar . "\n";
echo "Luas Persegi Panjangnya adalah: " . $luas . "\n";

?>