<?php
echo "Tugas 3: Array Asosiatif" . "<br>";
$biodata = [
    "Nama" => "Noneng Pitri",
    "Usia" => 18,
    "Pekerjaan" => "Belum bekerja",
    "Kota" => "Bandung"
];

echo "Biodata:" . "<br>";
echo "<ul>";
foreach ($biodata as $key => $value) {
    echo "<li><strong>$key:</strong> $value</li>";
}
echo "</ul>";

?>