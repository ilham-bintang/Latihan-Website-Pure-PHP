<?php 
    include 'partials/head.php'; 
    include 'database/koneksi.php';
    
    $id_tamu = $_GET['id'];

    $statement = "SELECT * FROM buku_tamu where id_tamu = ".$id_tamu;
    
    $query=mysqli_query($konek,$statement);

    $data=mysqli_fetch_object($query);    
?>

<div class="row">
    <div class="container">
        <br>
        <h1>EDIT TAMU</h1>
        <br>
        <form action="aksi_edit_tamu.php" method="post">
        <fieldset>          
          <div class="form-group">
            <label for="username">Nama Tamu</label>
            <input type="text" class="form-control" id="username" placeholder="nama tamu" name="nama" value="<?php echo $data->nama_tamu; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat Tamu</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat Tamu" name="alamat" value="<?php echo $data->alamat_tamu; ?>">
          </div>
        </fieldset>
        <input type="hidden" value = "<?php echo $data->id_tamu; ?>" name="id">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </form>
    </div>
</div>





<?php include 'partials/footer.php'; ?>