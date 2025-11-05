<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h1>Form Pendaftaran Online Mahasiswa Baru</h1>
    
    <form action="proses_pendaftaran.php" method="post">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" size="30"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" size="30"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl">
                        <option value="">Tgl</option>
                        <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    
                    <select name="bln">
                        <option value="">Bln</option>
                        <?php
                            $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                            foreach ($bulan as $index => $nama_bulan) {
                                $val = $index + 1;
                                echo "<option value='$nama_bulan'>$nama_bulan</option>";
                            }
                        ?>
                    </select>
                    
                    <select name="thn">
                        <option value="">Thn</option>
                        <?php
                            for ($i = 2025; $i >= 1980; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Alamat Rumah</td>
                <td style="vertical-align: top;">:</td>
                <td><textarea name="alamat" rows="5" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Pria"> Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" size="30"></td>
            </tr>
            <tr>
                <td>Nilai UN</td>
                <td>:</td>
                <td><input type="text" name="nilai_un" size="10"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>