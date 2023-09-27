<!DOCTYPE html>
 <html>
<head>
<title>Halaman admin - www.malasngoding.com</title>
</head>
<boby>
 <?php 
session_start();

// cek apakah yang memgakses halaman ini sudah login

if($_SESSION['level']==""){
 header("location:index.php?pesan=gagal");
}
 
?>
<h1>halaman admin</h1>

<p>halo<b><?php echo $_SESSION['username'];?></b> anda telah login sebagai <b><?php echo $_SESSION['level'];?></b>.</p>
<a href="logout.php">LOGOUT</a>

<br/>
<br/>

 <a> Membuat Login Multi Level Dengan PHP</a>
</body>
</html>
