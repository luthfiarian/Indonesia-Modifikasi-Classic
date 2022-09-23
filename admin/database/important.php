<?php
    session_start();
    include 'connectiondb.php';
    //Connect User
    $query_user         = "SELECT * FROM user";
    $result_user        = mysqli_query($koneksi, $query_user);

    //Connect Galeri
    $query_galeri       = "SELECT * FROM web_galeri";
    $result_galeri      = mysqli_query($koneksi, $query_galeri);
    
    //Connect FAQ
    $query_faq          = "SELECT * FROM web_faq";
    $result_faq         = mysqli_query($koneksi, $query_faq);
    
    //Connect Sosial Media
    $query_sm           = "SELECT * FROM web_smedia";
    $result_sm          = mysqli_query($koneksi, $query_sm);
    $smedia             = mysqli_fetch_assoc($result_sm);

    //Connect Log Web
    $query_log           = "SELECT * FROM web_log";
    $result_log          = mysqli_query($koneksi, $query_log);

    //Connect Client Mobil
    $query_cm           = "SELECT * FROM client_mobil";
    $result_cm          = mysqli_query($koneksi, $query_cm);

    //Connect Client Kontruksi
    $query_ck           = "SELECT * FROM client_kontruksi";
    $result_ck          = mysqli_query($koneksi, $query_ck);

    ?>