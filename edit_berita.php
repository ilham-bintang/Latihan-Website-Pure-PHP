<?php 
    include 'partials/head.php'; 
    include 'database/koneksi.php';
    
    $id_berita = $_GET['id'];

    $statement = "SELECT * FROM berita where id_berita = ".$id_berita;
    
    $query=mysqli_query($konek,$statement);

    $data=mysqli_fetch_object($query);    
?>

<div class="row">
    <div class="container">
        <br>
        <h1>EDIT BERITA</h1>
        <br>
        <form action="aksi_edit_berita.php" method="post" enctype="multipart/form-data">
        <fieldset>          
          <div class="form-group">
            <label for="username">Judul Berita</label>
            <input type="text" class="form-control" id="username" placeholder="judul berita" name="judul" value="<?php echo $data->judul_berita; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Isi Berita</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Isi berita" name="isi" value="<?php echo $data->isi_berita; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Foto Berita</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Foto" name="foto" value="<?php echo $data->gambar_berita; ?>">
          </div>                    
        </fieldset>
        <input type="hidden" value = "<?php echo $data->id_berita; ?>" name="id">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </form>
    </div>
</div>





<?php include 'partials/footer.php'; ?>