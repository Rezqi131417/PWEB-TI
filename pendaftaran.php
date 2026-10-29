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
        
        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" placeholder="contoh@email.com" required><br><br>
        
        <input type="submit" name="simpan" value="Daftar Sekarang">
    </form>
</body>
</html>
