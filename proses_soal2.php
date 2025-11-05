<?php
// Ambil data dari form
$jumlahUang = $_POST['jumlah_uang'];
$sisa = $jumlahUang;

// Hitung pecahan Rp. 100.000
$pecahan100k = (int)($sisa / 100000);
$sisa = $sisa % 100000;

// Hitung pecahan Rp. 50.000
$pecahan50k = (int)($sisa / 50000);
$sisa = $sisa % 50000;

// Hitung pecahan Rp. 20.000
$pecahan20k = (int)($sisa / 20000);
$sisa = $sisa % 20000;

// Hitung pecahan Rp. 5.000
$pecahan5k = (int)($sisa / 5000);
$sisa = $sisa % 5000;

// Hitung pecahan Rp. 100
$pecahan100 = (int)($sisa / 100);
$sisa = $sisa % 100;

// Hitung pecahan Rp. 50
$pecahan50 = (int)($sisa / 50);
$sisa = $sisa % 50; // Ini adalah sisa uang terakhir

// Tampilkan hasil
echo "<h1>Hasil Perhitungan Pecahan Uang</h1>";
echo "<p>Jumlah Uang yang ditarik: Rp. " . number_format($jumlahUang) . "</p>";
echo "<h3>Rincian Pecahan:</h3>";
echo "Jumlah Rp. 100.000 : " . $pecahan100k . " lembar<br>";
echo "Jumlah Rp. 50.000 : " . $pecahan50k . " lembar<br>";
echo "Jumlah Rp. 20.000 : " . $pecahan20k . " lembar<br>";
echo "Jumlah Rp. 5.000 : " . $pecahan5k . " lembar<br>";
echo "Jumlah Rp. 100 : " . $pecahan100 . " keping<br>";
echo "Jumlah Rp. 50 : " . $pecahan50 . " keping<br>";
echo "<strong>Sisa Uang : Rp. " . $sisa . "</strong>";
?>