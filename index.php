<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="pendaftaran.php">Pendaftaran</a></li>
            <li><a href="data_pendaftaran.php">Data Pendaftaran</a></li>
        </ul>
    </nav>

    <h1>Welcome to My Website</h1>
    <p style="color: var(--text-muted); margin-top: 10px; font-size: 1rem;">
        Selamat datang di sistem informasi pendaftaran mahasiswa / siswa. Silakan pilih menu di atas atau klik tombol di bawah untuk mulai mendaftar.
    </p>

    <div style="margin-top: 25px; display: flex; gap: 12px;">
        <a href="pendaftaran.php" class="btn">Mulai Pendaftaran</a>
        <a href="data_pendaftaran.php" class="btn" style="background: #64748b;">Lihat Data Pendaftar</a>
    </div>
</body>
</html>
