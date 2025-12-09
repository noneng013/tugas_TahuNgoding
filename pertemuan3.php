<?php
echo "Tugas 1: Array dan Foreach" . "<br>";
$daftar_barang = ["Laptop", "Mouse", "Keyboard", "Monitor", "Webcam"];

echo "Daftar Barang:" . "<br>";
echo "<ul>";
foreach ($daftar_barang as $barang) {
    echo "<li>$barang</li>";
}
echo "</ul>" . "<br>";

echo "Tugas 2: Sorting Array" . "<br>";
$nama_mahasiswa = ["Budi", "Andi", "Citra", "Dewi", "Eko"];

echo "Nama Mahasiswa (Sebelum Sort):" . "<br>";
echo implode(", ", $nama_mahasiswa) . "<br>"; 

sort($nama_mahasiswa);

echo "Nama Mahasiswa (Setelah Sort):" . "<br>";
echo implode(", ", $nama_mahasiswa) . "<br>";
echo "<br>" ;

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
echo "</ul>" . "<br>";

echo "Tugas 4: Tabel Multidimensi" . "<br>";
$daftar_produk = [
    ["Nama Produk" => "Buku Tulis", "Harga" => 5000, "Stok" => 150],
    ["Nama Produk" => "Pensil", "Harga" => 1500, "Stok" => 300],
    ["Nama Produk" => "Penghapus", "Harga" => 1000, "Stok" => 250],
];

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>";
echo "<th>No.</th>";

foreach (array_keys($daftar_produk[0]) as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";

$no = 1;
foreach ($daftar_produk as $produk) {
    echo "<tr>";
    echo "<td>$no.</td>";
    echo "<td>" . $produk["Nama Produk"] . "</td>";
    echo "<td>Rp " . number_format($produk["Harga"], 0, ',', '.') . "</td>";
    echo "<td>" . $produk["Stok"] . "</td>";
    echo "</tr>";
    $no++;
}
echo "</table>";
?>