<!DOCTYPE html>
<html>
<head>
<title>Halaman Untuk siswa</title>
</head>
<body>
<?php 
session_start();
// Untuk mengcek apakah yang mengakses halaman ini sudah login atau belum
if($_SESSION['level']==""){
header("location:index.php?pesan=gagal");
}
?>
<h1>Halaman siswa</h1>
<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah berhasil login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
<a href="logout.php">LOGOUT</a>
</body>
</html>
