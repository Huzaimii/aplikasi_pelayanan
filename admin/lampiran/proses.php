<?php 
include'../conf/koneksi.php';

if (isset($_POST ['hapus'])) {
	$id_lampiran = $_POST['id_lampiran'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_lampiran WHERE id_lampiran='$id_lampiran'");
	header('location: ../lampiran.php');

}
if (isset($_POST ['tambah'])) {

$nik						= $_POST['nik'];
$foto1 				= $_POST['foto1'];
$foto2 				= $_POST['bukti_2']; 


$jumlah = "2";
if($jumlah > 0){
	$g = array ();
	for ($i=0; $i <$jumlah; $i++){
		$file_name = $_FILES['g']['name'][$i];
		$tmp_name = $_FILES ['g']['tmp_name'][$i];
		move_uploaded_file($tmp_name,'berkas/'.$file_name);
		$g[$i] = $file_name;
	}
}


$sql = mysqli_query($koneksi,"INSERT INTO t_lampiran set nik='$nik',foto1='$g[0]',foto2='$g[1]'");

header('location: ../lampiran.php');

}
if (isset($_POST ['cancel'])) {
	header('location: ../lampiran.php');

}

if (isset($_POST ['edit'])) {
$id_domisili = $_POST['id_domisili'];
$tanggal_pengajuan			= $_POST['tanggal_pengajuan'];
$keperluan					= $_POST['keperluan'];
$status_pengajuan			= $_POST['status_pengajuan'];

/* sql adalah id*/
$sql = mysqli_query($koneksi,"UPDATE t_lampiran set tanggal_pengajuan='$tanggal_pengajuan',keperluan='$keperluan',status_pengajuan='$status_pengajuan' WHERE id_domisili='$id_domisili'");

		header('location: ../domisili.php');

	}




 ?>