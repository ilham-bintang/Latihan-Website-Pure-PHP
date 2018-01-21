<?php    
    include 'database/koneksi.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $id_tamu = $_POST['id'];
    $nama =     $_POST['nama'];
    $alamat = $_POST['alamat'];

    $statement = "UPDATE buku_tamu SET nama_tamu = '".$nama."', alamat_tamu = '".$alamat."' where id_tamu=".$id_tamu;
    //echo $statement;
    $query=mysqli_query($konek,$statement);

    if($query) {
        echo "<script> alert('Sukses edit tamu'); </script>";
        header ('location:buku_tamu.php');
    } else {
        echo "<script> alert('Gagal edit tamu'); </script>";    
        header ('location:buku_tamu.php');
    }    
?>