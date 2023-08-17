<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_tidak_mampu = $_POST['id_tidak_mampu'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_tidak_mampu WHERE id_tidak_mampu='$id_tidak_mampu'");
	header('location: ../tidakmampu.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$keperluan					= $_POST['keperluan'];
$penghasilan				= $_POST['penghasilan'];
$status_pengajuan				= "Di Proses";


$sql = mysqli_query($koneksi,"INSERT INTO t_tidak_mampu set nik='$nik',tanggal_pengajuan='$tanggal_pengajuan',keperluan='$keperluan',penghasilan='$penghasilan',status_pengajuan='$status_pengajuan'");

header('location: ../tidakmampu.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../tidakmampu.php');

}

if (isset($_POST ['edit'])) {

$id_tidak_mampu  			= $_POST['id_tidak_mampu'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$keperluan					= $_POST['keperluan'];
$penghasilan				= $_POST['penghasilan'];
$status_pengajuan			= $_POST['status_pengajuan'];
/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_tidak_mampu set tanggal_pengajuan='$tanggal_pengajuan',keperluan='$keperluan',penghasilan='$penghasilan',status_pengajuan='$status_pengajuan'");

		header('location: ../tidakmampu.php');

	}




 ?>