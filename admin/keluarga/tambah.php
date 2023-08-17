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
								<li class="breadcrumb-item active" aria-current="page">keluarga</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Data keluarga</h6>
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
                                    <form method="POST" action="Keluarga/proses.php" enctype="multipart/form-data">
 										<div class="form-group mb-4">
                                      
                                            <label for="inputAddress" class="">Nama Pendaftar</label>
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
									 <div class="form-group mb-4">
                                            <label for="inputAddress2">Nama</label>
                                            <input type="text" name="nama_kk" class="form-control" id="" placeholder="">
                                        </div>
                                       <div class="form-group mb-4">
                                            <label for="inputAddress">Nik</label>
                                            <input type="text" name="nik_kk" class="form-control" id="" placeholder="1234 Main St">
                                        </div>
                                        
                                        <div class="form-group mb-4">
                                            <label for="inputAddress">Jenis Kelamin</label>
                                            <input type="text" name="jenis_kel_kk" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="inputAddress2">Tempat,Tanggal Lahir</label>
                                            <input type="text" name="tgl_kk" class="form-control" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Agama</label>
                                            <input type="text"  name="agama_kk" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Pendidikan</label>
                                            <input type="text"  name="pendidikan_kk" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Pekerjaan</label>
                                            <input type="text"  name="pekerjaan_kk" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Golongan darah</label>
                                            <input type="text"  name="goldarah_kk" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Status Perkawinan</label>
                                            <input type="text"  name="status_kawin_kk" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Tanggal Perkawinan</label>
                                            <input type="text"  name="tgl_prkwinan_kk" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Status Hubungan Dalam Keluarga</label>
                                            <input type="text"  name="status_keluarga" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Kewarganegaraan</label>
                                            <input type="text"  name="kewarganegaraan_kk" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Alamat</label>
                                            <input type="text"  name="alamat_kk" class="form-control" id="" placeholder="">
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