<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_kematian = $_POST['id_kematian'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_kematian WHERE id_kematian='$id_kematian'");
	header('location: ../kematian.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$id_kartukeluarga			= $_POST['id_kartukeluarga'];
$tgl_pengajuan				= $_POST['tgl_pengajuan'];
$hari						= $_POST['hari'];
$pukul						= $_POST['pukul'];
$sebab_meninggal			= $_POST['sebab_meninggal'];
$meninggal_di				= $_POST['meninggal_di'];
$dimakamkan					= $_POST['dimakamkan'];
$tgl_meninggal				= $_POST['tgl_meninggal'];
$status_pengajuan			= "Di Proses";


$sql = mysqli_query($koneksi,"INSERT INTO t_kematian set nik='$nik',id_kartukeluarga='$id_kartukeluarga',tgl_pengajuan='$tgl_pengajuan',hari='$hari',pukul='$pukul',sebab_meninggal='$sebab_meninggal',meninggal_di='$meninggal_di',dimakamkan='$dimakamkan',tgl_meninggal='$tgl_meninggal',status_pengajuan='$status_pengajuan'");

header('location: ../kematian.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../kematian.php');

}

if (isset($_POST ['edit'])) {

$id_kematian 				= $_POST['id_kematian'];
$tgl_pengajuan				= $_POST['tgl_pengajuan'];
$hari						= $_POST['hari'];
$pukul						= $_POST['pukul'];
$sebab_meninggal			= $_POST['sebab_meninggal'];
$meninggal_di				= $_POST['meninggal_di'];
$dimakamkan					= $_POST['dimakamkan'];
$tgl_meninggal				= $_POST['tgl_meninggal'];
$status_pengajuan				= $_POST['status_pengajuan'];

/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_kematian set tgl_pengajuan='$tgl_pengajuan',hari='$hari',pukul='$pukul',sebab_meninggal='$sebab_meninggal',meninggal_di='$meninggal_di',dimakamkan='$dimakamkan',tgl_meninggal='$tgl_meninggal',status_pengajuan='$status_pengajuan' WHERE id_kematian='$id_kematian'");

		header('location: ../kematian.php');

	}




 ?>