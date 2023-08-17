<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_usaha = $_POST['id_usaha'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_usaha WHERE id_usaha='$id_usaha'");
	header('location: ../usaha.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan']; 
$nama_usaha					= $_POST['nama_usaha'];
$jenis_usaha				= $_POST['jenis_usaha'];
$mulai_usaha				= $_POST['mulai_usaha'];
$alamat_usaha				= $_POST['alamat_usaha'];
$keperluan					= $_POST['keperluan'];
$status_pengajuan			= "Di Terima";


$sql = mysqli_query($koneksi,"INSERT INTO t_usaha set nik='$nik',tanggal_pengajuan='$tanggal_pengajuan',nama_usaha='$nama_usaha',jenis_usaha='$jenis_usaha',mulai_usaha='$mulai_usaha',alamat_usaha='$alamat_usaha',keperluan='$keperluan',status_pengajuan='$status_pengajuan'");

header('location: ../usaha.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../usaha.php');

}

if (isset($_POST ['edit'])) {

$id_usaha  					= $_POST['id_usaha'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan']; 
$nama_usaha					= $_POST['nama_usaha'];
$jenis_usaha				= $_POST['jenis_usaha'];
$mulai_usaha				= $_POST['mulai_usaha'];
$alamat_usaha				= $_POST['alamat_usaha'];
$keperluan					= $_POST['keperluan'];
$status_pengajuan			= $_POST['status_pengajuan'];
/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_usaha set tanggal_pengajuan='$tanggal_pengajuan',nama_usaha='$nama_usaha',jenis_usaha='$jenis_usaha',mulai_usaha='$mulai_usaha',alamat_usaha='$alamat_usaha',keperluan='$keperluan',status_pengajuan='$status_pengajuan' WHERE id_usaha='$id_usaha'");

		header('location: ../usaha.php');

	}




 ?>