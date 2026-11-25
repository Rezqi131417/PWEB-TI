<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $NIK = $_POST['NIK'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $kd_prodi = $_POST['kd_prodi'];
    $password = md5($_POST['password']);

    $query = "UPDATE mahasiswa SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', NIK='$NIK', alamat='$alamat', hp='$hp', kd_prodi='$kd_prodi', password='$password' WHERE nim='$nim'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data mahasiswa berhasil diubah.'); window.location.href='mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='edit_mahasiswa.php?id=" . $nim . "';</script>";
    }
}
?>