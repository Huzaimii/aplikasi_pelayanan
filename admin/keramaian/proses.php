<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_keramaian = $_POST['id_keramaian'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_keramaian WHERE id_keramaian='$id_keramaian'");
	header('location: ../keramaian.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$hari_tanggal				= $_POST['hari_tanggal'];
$waktu						= $_POST['waktu'];
$tempat_keramaian			= $_POST['tempat_keramaian'];
$hiburan					= $_POST['hiburan'];
$lama_acara					= $_POST['lama_acara'];
$jumlah_org					= $_POST['jumlah_org'];
$status_pengajuan			= "Di Proses";


$sql = mysqli_query($koneksi,"INSERT INTO t_keramaian set nik='$nik',tanggal_pengajuan='$tanggal_pengajuan',hari_tanggal='$hari_tanggal',waktu='$waktu',tempat_keramaian='$tempat_keramaian',hiburan='$hiburan',lama_acara='$lama_acara',jumlah_org='$jumlah_org',status_pengajuan='$status_pengajuan'");

header('location: ../keramaian.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../keramaian.php');

}

if (isset($_POST ['edit'])) {

$id_keramaian 				= $_POST['id_keramaian'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$hari_tanggal				= $_POST['hari_tanggal'];
$waktu						= $_POST['waktu'];
$tempat_keramaian			= $_POST['tempat_keramaian'];
$hiburan					= $_POST['hiburan'];
$lama_acara					= $_POST['lama_acara'];
$jumlah_org					= $_POST['jumlah_org'];
$status_pengajuan			= $_POST['status_pengajuan'];
/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_keramaian set tanggal_pengajuan='$tanggal_pengajuan',hari_tanggal='$hari_tanggal',waktu='$waktu',tempat_keramaian='$tempat_keramaian',hiburan='$hiburan',lama_acara='$lama_acara',jumlah_org='$jumlah_org',status_pengajuan='$status_pengajuan' WHERE id_keramaian='$id_keramaian'");

		header('location: ../keramaian.php');

	}




 ?>