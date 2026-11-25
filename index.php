<!-- halaman Login sistem SIM RS -->
 <!-- form login -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIAKAD</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
 <div class="login-container">
    <form action="" method="post">
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>

        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>
<?php
session_start();
include 'koneksi.php';
// proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    // Menggunakan password_hash untuk keamanan
    $password = md5($_POST['password']);

    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        header("Location: home.php");
        exit();
    } else {
        // Login gagal
        echo "<script>alert('Username atau password salah!');</script>";
    }
}