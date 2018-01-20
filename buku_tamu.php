<?php 
include 'partials/head.php';
include 'database/koneksi.php';
 ?>

<div class="space">
  <div class="row">
    <div class="container">
      <h1>
        Data Pengunjung
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
      <th scope="col">Nama Pengunjung</th>
      <th scope="col">Alamat Pengunjung</th>
      <th scope="col">Tanggal/Jam</th>
    </tr>
  </thead>  
  <tbody>
    <?php
        $query = mysqli_query($konek,"SELECT * FROM buku_tamu");
        $no =1;
        while($data=mysqli_fetch_object($query)) {

       ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $data->nama_tamu; ?></td>
      <td><?php echo $data->alamat_tamu; ?></td>
      <td><?php echo $data->tanggal_tamu; ?></td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table> 
  </div>

</div>

<div class="container">
  <button type="button" class="btn btn-success">Tambah Pengunjung</button>
</div>

<?php include 'partials/footer.php'; ?>