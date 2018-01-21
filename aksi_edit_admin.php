<?php    
    include 'database/koneksi.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $id_admin = $_POST['id'];
    $nama =     $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];

    $folder="assets/img/admin/";
	$nama_file=$_FILES['foto']['name'];
	$ukuran_file=$_FILES['foto']['size'];
    $tmp_file=$_FILES['foto']['tmp_name'];
    
    move_uploaded_file($tmp_file, $folder.$nama_file);

    $statement = "UPDATE admin SET nama_admin = '".$nama."', username = '".$username."', password = '".$password."', jabatan_admin = '".$password."', foto_admin = '". $folder.$nama_file."' where id_admin=".$id_admin;
    //echo $statement;
    $query=mysqli_query($konek,$statement);

    if($query) {
        echo "<script> alert('Sukses edit berita'); </script>";
        header ('location:admin.php');
    } else {
        echo "<script> alert('Gagal edit berita'); </script>";    
        header ('location:admin.php');
    }    
?>