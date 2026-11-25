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

    <h1>Form Tambah Data User</h1>

    <form action="proses_tambahuser.php" method="post">
        <div class="form-group">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama..." required>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select id="level" name="level">
                <option value="admin">Admin</option>
                <option value="dosen">Dosen</option>
                <option value="prodi">Admin Prodi</option>
                 <option value="keuangan">Keuangan</option>
            </select>
        </div>      
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>

