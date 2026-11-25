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

    <h1>Form Tambah Data Mahasiswa</h1>

    <form action="proses_tambahmahasiswa.php" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>

        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label for="NIK">NIK</label>
            <input type="text" id="NIK" name="NIK" placeholder="Masukkan NIK" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="text" id="hp" name="hp" placeholder="Masukkan nomor HP" required>
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
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>
        
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>

