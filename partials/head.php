<?php 
  if(!isset($_SESSION))
    session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <title>Sistem Informasi Dinas Kesehatan</title>

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

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
          <a class="nav-link" href="program.php">Program</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="buku_tamu.php">Buku Tamu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>        
      </ul>
      <?php if(isset($_SESSION)) { ?>
        <a class="btn btn-secondary my-2 my-sm-0" href="logout.php" >Logout</a>  
      <?php } else { ?> 
        <button type="button" class="btn btn-secondary my-2 my-sm-0" data-toggle="modal" data-target="#myModal" >Login</button>
      <?php } ?>
    </div>
  </nav>


  <div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="aksi_login.php" method="post">
        <fieldset>          
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
          </div>
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
  