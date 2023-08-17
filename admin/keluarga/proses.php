<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_kartukeluarga = $_POST['id_kartukeluarga'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_kk WHERE id_kartukeluarga='$id_kartukeluarga'");
	header('location: ../keluarga.php');

}
if (isset($_POST ['tambah'])) {

$nik 					= $_POST['nik'];
$nama_kk 				= $_POST['nama_kk'];
$nik_kk					= $_POST['nik_kk'];
$jenis_kel_kk			= $_POST['jenis_kel_kk'];
$tgl_kk					= $_POST['tgl_kk'];
$agama_kk				= $_POST['agama_kk'];
$pendidikan_kk			= $_POST['pendidikan_kk'];
$pekerjaan_kk			= $_POST['pekerjaan_kk'];
$goldarah_kk			= $_POST['goldarah_kk'];
$status_kawin_kk		= $_POST['status_kawin_kk'];
$tgl_prkwinan_kk		= $_POST['tgl_prkwinan_kk'];
$status_keluarga		= $_POST['status_keluarga'];
$kewarganegaraan_kk		= $_POST['kewarganegaraan_kk'];
$alamat_kk				= $_POST['alamat_kk'];


$sql = mysqli_query($koneksi,"INSERT INTO t_kk set nik='$nik',nama_kk='$nama_kk',nik_kk='$nik_kk',jenis_kel_kk='$jenis_kel_kk',tgl_kk='$tgl_kk',agama_kk='$agama_kk',pendidikan_kk='$pendidikan_kk',pekerjaan_kk='$pekerjaan_kk',goldarah_kk='$goldarah_kk',status_kawin_kk='$status_kawin_kk',tgl_prkwinan_kk='$tgl_prkwinan_kk',status_keluarga='$status_keluarga',kewarganegaraan_kk='$kewarganegaraan_kk',alamat_kk='$alamat_kk'");

header('location: ../keluarga.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../keluarga.php');

}

if (isset($_POST ['edit'])) {
$id_kartukeluarga  		= $_POST['id_kartukeluarga'];
$jenis_kel_kk			= $_POST['jenis_kel_kk'];
$tgl_kk					= $_POST['tgl_kk'];
$agama_kk				= $_POST['agama_kk'];
$pendidikan_kk			= $_POST['pendidikan_kk'];
$pekerjaan_kk			= $_POST['pekerjaan_kk'];
$goldarah_kk			= $_POST['goldarah_kk'];
$status_kawin_kk		= $_POST['status_kawin_kk'];
$tgl_prkwinan_kk		= $_POST['tgl_prkwinan_kk'];
$status_keluarga		= $_POST['status_keluarga'];
$kewarganegaraan_kk		= $_POST['kewarganegaraan_kk'];
$alamat_kk				= $_POST['alamat_kk'];
/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_kk set jenis_kel_kk='$jenis_kel_kk',tgl_kk='$tgl_kk',agama_kk='$agama_kk',pendidikan_kk='$pendidikan_kk',pekerjaan_kk='$pekerjaan_kk',goldarah_kk='$goldarah_kk',status_kawin_kk='$status_kawin_kk',tgl_prkwinan_kk='$tgl_prkwinan_kk',status_keluarga='$status_keluarga',kewarganegaraan_kk='$kewarganegaraan_kk',alamat_kk='$alamat_kk' WHERE id_kartukeluarga='$id_kartukeluarga'");

		header('location: ../keluarga.php');

	}




 ?>