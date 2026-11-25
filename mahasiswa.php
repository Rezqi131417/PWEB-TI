<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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


    <h2>Data Mahasiswa</h2>
    <a href="form_mahasiswa.php" class="btn">+ Tambah Data Baru</a>

    <?php
    include 'koneksi.php';
    // Menampilkan data dari database
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $query);
    $no = 1;

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>                   
                    <th>Tanggal Lahir</th>  
                    <th>NIK</th> 
                    <th>Alamat</th>     
                    <th>HP</th>  
                    <th>Prodi</th>                           
                    <th>Aksi</th>                      
                </tr>
              </thead>
              <tbody>";    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . htmlspecialchars($row['nim']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tempat_lahir']) . "</td>";
            echo "<td>" . htmlspecialchars($row['tanggal_lahir']) . "</td>";
            echo "<td>" . htmlspecialchars($row['NIK']) . "</td>";
            echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
            echo "<td>" . htmlspecialchars($row['hp']) . "</td>";
            echo "<td>" . htmlspecialchars($row['kd_prodi']) . "</td>";
               echo "<td>
                        <a href='edit_mahasiswa.php?id=" . $row['nim'] . "' class='btn-edit'>Edit</a>
                        <a href='hapus_mahasiswa.php?id=" . $row['nim'] . "' class='btn-delete' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Hapus</a>
                    </td>";          
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p style='color: var(--text-muted); margin-top: 15px;'>Tidak ada data mahasiswa.</p>";
    }
    ?>

    <br>
    
</body>
</html>
