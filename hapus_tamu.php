<?php
        include 'database/koneksi.php';

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        
        $id_tamu = $_GET['id'];

        $statement = "DELETE FROM buku_tamu where id_tamu = ".$id_tamu;
        
        $query=mysqli_query($konek,$statement);

        if($query) {
            echo "<script> alert('Sukses menghapus tamu'); </script>";
            header ('location:buku_tamu.php');
        } else {
            echo "<script> alert('Gagal menghapus tamu'); </script>";    
            header ('location:buku_tamu.php');
        }    
    ?>
