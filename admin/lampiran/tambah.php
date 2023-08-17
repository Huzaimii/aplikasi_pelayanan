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
								<li class="breadcrumb-item active" aria-current="page">Lampiran</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Data Lampiran</h6>
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
                                    <form method="POST" action="lampiran/proses.php" enctype="multipart/form-data">

									 <div class="form-group mb-4">
                                      
                                            <label for="inputAddress" class="">Nama</label>
                                              <div class="col-sm-12">
                                           <select name="nik" class="form-control">
                                            <?php 
                                            $sql = mysqli_query($koneksi,"SELECT * FROM t_penduduk");
                                            while ($row = mysqli_fetch_array($sql)) {
                                             ?>
                                             <option value="<?=$row['nik'];?>"><?=$row['nama'];?>
                                                 
                                             </option> 
                                             
                                            <?php 

                                        }
                                             ?>
                                           </select>
                                       </div>
                                        </div>
                                       <br>
                                       <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">foto KTP</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="inputEnterYourName" name="g[0]">
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Foto KK</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="inputEnterYourName" name="g[1]">
										</div>
 
									
									
									
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