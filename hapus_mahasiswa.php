<?php
include 'koneksi.php';
// proses hapus data mahasiswa
if (isset($_GET['id'])) {
    $nim = $_GET['id'];

    // Hapus data mahasiswa berdasarkan NIM
    $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data mahasiswa berhasil dihapus.'); window.location.href='mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='mahasiswa.php';</script>";
    }
} else {
    echo "<script>alert('NIM tidak ditemukan.'); window.location.href='mahasiswa.php';</script>";
}
?>