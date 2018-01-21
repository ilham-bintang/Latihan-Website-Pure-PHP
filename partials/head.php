<!DOCTYPE html>
<html>
<head>
  <title>Sistem Informasi Dinas Kesehatan</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
<!--   <script type="text/javascript" src="assets/js/jquery.min.map"></script> -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!--   <script type="text/javascript" src="assets/js/jQuery-2.2.0.min.js"></script> -->
  <style type="text/css">
  .jumbotron {
    background-image: url('assets/img/header.jpg');
    background-size: cover;
    width: 100%;
    color: white;
  }
  .space {
    margin-top: 20px;
  }
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">SIKES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="profil.php">Profil</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="layanan_publik.php">Layanan Publik</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Program</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="buku_tamu.php">Buku Tamu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>        
      </ul>

      <button type="button" class="btn btn-secondary my-2 my-sm-0" data-toggle="modal" data-target="#myModal" >Login</button>
      <!-- <a class="btn btn-secondary my-2 my-sm-0" data-toogle="modal" data-target="#myModal">Login</a> -->
    </div>
  </nav>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    
    </div>
  </div>

  