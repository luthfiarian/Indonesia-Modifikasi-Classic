<!--
Magang Umsida Periode 2022 - Quartal Ke-9
Author: PT INTI MAJU CEMERLANG
Licensed to PT INTI MAJU CEMERLANG
Thanks to :
    > Iwan Setiawan - As The Owner Of The Company
    > Adinata Setiawan - Project Supervisor
Contributor & Credit: 
    > Luthfi Arian Nugraha - Fullstack - Project Leader (University Advisor : Sukma Aji, S.T., S.Kom.)
    > Yusuf Raharja - Frontend - Member Project (University Advisor : Novia Ariyanti, S.Si., M.Pd.)
    > Reyhan Adi Saputra - Frontend - Member Project (University Advisor : Novia Ariyanti, S.Si., M.Pd.)
    > Davito Rasendriya Rizqullah Putra - Wordpress - Member Project (University Advisor : Sukma Aji, S.T., S.Kom.)
-->
<?php
    include 'connectiondb.php'; include 'system_detail.php';
    session_start();
    // Penambahan Log
    $username_admin = $_SESSION["username"];
    $nama_admin = $_SESSION["nama"];
    function log_web($username_admin, $nama_admin, $koneksi){
        
        $desc_log = $username_admin . " (" . $nama_admin . ") " . " logout pada " . date('l, d-F-Y g:i a');
        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }
    log_web($username_admin, $nama_admin, $koneksi);
    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie('user_admin', '', time() - 3600);
    header("Location: ../../login.php");
?>