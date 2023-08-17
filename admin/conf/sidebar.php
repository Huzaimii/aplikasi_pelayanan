<?php 
session_start()
 ?>
<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="img/.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">KANTOR DESA</</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
	<?php	
	if ($_SESSION['level'] == "admin") {
	 	include 'menu_admin.php';
	 	
	 }else if ($_SESSION['level'] == "penduduk") {
	 	include 'menu_user.php';
	 } 
	 ?>
			</div>

			

	