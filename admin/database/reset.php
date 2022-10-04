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
include 'connectiondb.php'; include 'important.php';
include 'system_detail.php';
echo "<html style='display: none';></html>";

    $kategori_admin = $_SESSION["kategori"];

    
    if($kategori_admin == "Pengelola"){
        // Reset Web Log
        if(isset($_GET["reset"])){
            $reset = $_GET["reset"];
            $weblog = "TRUNCATE TABLE web_log";
            $weblog_r = mysqli_query($koneksi, $weblog);
            if($reset = "G23fg4%df5yHR6hh45g@#@"){
                if(!isset($weblog_r)){
                  echo "<script>alert('Kesalahan Perintah Dalam Reset ❌');window.location='../setting.php';</script>";
                }else{
                  echo "<script>alert('Hayooo Ngapain?😲');alert('Web Log Sudah Kehapus Kok 🤭');window.location='../setting.php';</script>";
                }
            }else{
              echo "<script>alert('Server tidak menanggapi ❌');window.location='../setting.php';</script>";
            }
        // Reset Data Client Mobil
        }else if(isset($_GET["clientm"])){
            $clientm = $_GET["clientm"];
            $clietdm = "TRUNCATE TABLE client_mobil";
            $clientdm_r = mysqli_query($koneksi, $clietdm);
            if($clientm = "G23fg4%df5FTHF6455g%##&*"){
                if(!isset($clientdm_r)){
                  echo "<script>alert('Kesalahan Perintah Dalam Reset ❌');window.location='../setting.php';</script>";
                }else{
                  echo "<script>alert('Hayooo Ngapain?😲');alert('Data pelanggan mobil sudah direset 🤭');window.location='../setting.php';</script>";
                }
            }else{
              echo "<script>alert('Server tidak menanggapi ❌');window.location='../setting.php';</script>";
            }
        // Reset Data Client Kontruksi
        }else if(isset($_GET["clientk"])){
            $clientk = $_GET["clientk"];
            $clientdk = "TRUNCATE TABLE client_kontruksi";
            $clientdk_r = mysqli_query($koneksi, $clientdk);
            if($clientk = "G23fg4%df&*%^bgft5"){
                if(!isset($clientdk_r)){
                  echo "<script>alert('Kesalahan Perintah Dalam Reset ❌');window.location='../setting.php';</script>";
                }else{
                  echo "<script>alert('Hayooo Ngapain?😲');alert('Data pelanggan kontruksi sudah direset 🤭');window.location='../setting.php';</script>";
                }
            }else{
              echo "<script>alert('Server tidak menanggapi ❌');window.location='../setting.php';</script>";
            }
        }else{
            echo "<script>alert('Server tidak menjangkau ❌');window.location='../setting.php';</script>";
        }
    }else{
        echo "<script>alert('Anda tidak memiliki akses ❌');window.location='../setting.php';</script>";
    }

?>