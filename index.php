<?php 
  include 'partials/head.php'; 
  include 'database/koneksi.php'; 
?>

  <div class="row">
    <div class="container">
      <div class="space">
        <div class="jumbotron">
          <h1 class="display-3">Sistem Informasi Dinas Kesehatan Kota Mataram</h1>
          <p class="lead">Kami Melayani masyarakat dengan sepenuh hati bla blabla.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="profil.php" role="button">Tentang Kami</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container">
    <div class="row">      
    <!--==========================LOOP============ -->
      <?php
        $query = mysqli_query($konek,"SELECT * FROM berita");

        while($data=mysqli_fetch_object($query)) {
       ?>
      <div class="col-sm-4">
        <div class="card mb-3">
          <h3 class="card-header"><?php echo $data->judul_berita; ?></h3>
          
          <img style="height: 200px; width: 100%; display: block;" src="<?php echo $data->gambar_berita; ?>" alt="Card image">
          <div class="card-body">
            <p class="card-text"><?php echo $data->isi_berita; ?></p>
          </div>
          <div class="card-body">
            <a href="detail_berita.php?id=<?php echo $data->id_berita ?>" class="card-link">Lihat Selengkapnya</a>
          </div>
          <div class="card-footer text-muted">
            <?php echo $data->tanggal_berita; ?>
          </div>
        </div>        
      </div>

      <?php } ?>
      <!-- =====================END LOOP================== -->
    </div>
    </div>    
  </div>

<?php include 'partials/footer.php'; ?>