<?php 
    // Koneksi PHP ke Database Primary
    $host       = "localhost";  // Nama Host Server
    $username   = "root";       // Username Server
    $password   = "";           // Password Server
    $db         = "imc";           // Nama Database
    $koneksi = mysqli_connect($host,$username,$password,$db);
    if (!$koneksi){
        die("Koneksi gagal:".mysqli_connect_error());
    }

    // Koneksi PHP ke Database Secondary
    $host_sc        = "localhost";  // Nama Host Server
    $username_sc    = "root";       // Username Server
    $password_sc    = "";           // Password Server
    $db_sc          = "imc_client_history";           // Nama Database
    $koneksi_sc     = mysqli_connect($host_sc,$username_sc,$password_sc,$db_sc);
    if (!$koneksi_sc){
        die("Koneksi gagal:".mysqli_connect_error());
    }

?>