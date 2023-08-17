<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_pekerjaan = $_POST['id_pekerjaan'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_pekerjaan WHERE id_pekerjaan='$id_pekerjaan'");
	header('location: ../bekerja.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$tgl_pengajuan					= $_POST['tgl_pengajuan'];
$pekerjaan_skg					= $_POST['pekerjaan_skg'];
$keperluan						= $_POST['keperluan'];
$status_pengajuan				= "Di Proses";


$sql = mysqli_query($koneksi,"INSERT INTO t_pekerjaan set nik='$nik',tgl_pengajuan='$tgl_pengajuan',pekerjaan_skg='$pekerjaan_skg',keperluan='$keperluan',status_pengajuan='$status_pengajuan'");

header('location: ../bekerja.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../bekerja.php');

}

if (isset($_POST ['edit'])) {

$id_pekerjaan 					= $_POST['id_pekerjaan'];
$tgl_pengajuan					= $_POST['tgl_pengajuan'];
$pekerjaan_skg					= $_POST['pekerjaan_skg'];
$keperluan						= $_POST['keperluan'];
$status_pengajuan				= $_POST['status_pengajuan'];
/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_pekerjaan set tgl_pengajuan='$tgl_pengajuan',pekerjaan_skg='$pekerjaan_skg',keperluan='$keperluan',status_pengajuan='$status_pengajuan' WHERE id_pekerjaan='$id_pekerjaan'");

		header('location: ../bekerja.php');

	}




 ?>