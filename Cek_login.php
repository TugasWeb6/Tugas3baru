
<?php 
//mengaktifkan session pada php 
session_start();
 
// menghubungkan php dengan koneksi databas
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$usernama = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login =mysqli_query($koneksi,"select * from user where username='$username' and password='$password');
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan pssword di temukan pada database
if($cek > 0){
 
   $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){

   // buat session login dan username
   $_SESSION['username'] = $username;
   $_SESSION['level'] = "admin";
   // alihkan ke halaman dashboard admin
   header("location:haladmin.php");

// cek jika user login sebagi pegawai
}else if($data['level']=="pegawai"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "pegawai";
    // alihkan kehalaman dashboard pegawai
    header("location:halaman_pegawai.php");
   
 // cek jika user login sebagai pengurus
 }else if($data['level']=="pengurus"){
     // buat session login dan username
     $_SESSION['username'] = $username;
     $_SESSION['level'] = "pengawas";
     // alihkan ke halaman dashboard pengurus
     header("location:halaman_pengurus.php");

}else{
      //alihkan ke halaman login kembali
      header("location:index.php?pesan=gagal");
}
    


}else{
     header("location:index.php?pesan=gagal");
}



?>
