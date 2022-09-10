<?php
    include "koneksi.php";

    //Connect Website
    $query_web = "SELECT * FROM website";
    $result_web = mysqli_query($koneksi, $query_web);
    $website    = mysqli_fetch_assoc($result_web);

    //Connect Data Admin
    $query_admin = "SELECT * FROM admin";
    $result_admin = mysqli_query($koneksi, $query_admin);
    $admin    = mysqli_fetch_assoc($result_admin);

    // Database Website
    $title1 = $website['judul1'];
    $title2 = $website['judul2'];
    $keyword = $website['keyword_meta'];
    $deskripsi = $website['deskripsi_meta'];
    $desc_profil = $website['deskripsi_profil'];
    $yt = $website['sosialmedia_yt'];
    $ig = $website['sosialmedia_ig'];
    $fb = $website['sosialmedia_fb'];

    // Url homepage
    $root = "https://intimajucemerlang.com";
    $home1 = "/index.php"; 
    $home2 = "./index.php";
    $dashboard ="dashboard.php";
    $dashboard2 = "../dashboard.php";

    // Gambar Website
    $img1 = "dist/img/";
    $img2 = "./dist/img/";
    $img3 = "../dist/img/";

    //User Admin
    $id_admin   = $admin['id_admin'];
    $nama_admin = $admin['nama_admin'];
    $kategori   = $admin['kategori'];
    $username   = $admin['user_admin'];
    $password   = $admin['pass_admin'];
    $log        = $admin['log_admin'];

    
    ?>