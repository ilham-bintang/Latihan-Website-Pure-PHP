<?php
    include 'database/koneksi.php';

    if(!isset($_SESSION))  
        session_start(); 
    

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $statement = "INSERT INTO buku_tamu values (null,'".$nama."','".$alamat."',null)";

    $query=mysqli_query($konek,$statement);
	
    if($query) {
        echo "<script> alert('Sukses menambah pengunjung'); </script>";
        header ('location:buku_tamu.php');
    } else {
        echo "<script> alert('Gagal menambah pengunjung'); </script>";    
        header ('location:buku_tamu.php');
    }
?>