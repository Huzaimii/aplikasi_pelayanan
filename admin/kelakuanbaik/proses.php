<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_kelakuan_baik = $_POST['id_kelakuan_baik'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_kelakuan_baik WHERE id_kelakuan_baik='$id_kelakuan_baik'");
	header('location: ../kelakuanbaik.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$berkelakuan_baik			= $_POST['berkelakuan_baik'];
$pecandu_narkoba			= $_POST['pecandu_narkoba'];
$terlibat_pidana			= $_POST['terlibat_pidana'];
$keperluan					= $_POST['keperluan'];
$status_pengajuan			= "Di Proses";


$sql = mysqli_query($koneksi,"INSERT INTO t_kelakuan_baik set nik='$nik',tanggal_pengajuan='$tanggal_pengajuan',berkelakuan_baik='$berkelakuan_baik',pecandu_narkoba='$pecandu_narkoba',terlibat_pidana='$terlibat_pidana',keperluan='$keperluan',status_pengajuan='$status_pengajuan'");

header('location: ../kelakuanbaik.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../kelakuanbaik.php');

}

if (isset($_POST ['edit'])) { 

$id_kelakuan_baik 			= $_POST['id_kelakuan_baik'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$berkelakuan_baik			= $_POST['berkelakuan_baik'];
$pecandu_narkoba			= $_POST['pecandu_narkoba'];
$terlibat_pidana			= $_POST['terlibat_pidana'];
$keperluan					= $_POST['keperluan'];
$status_pengajuan			= $_POST['status_pengajuan'];
/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_kelakuan_baik set tanggal_pengajuan='$tanggal_pengajuan',berkelakuan_baik='$berkelakuan_baik',pecandu_narkoba='$pecandu_narkoba',terlibat_pidana='$terlibat_pidana',keperluan='$keperluan',status_pengajuan='$status_pengajuan' WHERE id_kelakuan_baik='$id_kelakuan_baik'");

		header('location: ../kelakuanbaik.php');

	}




 ?>