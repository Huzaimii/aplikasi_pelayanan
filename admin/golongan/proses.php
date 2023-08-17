<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_golongan = $_POST['id_golongan'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_golongan WHERE id_golongan='$id_golongan'");
	header('location: ../golongan.php');

}
if (isset($_POST ['tambah'])) {

$nama_golongan = $_POST['nama_golongan'];

$sql = mysqli_query($koneksi,"INSERT INTO t_golongan set nama_golongan='$nama_golongan'");

header('location: ../golongan.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../golongan.php');

}

if (isset($_POST ['edit'])) {
$id_golongan = $_POST['id_golongan'];
$nama_golongan = $_POST['nama_golongan'];

/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_golongan set nama_golongan='$nama_golongan' WHERE id_golongan='$id_golongan'");

		header('location: ../golongan.php');

	}




 ?>