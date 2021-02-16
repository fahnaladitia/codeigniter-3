 <div class="container">
  <div class="row mt-5 d-flex justify-content-center">
   <div class="col-md-6">

     <div class="card">
       <div class="card-header">
         Form tambah Data Mahasiswa
       </div>
       <div class="card-body">
         <?php if(validation_errors() ) : ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
          </div>
          <?php endif; ?>
        <form action="" method="post">
          <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="nim">Nim : </label>
            <input type="text" class="form-control" id="nim" name="nim">
          </div>
          <div class="form-group">
            <label for="email">Email : </label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan : </label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option>Teknik Infomatika</option>
              <option>Teknik Mesin</option>
              <option>Teknik Alat Berat</option>
              <option>Management</option>
              <option>Keperawatan</option>
              <option>Farmasi</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
        </form>

       </div>
     </div> 

   </div>
  </div>
 </div>