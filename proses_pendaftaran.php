<html>
<head>
    <title>Data Pendaftar</title>
</head>
<body>
<?php
    // Mengambil data dari form
    $nama = $_POST['nama_lengkap'];
    $tempat = $_POST['tempat_lahir'];
    $tgl = $_POST['tgl'];
    $bln = $_POST['bln'];
    $thn = $_POST['thn'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $sekolah = $_POST['asal_sekolah'];
    $un = $_POST['nilai_un'];
    
    // Menggabungkan tanggal lahir
    $tanggal_lahir = $tgl . "-" . $bln . "-" . $thn;
?>

    <h2>Terimakasih <b><?php echo $nama; ?></b> sudah mengisi form pendaftaran.</h2>
    
    <p>Data Anda yang telah terisi adalah:</p>
    
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $tempat; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $tanggal_lahir; ?></td>
        </tr>
        <tr>
            <td>Alamat Rumah</td>
            <td>:</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jk; ?></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?php echo $sekolah; ?></td>
        </tr>
        <tr>
            <td>Nilai UN</td>
            <td>:</td>
            <td><?php echo $un; ?></td>
        </tr>
    </table>

</body>
</html>