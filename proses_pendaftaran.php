
<?php
include "koneksi.php";
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