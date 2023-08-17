	<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Pendududk</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Data Instansi</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Admin</h5>
									</div>
									<hr/>
                                    <form method="POST" action="penduduk/proses.php" enctype="multipart/form-data">

									 <div class="form-group mb-4">
                                            <label for="inputAddress2">nik</label>
                                            <input type="text" name="nik" class="form-control" id="" placeholder="">
                                        </div>
                                       <div class="form-group mb-4">
                                            <label for="inputAddress">No KK</label>
                                            <input type="text" name="no_kk" class="form-control" id="" placeholder="1234 Main St">
                                        </div>
                                        
                                        <div class="form-group mb-4">
                                            <label for="inputAddress">Nama</label>
                                            <input type="text" name="nama" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="inputAddress2">Tempat,Tanggal Lahir</label>
                                            <input type="text" name="tempat_tgl" class="form-control" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Jenis Kelamin</label>
                                            <input type="text"  name="jenis_kelamin" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Status kawin</label>
                                            <input type="text"  name="status_kawin" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Pekerjaan</label>
                                            <input type="text"  name="pekerjaan" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">No Telpon</label>
                                            <input type="text"  name="no_hp" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Email</label>
                                            <input type="text"  name="email_p" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Alamat</label>
                                            <input type="text"  name="alamat_p" class="form-control" id="" placeholder="">
                                        </div>
                                        
                                         <div class="form mb-4">

                                        <label for="inputEnterYourName" class="col-form-label">Foto</label>
                                        <div class="col">
                                            <input type="file" class="form-control" id="inputEnterYourName" name="g[0]">
                                        </div>
                                    </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Username</label>
                                            <input type="text"  name="username" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Password</label>
                                            <input type="text"  name="password" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>        
									
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button name ="tambah" type="submit" class="btn btn-sm btn-info">tambah</button>
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>