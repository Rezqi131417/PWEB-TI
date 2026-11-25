<?php 

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $query = "INSERT INTO user (nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data user berhasil ditambahkan.'); window.location.href='user.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='form_user.php';</script>";
    }
}
?>