<?php
        include 'database/koneksi.php';

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        
        $id_tamu = $_GET['id'];

        $statement = "DELETE FROM berita where id_berita = ".$id_tamu;
        
        $query=mysqli_query($konek,$statement);

        if($query) {
            echo "<script> alert('Sukses menghapus berita'); </script>";
            header ('location:berita.php');
        } else {
            echo "<script> alert('Gagal menghapus berita'); </script>";    
            header ('location:berita.php');
        }    
    ?>
