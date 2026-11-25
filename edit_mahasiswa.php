<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="wrapper">
        <header class="navbar">
            <div class="brand">SIAKAD</div>
            <?php 
            include 'menu.php';
            ?>
        </header>
<?php
include 'koneksi.php';
// ambil data mahasiswa berdasarkan ID yang dikirim melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa WHERE nim = '$id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<p style='color: var(--text-muted); margin-top: 15px;'>Data mahasiswa tidak ditemukan.</p>";
        exit;
    }
} else {
    echo "<p style='color: var(--text-muted); margin-top: 15px;'>ID mahasiswa tidak diberikan.</p>";
    exit;
}

    ?>
    <h1>Form Edit Data Mahasiswa</h1>

    <form action="proses_editmahasiswa.php" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" value="<?php echo htmlspecialchars($row['nim']); ?>" readonly>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required>
        </div>

        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo htmlspecialchars($row['tempat_lahir']); ?>" placeholder="Masukkan tempat lahir" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo htmlspecialchars($row['tanggal_lahir']); ?>"    required>
        </div>

        <div class="form-group">
            <label for="NIK">NIK</label>
            <input type="text" id="NIK" name="NIK" value="<?php echo htmlspecialchars($row['NIK']); ?>"  placeholder="Masukkan NIK" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo htmlspecialchars($row['alamat']); ?>" placeholder="Masukkan alamat" required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="text" id="hp" name="hp" value="<?php echo htmlspecialchars($row['hp']); ?>"  placeholder="Masukkan nomor HP" required>
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <select id="prodi" name="prodi" required>
               <?php
                include 'koneksi.php';
                $query = "SELECT * FROM prodi";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . htmlspecialchars($row['kd_prodi']) . "' " . ($row['kd_prodi'] == $row['kd_prodi'] ? 'selected' : '') . ">" . htmlspecialchars($row['nama_prodi']) . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" placeholder="Masukkan password" required>
        </div>
        
        <input type="submit" name="edit" value="Simpan">
    </form>
</body>
</html>

