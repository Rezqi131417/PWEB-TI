<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pendaftaran.php" class="active">Pendaftaran</a></li>
            <li><a href="data_pendaftaran.php">Data Pendaftaran</a></li>
        </ul>
    </nav>

    <h1>Form Pendaftaran</h1>

    <form action="proses_pendaftaran.php" method="post">
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="nama" placeholder="Masukkan nama..." required><br><br>
        <label for="name">Tempat Lahir:</label>
        <input type="text" id="name" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required><br><br>
        <label for="name">Tanggal Lahir:</label>
        <input type="date" id="name" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" required><br><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
            <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
            <label for="laki-laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br><br>
         <label for="jenis_kelamin">Umur:</label>
        <input type="number" id="name" name="umur" placeholder="Masukkan Umur" required><br><br>
        <label for="jenis_kelamin">ALamat : </label>      

        <textarea id="alamat" name="alamat"></textarea><br><br>
        <label for="hp">Handphone:</label>
        <input type="text" id="hp" name="hp" placeholder="Masukkan No HP" required><br><br>
        <label for="poli">Pilihan Poli:</label>
            <select id="poli" name="poli">
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli Kandungan">Poli Kandungan</option>
            </select><br><br>
        <input type="submit" name="simpan" value="Daftar Sekarang">
    </form>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    // ambil data dari form
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];       
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $hp= $_POST['hp'];
    $poli = $_POST['poli'];
    // proses simpan data ke database
    include "koneksi.php";
    $sql = "INSERT INTO pendaftaran (nama, tempat_lahir, tgl_lahir, jk, umur, alamat, hp, poli) VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', $umur, '$alamat', '$hp', '$poli')";
    if ($conn->query($sql) === TRUE) {
       echo "<script>alert('Pendaftaran berhasil!'); window.location.href='pendaftaran.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>