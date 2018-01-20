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
        <img src="<?php echo $data->foto_admin; ?>" height="50" width="50">
      </td>
      <td><?php echo $data->nama_admin; ?></td>
      <td><?php echo $data->jabatan_admin; ?></td>
    </tr>
    <?php $no++; } ?>
   
  </tbody>
</table> 
  </div>

</div>

<?php include 'database/koneksi.php'; ?>