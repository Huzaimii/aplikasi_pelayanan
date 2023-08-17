

<?php 

include'conf/koneksi.php';
include'conf/head.php';

 ?>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php 	

		include'conf/sidebar.php';

		 ?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php 	

		include'conf/header.php';

		 ?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			
		</div>
<?php 

include'conf/footer.php';

 ?>

<?php 


	if (isset($_POST['tambah'])) {
		include 'kematian/tambah.php';

		}else if (isset($_POST['edit'])) {
			include 'kematian/edit.php';
			}else if (isset($_POST['hapus'])) {
			include 'kematian/hapus.php';
			


			}else{

				include 'kematian/tampil.php';
	}

	


 ?>
