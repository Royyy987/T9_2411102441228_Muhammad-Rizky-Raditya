<?php
// Ambil data dari form
$saldoAwal = $_POST['saldo_awal'];
$bungaPersen = $_POST['bunga'];
$bulan = $_POST['bulan'];

// Ubah bunga dari persen ke desimal
$bunga = $bungaPersen / 100;

// Hitung total bunga (bunga sederhana)
$totalBunga = $saldoAwal * $bunga * $bulan;

// Hitung saldo akhir
$saldoAkhir = $saldoAwal + $totalBunga;

// Tampilkan hasil
echo "<h1>Hasil Perhitungan Saldo</h1>";
echo "<p>Saldo Awal : Rp. " . number_format($saldoAwal) . "</p>";
echo "<p>Besar Bunga : " . $bungaPersen . " % per bulan</p>";
echo "<p>Lama Menabung : " . $bulan . " bulan</p>";
echo "<h3>Saldo Akhir Setelah " . $bulan . " bulan adalah : Rp. " . number_format($saldoAkhir) . "</h3>";
?>