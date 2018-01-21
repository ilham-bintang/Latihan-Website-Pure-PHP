<?php    
    include 'database/koneksi.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $judul =     $_POST['judul'];
    $isi = $_POST['isi'];

    $folder="assets/img/admin/";
	$nama_file=$_FILES['foto']['name'];
	$ukuran_file=$_FILES['foto']['size'];
    $tmp_file=$_FILES['foto']['tmp_name'];
    
    move_uploaded_file($tmp_file, $folder.$nama_file);

    $statement = "INSERT INTO berita VALUES (null,'".$judul."','".$isi."','".$folder.$nama_file."',null)";

    $query=mysqli_query($konek,$statement);

    if($query) {
        echo "<script> alert('Sukses menambah berita'); </script>";
        header ('location:berita.php');
    } else {
        echo "<script> alert('Gagal menambah berita'); </script>";    
        header ('location:berita.php');
    }    
?>