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
								<li class="breadcrumb-item active" aria-current="page">Golongan</li>
							</ol>
						</nav>
					</div>
					 <?php 
                    $id_golongan = $_POST['id_golongan'];
                    $sql = mysqli_query($koneksi,"SELECT * FROM t_golongan WHERE id_golongan='$id_golongan'");
                    while ($data = mysqli_fetch_array($sql)) {
                   ?>
				</div>
				<!--end breadcrumb-->
				
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Data Golongan</h6>
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
                                    <form method="POST" action="golongan/proses.php">

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Masukan Nama Golongan</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEnterYourName" name="nama_golongan" value="<?=$data['nama_golongan'];?>">
										</div>
									</div>
									<div class="row mb-3">
									
										<div class="col-sm-9">
											<input type="hidden" class="form-control" id="inputEnterYourName" name="id_golongan" value="<?=$data['id_golongan'];?>">
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