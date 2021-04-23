<?php 
    session_start();
    session_destroy();

    echo "<script>window.location='../Admin/index.php';</script>";

    exit();
?>