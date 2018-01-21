<?php 
    include 'partials/head.php'; 
    include 'database/koneksi.php';
    
    $id_admin = $_GET['id'];

    $statement = "SELECT * FROM admin where id_admin = ".$id_admin;
    
    $query=mysqli_query($konek,$statement);

    $data=mysqli_fetch_object($query);    
?>

<div class="row">
    <div class="container">
        <br>
        <h1>EDIT ADMIN</h1>
        <br>
        <form action="aksi_edit_admin.php" method="post" enctype="multipart/form-data">
        <fieldset>          
          <div class="form-group">
            <label for="username">Nama Admin</label>
            <input type="text" class="form-control" id="username" placeholder="nama admin" name="nama" value="<?php echo $data->nama_admin; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="username" name="username" value="<?php echo $data->username; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password" value="<?php echo $data->password; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jabatan Admin</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="jabatan" name="jabatan" value="<?php echo $data->jabatan_admin; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Foto Berita</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Foto" name="foto" value="<?php echo $data->foto_admin; ?>">
          </div>                    
        </fieldset>
        <input type="hidden" value = "<?php echo $data->id_admin; ?>" name="id">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </form>
    </div>
</div>





<?php include 'partials/footer.php'; ?>