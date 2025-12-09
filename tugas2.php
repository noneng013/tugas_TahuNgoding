<?php
echo "Tugas 2: Sorting Array" . "<br>";
$nama_mahasiswa = ["Budi", "Andi", "Citra", "Dewi", "Eko"];

echo "Nama Mahasiswa (Sebelum Sort):" . "<br>";
echo implode(", ", $nama_mahasiswa) . "<br>"; 

sort($nama_mahasiswa);

echo "Nama Mahasiswa (Setelah Sort):" . "<br>";
echo implode(", ", $nama_mahasiswa) . "<br>";

?>