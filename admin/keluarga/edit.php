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
                <li class="breadcrumb-item active" aria-current="page">KK</li>
              </ol>
            </nav>
          </div>
           <?php 
                    $id_kartukeluarga = $_POST['id_kartukeluarga'];
                    $sql = mysqli_query($koneksi,"SELECT * FROM t_kk WHERE id_kartukeluarga='$id_kartukeluarga'");
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
                                    <form method="POST" action="keluarga/proses.php">

                  

                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="jenis_kel_kk" value="<?=$data['jenis_kel_kk']; ?>">
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Tempat,Tanggal Lahir</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="tgl_kk" value="<?=$data['tgl_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="agama_kk" value="<?=$data['agama_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Pendidikan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="pendidikan_kk" value="<?=$data['pendidikan_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Pekerjaan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="pekerjaan_kk" value="<?=$data['pekerjaan_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Golongan Darah</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="goldarah_kk" value="<?=$data['goldarah_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status Kawin</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="status_kawin_kk" value="<?=$data['status_kawin_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Tanggal Kawin</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="tgl_prkwinan_kk" value="<?=$data['tgl_prkwinan_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status Keluarga</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="status_keluarga" value="<?=$data['status_keluarga']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="kewarganegaraan_kk" value="<?=$data['kewarganegaraan_kk']; ?>">
                    </div>
                    </div>
                    
                    <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEnterYourName" name="alamat_kk" value="<?=$data['alamat_kk']; ?>">
                    </div>
                    </div>
                </div>


                  <div class="row mb-3">
                    <div class="col-sm-9">
                      <input type="hidden" class="form-control" id="inputEnterYourName" name="id_kartukeluarga" value="<?=$data['id_kartukeluarga']; ?>">
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