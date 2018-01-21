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
                  <button type="button" class="btn btn-danger"> Hapus
                      <span class="fa fa-trash" aria-hidden="true"></span>
                  </button>
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
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahAdmin">Tambah Berita</button>
  </div>
<?php }?> 

<?php include 'partials/footer.php'; ?>