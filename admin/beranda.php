

<?php 

include'conf/head.php';
include'conf/koneksi.php';

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
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
						<div class="col">
							<div class="card radius-10 bg-gradient-deepblue">
							 <div class="card-body">
								<div class="d-flex align-items-center">
										<?php
                                    $data_penduduk = mysqli_query($koneksi, "SELECT * FROM t_penduduk");
                                    $jumlah_penduduk = mysqli_num_rows($data_penduduk);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah_penduduk; ?></h5>
									<div class="ms-auto">
                                        <i class='bx bx-clipboard fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Penduduk</p>
								
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-orange">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM t_domisili");
                                    $jumlah = mysqli_num_rows($data);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah; ?></h5>
									<div class="ms-auto">
                                        <i class='bx bx-clipboard fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Domisili</p>
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM t_kelakuan_baik");
                                    $jumlah = mysqli_num_rows($data);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah; ?></h5>
									<div class="ms-auto">
                                        <i class='bx bx-clipboard fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Data Berkelakuan Baik</p>
								</div>
							</div>
						</div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM t_keramaian");
                                    $jumlah = mysqli_num_rows($data);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah; ?></h5>
									<h5 class="mb-0 text-white"></h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Keramaian</p>
								</div>
							</div>
						 </div>
						</div>

						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM t_tidak_mampu");
                                    $jumlah = mysqli_num_rows($data);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah; ?></h5>
									<h5 class="mb-0 text-white"></h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Keterangan Tidak Mampu</p>
								</div>
							</div>
						 </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM t_usaha");
                                    $jumlah = mysqli_num_rows($data);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah; ?></h5>
									<h5 class="mb-0 text-white"></h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Keterangan Usaha</p>
								</div>
							</div>
						 </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM t_kematian");
                                    $jumlah = mysqli_num_rows($data);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah; ?></h5>
									<h5 class="mb-0 text-white"></h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Kematian</p>
								</div>
							</div>
						 </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<?php
                                    $data = mysqli_query($koneksi, "SELECT * FROM t_pekerjaan");
                                    $jumlah = mysqli_num_rows($data);
                                    ?>
									<h5 class="mb-0 text-white"><?= $jumlah; ?></h5>
									<h5 class="mb-0 text-white"></h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Tidak Memiliki Pekerjaan</p>
								</div>
							</div>
						 </div>
						</div>
					</div>

				
								<div class="d-flex align-items-center text-black">
									<p class="mb-0">LOKASI TEMPAT PENENLITIAN</p>
									<p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
								<br>
						

					<iframe style="width: 1500px" 	src="https://www.google.com/search?q=kantor+desa+tanah+abang+kecamatan+mataraman&oq=ka&aqs=chrome.3.69i57j69i60l2j35i39l2j0i67i650l2j0i131i433i512j46i67i650j0i131i433i512.1399j0j19&client=ms-android-xiaomi-rvo2&sourceid=chrome-mobile&ie=UTF-8#trex=m_t:lcl_akp,rc_f:rln,rc_ludocids:16269535072381875064,ru_gwp:0%252C7,ru_lqi:CitrYW50b3IgZGVzYSB0YW5haCBhYmFuZyBrZWNhbWF0YW4gbWF0YXJhbWFuSOe5jrySr4CACFpNEAAQARACEAMYABgBGAIYAxgEGAUiK2thbnRvciBkZXNhIHRhbmFoIGFiYW5nIGtlY2FtYXRhbiBtYXRhcmFtYW4qCggCEAAQARACEAOSARBjb3Jwb3JhdGVfb2ZmaWNlqgFUEAEyHxABIhs2LdI9ZQapZDysOkPXB35942akfB4q8gCkqYcyLxACIitrYW50b3IgZGVzYSB0YW5haCBhYmFuZyBrZWNhbWF0YW4gbWF0YXJhbWFu,trex_id:OgSTV&lpg=cid:CgIgAQ%3D%3D" width="600" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			

			</div>
		</div>
<?php 

include'conf/footer.php';

 ?>