<?php
echo "Tugas 1: Array dan Foreach" . "<br>";
$daftar_barang = ["Laptop", "Mouse", "Keyboard", "Monitor", "Webcam"];

echo "Daftar Barang:" . "<br>";
echo "<ul>";
foreach ($daftar_barang as $barang) {
    echo "<li>$barang</li>";
}
echo "</ul>";

?>