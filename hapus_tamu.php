<?php
        $id_tamu = $_GET['id'];

        $statement = "SELECT * FROM berita where id_berita = ".$id_berita;
        
    

        $query=mysqli_query($konek,$statement);

        $data=mysqli_fetch_object($query);

    ?>
