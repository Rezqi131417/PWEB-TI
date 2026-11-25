<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $NIK = $_POST['NIK'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $prodi = $_POST['prodi'];   
    $password = md5($_POST['password']);

    $query = "INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, NIK, alamat, hp, kd_prodi, password) VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$NIK', '$alamat', '$hp', '$prodi', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan.'); window.location.href='mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='form_mahasiswa.php';</script>";
    }
}

?>