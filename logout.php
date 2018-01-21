<?php
    if(!isset($_SESSION))
        session_start();

    if(isset($_SESSION)) {
        session_unset();
        session_destroy();
        header('Location: index.php');
    }
	//header('Location: index.php');
?>