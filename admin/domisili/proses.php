<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_domisili = $_POST['id_domisili'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_domisili WHERE id_domisili='$id_domisili'");
	header('location: ../domisili.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$keperluan					= $_POST['keperluan'];
$status_pengajuan			= "Di Proses";


$sql = mysqli_query($koneksi,"INSERT INTO t_domisili set nik='$nik',tanggal_pengajuan='$tanggal_pengajuan',keperluan='$keperluan',status_pengajuan='$status_pengajuan'");

header('location: ../domisili.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../domisili.php');

}

if (isset($_POST ['edit'])) {
$id_domisili = $_POST['id_domisili'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$keperluan					= $_POST['keperluan'];
$status_pengajuan			= $_POST['status_pengajuan'];

/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_domisili set tanggal_pengajuan='$tanggal_pengajuan',keperluan='$keperluan',status_pengajuan='$status_pengajuan' WHERE id_domisili='$id_domisili'");

		header('location: ../domisili.php');

	}




 ?>