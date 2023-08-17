<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$nik = $_POST['nik'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_penduduk WHERE nik='$nik'");
	header('location: ../penduduk.php');

}
if (isset($_POST ['tambah'])) {

$nik 				= $_POST['nik'];
$no_kk				= $_POST['no_kk'];
$nama 				= $_POST['nama'];
$tempat_tgl			= $_POST['tempat_tgl'];
$jenis_kelamin 		= $_POST['jenis_kelamin'];
$status_kawin		= $_POST['status_kawin'];
$pekerjaan			= $_POST['pekerjaan'];
$no_hp				= $_POST['no_hp'];
$email_p			= $_POST['email_p'];
$alamat_p			= $_POST['alamat_p'];
$foto				= $_POST['foto'];
$username			= $_POST['username'];
$password			= $_POST['password'];


$jumlah = "1";
if($jumlah > 0){
	$g = array ();
	for ($i=0; $i <$jumlah; $i++){
		$file_name = $_FILES['g']['name'][$i];
		$tmp_name = $_FILES ['g']['tmp_name'][$i];
		move_uploaded_file($tmp_name,'img/'.$file_name);
		$g[$i] = $file_name;
	}
}



$sql = mysqli_query($koneksi,"INSERT INTO t_penduduk set nik='$nik', no_kk='$no_kk',nama='$nama',tempat_tgl='$tempat_tgl',jenis_kelamin='$jenis_kelamin',status_kawin='$status_kawin',pekerjaan='$pekerjaan',no_hp='$no_hp',email_p='$email_p',alamat_p='$alamat_p',foto='$g[0]',username='$username',password='$password'");

header('location: ../penduduk.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../penduduk.php');

}

if (isset($_POST ['edit'])) {
$nik 				= $_POST['nik'];
$no_kk				= $_POST['no_kk'];
$nama 				= $_POST['nama'];
$tempat_tgl			= $_POST['tempat_tgl'];
$jenis_kelamin 		= $_POST['jenis_kelamin'];
$status_kawin		= $_POST['status_kawin'];
$pekerjaan			= $_POST['pekerjaan'];
$no_hp				= $_POST['no_hp'];
$email_p			= $_POST['email_p'];
$alamat_p			= $_POST['alamat_p'];
$username			= $_POST['username'];
$password			= $_POST['password'];
/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_penduduk set nik='$nik', no_kk='$no_kk',nama='$nama',tempat_tgl='$tempat_tgl',jenis_kelamin='$jenis_kelamin',status_kawin='$status_kawin',pekerjaan='$pekerjaan',no_hp='$no_hp',email_p='$email_p',alamat_p='$alamat_p',username='$username',password='$password' WHERE nik='$nik'");

		header('location: ../penduduk.php');

	}




 ?>