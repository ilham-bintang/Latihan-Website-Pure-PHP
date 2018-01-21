<?php    
    include 'database/koneksi.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $id_berita = $_POST['id'];
    $judul =     $_POST['judul'];
    $isi = $_POST['isi'];

    $folder="assets/img/berita/";
	$nama_file=$_FILES['foto']['name'];
	$ukuran_file=$_FILES['foto']['size'];
    $tmp_file=$_FILES['foto']['tmp_name'];
    
    move_uploaded_file($tmp_file, $folder.$nama_file);

    $statement = "UPDATE berita SET judul_berita = '".$judul."', isi_berita = '".$isi."', gambar_berita = '".$folder.$nama_file."' where id_berita=".$id_berita;
    //echo $statement;
    $query=mysqli_query($konek,$statement);

    if($query) {
        echo "<script> alert('Sukses edit berita'); </script>";
        header ('location:berita.php');
    } else {
        echo "<script> alert('Gagal edit berita'); </script>";    
        header ('location:berita.php');
    }    
?>