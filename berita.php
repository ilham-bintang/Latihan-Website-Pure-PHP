<?php 
include 'partials/head.php';
include 'database/koneksi.php';
 ?>

<div class="space">
  <div class="row">
    <div class="container">
      <h1>
        Data Berita
      </h1>

    </div>
  </div>
</div>

<div class="row">
  <div class="container">
    <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Foto Berita</th>
      <th scope="col">Judul Berita</th>
      <th scope="col">Isi Berita</th>
      <th scope="col">Tanggal Berita</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>  
  <tbody>
    <?php
        $query = mysqli_query($konek,"SELECT * FROM berita");
        $no =1;
        while($data=mysqli_fetch_object($query)) {
    ?>
    <tr>
        <th scope="row"><?php echo $no; ?></th>
        <td>
            <img src="<?php echo $data->gambar_berita; ?>" alt="foto admin" width=60 height=60>
        </td>
        <td><?php echo $data->judul_berita; ?></td>
        <td><?php echo $data->isi_berita; ?></td>
        <td><?php echo $data->tanggal_berita; ?></td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="detail_berita.php?id=<?php echo $data->id_berita ?>" class="btn btn-success">
                    <span class="fa fa-drivers-license-o" aria-hidden="true"></span> Lihat
                </a>
                <?php if(isset($_SESSION['username'])) { ?>
                  <button type="button" class="btn btn-warning"> Edit
                      <span class="fa fa-edit" aria-hidden="true"></span>
                  </button>
                  <a href="hapus_berita.php?id=<?php echo $data->id_berita ?>" class="btn btn-danger"> Hapus
                      <span class="fa fa-trash" aria-hidden="true"></span>
                  </a>
                <?php }?> 
            </div>  
        </td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table> 
  </div>

</div>

<?php if(isset($_SESSION['username'])) { ?>
  <div class="container">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahBerita">Tambah Berita</button>
  </div>
<?php }?> 

<div class="modal fade" id="tambahBerita">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="aksi_tambah_berita.php" method="post" enctype="multipart/form-data">
        <fieldset>          
          <div class="form-group">
            <label for="username">Judul Berita</label>
            <input type="text" class="form-control" id="username" placeholder="judul berita" name="judul">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Isi Berita</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Isi berita" name="isi">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Foto Berita</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Foto" name="foto">
          </div>                    
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>