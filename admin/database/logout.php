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