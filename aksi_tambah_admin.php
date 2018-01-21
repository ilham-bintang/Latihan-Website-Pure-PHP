<?php    
    include 'database/koneksi.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $nama =     $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];

    $folder="assets/img/admin/";
	$nama_file=$_FILES['foto']['name'];
	$ukuran_file=$_FILES['foto']['size'];
    $tmp_file=$_FILES['foto']['tmp_name'];
    
    move_uploaded_file($tmp_file, $folder.$nama_file);

    $statement = "INSERT INTO admin VALUES (null,'".$nama."','".$username."','".$password."','".$jabatan."','".$folder.$nama_file."')";

    $query=mysqli_query($konek,$statement);

    if($query) {
        echo "<script> alert('Sukses menambah admin'); </script>";
        header ('location:admin.php');
    } else {
        echo "<script> alert('Gagal menambah admin'); </script>";    
        header ('location:admin.php');
    }    
?>