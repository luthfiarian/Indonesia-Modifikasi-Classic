<?php
    session_start(); 
    include 'system_detail.php';
        require 'connectiondb.php';
         if(isset($_POST["login"])){ //&& isset($_POST["remember_me"])){
            $username_a = strtolower(stripslashes($_POST["username"])); $pass_a = stripslashes($_POST["password"]);
            $username_admin = mysqli_real_escape_string($koneksi,$username_a); $pass_admin = mysqli_real_escape_string($koneksi,$username_a);
            $result_login = mysqli_query($koneksi, "SELECT * FROM user WHERE username_admin = '$username_admin'");
            function log_web($username_admin, $nama_admin, $koneksi){
                $desc_log = $username_admin . " (" . $nama_admin . ") " . " login pada " . date('l, d-F-Y g:i a');

                $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
                $send_log = mysqli_query($koneksi, $log);
                return $send_log;
            }
            function log_user($username_admin, $koneksi){
                $desc_log_user = date('l, d-F-Y g:i a');
                $log_user = "UPDATE user SET log_user='$desc_log_user' WHERE username_admin='$username_admin'";
                $send_user_log = mysqli_query($koneksi, $log_user);
                return $send_user_log;
            }
            if(mysqli_num_rows($result_login) === 1){
                $data_login = mysqli_fetch_assoc($result_login);
                if(password_verify($pass_admin, $data_login["pass_admin"])){
                    $_SESSION["user"] = true;
                    $_SESSION["id"] = $data_login['id_admin'];
                    $_SESSION["username"] = $username_admin;
                    $_SESSION["nama"] = $data_login['nama_admin'];
                    $_SESSION["kategori"] = $data_login['kategori'];
                    $nama_admin = $data_login['nama_admin'];

                    // if(isset($_COOKIE['remember_me'])){
                    //     setcookie('userc', hash('sha256', $data_login['id_c']), time()+3600);
                    //     setcookie('user', hash('sha256', $data_login['username_c']), time()+3600);
                    // }

                    // Penambahan Log ke Database
                    log_web($username_admin, $nama_admin, $koneksi);
                    log_user($username_admin, $koneksi);

                    header("Location: ../dashboard.php"); exit;
                } else {
                    header("Location: ../../login.php");
                }
            } else {
                header("Location: ../../login.php");
            }
        } else {
            header("Location: ../../login.php");
        }
    ?>