

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
		include 'tidakmampu/tambah.php';

		}else if (isset($_POST['edit'])) {
			include 'tidakmampu/edit.php';
			}else if (isset($_POST['hapus'])) {

			}else{

				include 'tidakmampu/tampil.php';
	}

	


 ?>
