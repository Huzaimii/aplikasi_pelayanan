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
								<li class="breadcrumb-item active" aria-current="page">Keramaian</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase"></h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info"></h5>
									</div>
									<hr/>
                                    <form method="POST" action="keramaian/proses.php">

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
                                        <div class="form-group mb-4">
                                            <label for="inputAddress">Tanggal Pengajuan</label>
                                            <input type="date"  name="tanggal_pengajuan" class="form-control" id="" placeholder="">
                                        </div>
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Hari/Tanggal</label>
                                            <input type="text"  name="hari_tanggal" class="form-control" id="" placeholder="">
                                        </div>
                                       
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Waktu</label>
                                            <input type="text"  name="waktu" class="form-control" id="" placeholder="">
                                        </div>
                                       
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Tempat</label>
                                            <input type="text"  name="tempat_keramaian" class="form-control" id="" placeholder="">
                                        </div>
                                       
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Jenis Acara/Hiburan</label>
                                            <input type="text"  name="hiburan" class="form-control" id="" placeholder="">
                                        </div>
                                       
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Lama Acara</label>
                                            <input type="text"  name="lama_acara" class="form-control" id="" placeholder="">
                                        </div>  
                                       
                                         <div class="form-group mb-4">
                                            <label for="inputAddress">Jumlah Orang</label>
                                            <input type="text"  name="jumlah_org" class="form-control" id="" placeholder="">
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