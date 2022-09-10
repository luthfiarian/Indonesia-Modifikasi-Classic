<?php 
    // Koneksi PHP ke Database
    $host       = "localhost";  // Nama Host Server
    $username   = "root";       // Username Server
    $password   = "";           // Password Server
    $db         = "";           // Nama Database
    $koneksi = mysqli_connect($host,$username,$password,$db);
    if (!$koneksi){
        die("Koneksi gagal:".mysqli_connect_error());
    }
    
    //Kueri Tabel
    $query      = "SELECT * FROM website";
    $result     = mysqli_query($koneksi, $query);
    $website    = mysqli_fetch_assoc($result);
?>