<?php
        include 'database/koneksi.php';

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        
        $id_tamu = $_GET['id'];

        $statement = "DELETE FROM admin where id_admin = ".$id_tamu;
        
        $query=mysqli_query($konek,$statement);

        if($query) {
            echo "<script> alert('Sukses menghapus admin'); </script>";
            header ('location:admin.php');
        } else {
            echo "<script> alert('Gagal menghapus admin'); </script>";    
            header ('location:admin.php');
        }    
    ?>
