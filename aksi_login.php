<?php
    include 'database/koneksi.php';

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query=mysqli_query($konek,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$jumlah=mysqli_num_rows($query);
    $hasil=mysqli_fetch_array($query);
    
    if($jumlah==0) {
        echo "<script> alert('username atau password salah'); </script>";
    } else {

        $_SESSION['username']= $username;

        header('Location: index.php');
    }
?>