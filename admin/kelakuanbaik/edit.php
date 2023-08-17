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
								<li class="breadcrumb-item active" aria-current="page">Kelakuan Baik</li>
							</ol>
						</nav>
					</div>
					 <?php 
                    $id_kelakuan_baik = $_POST['id_kelakuan_baik'];
                    $sql = mysqli_query($koneksi,"SELECT * FROM t_kelakuan_baik WHERE id_kelakuan_baik='$id_kelakuan_baik'");
                    while ($data = mysqli_fetch_array($sql)) {
                   ?>
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">					 
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Edit Data</h6>
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
                                    <form method="POST" action="kelakuanbaik/proses.php">

								
                                        <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Tanggal Pengajuan</label>
										<div class="col-sm-9">
											<input type="date" class="form-control" id="inputEnterYourName" name="tanggal_pengajuan" value="<?=$data['tanggal_pengajuan']; ?>">
										</div>
									</div>

										<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Berkelakuan Baik</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEnterYourName" name="berkelakuan_baik" value="<?=$data['berkelakuan_baik']; ?>">
										</div>
                                    </div>

                                     <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Pecandu Narkoba</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEnterYourName" name="pecandu_narkoba" value="<?=$data['pecandu_narkoba']; ?>">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Pernah Terlibat Pidana</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEnterYourName" name="terlibat_pidana" value="<?=$data['terlibat_pidana']; ?>">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Keperluan</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEnterYourName" name="keperluan" value="<?=$data['keperluan']; ?>">
										</div>
										 <div class="row mb-3">
                  <div class="form-group">
                      <select name="status_pengajuan" class="form-control" id="exampleSelect1">
                        <option value="Di Proses" <?php if($data['status_pengajuan'] == "Di Proses") { echo "selected"; } ?>>Di Proses</option>
                        <option value="Di Terima" <?php if($data['status_pengajuan'] == "Di Terima") { echo "selected"; } ?>>Di Terima</option>
                        <option value="Di Tolak" <?php if($data['status_pengajuan'] == "Di Tolak") { echo "selected"; } ?>>Di Tolak</option>
                      </select>
                    </div>
                    <br>
                </div>


									</div>
									<div class="row mb-3">
										<div class="col-sm-9">
											<input type="hidden" class="form-control" id="inputEnterYourName" name="id_kelakuan_baik" value="<?=$data['id_kelakuan_baik']; ?>">
										</div>
									</div>
								
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button name ="edit" type="submit" class="btn btn-sm btn-info">edit</button>
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
}

				 ?>
			</div>
		</div>