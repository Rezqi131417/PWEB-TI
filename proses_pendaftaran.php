
<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Simpan data ke database
    $query = "INSERT INTO pendaftaran (nama, email) VALUES ('$nama', '$email')";
    if (mysqli_query($conn, $query)) {       
       echo "<script>alert('Data berhasil disimpan');</script>";
        // direct ke halaman data_pendaftaran.php setelah berhasil menyimpan data
        echo "<script>window.location.href='data_pendaftaran.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);     
    } 
}

?>