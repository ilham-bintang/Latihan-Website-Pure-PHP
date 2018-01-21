<?php 
include 'partials/head.php';
include 'database/koneksi.php';
 ?>

<div class="space">
  <div class="row">
    <div class="container">
      <h1>
        Data Admin
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
      <th scope="col">Foto Admin</th>
      <th scope="col">Nama Admin</th>
      <th scope="col">Jabatan</th>
      <?php if(isset($_SESSION['username'])) { ?>
        <th scope="col">Aksi</th>
      <?php }?> 
    </tr>
  </thead>  
  <tbody>
    <?php
        $query = mysqli_query($konek,"SELECT * FROM admin");
        $no =1;
        while($data=mysqli_fetch_object($query)) {

       ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td>
            <img src="<?php echo $data->foto_admin; ?>" alt="foto admin" width=60 height=60>
      </td>
      <td><?php echo $data->nama_admin; ?></td>
      <td><?php echo $data->jabatan_admin; ?></td>

      <?php if(isset($_SESSION['username'])) { ?>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
              
              <a href="edit_admin.php?id=<?php echo $data->id_admin ?>" class="btn btn-warning"> Edit
                  <span class="fa fa-edit" aria-hidden="true"></span>
              </a>
              <a href="hapus_admin.php?id=<?php echo $data->id_admin ?>" class="btn btn-danger"> Hapus
                  <span class="fa fa-trash" aria-hidden="true"></span>
              </a>
          </div>  
        </td>
      <?php }?> 

      
    </tr>
    <?php $no++; } ?>
  </tbody>
</table> 
  </div>

</div>

<?php if(isset($_SESSION['username'])) { ?>
  <div class="container">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahAdmin">Tambah Admin</button>
  </div>
<?php }?> 
  
<div class="modal fade" id="tambahAdmin">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="aksi_tambah_admin.php" method="post" enctype="multipart/form-data">
        <fieldset>          
          <div class="form-group">
            <label for="username">Nama</label>
            <input type="text" class="form-control" id="username" placeholder="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jabatan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jabatan" name="jabatan">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
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