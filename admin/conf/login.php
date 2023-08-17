<?php 
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM t_user WHERE username='$username' AND password='$password'");
$jumlah = mysqli_num_rows($login);
$data 	= mysqli_fetch_array($login);

$login1 = mysqli_query($koneksi,"SELECT * FROM t_penduduk WHERE username='$username' AND password='$password'");
$jumlah1 = mysqli_num_rows($login1);
$data1 	= mysqli_fetch_array($login1);


if ($jumlah == 1) {
 	$_SESSION['nama_admin'] = $data['nama_admin']; 
 	$_SESSION['level'] = "admin";
 	$_SESSION['username'] = $data['username'];
 	$_SESSION['password'] = $data['password'];
	echo "<script>alert('Anda Login Sebagai Admin');document.location='../beranda.php'</script>";


 }else{
 	if ($jumlah1 == 1) {
 	$_SESSION['level'] = "penduduk";
 	$_SESSION['username'] = $data1['username'];
 	$_SESSION['nik'] = $data1['nik'];
 	$_SESSION['nama'] = $data1['nama'];
 	$_SESSION['password'] = $data1['password'];
 		

echo "<script>alert('Anda Login Sebagai Penduduk');document.location='../beranda.php'</script>";
	
}else{
echo "<script>alert('username Dan Password tidak ditemukan');document.location='../index.php'</script>";
}}
?>