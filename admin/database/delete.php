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

    $usr_session = $_SESSION["username"];
    $nm_session = $_SESSION["username"];
    
    // Function Web log User
    function log_web_user($usr_session, $nm_session, $id_admin){
        global $koneksi;
        $q_admin = "SELECT * FROM user WHERE id_admin = '$id_admin'";
        $r_admin = mysqli_query($koneksi, $q_admin);
        if(isset($r_admin)){
          $d_admin = mysqli_fetch_assoc($r_admin);
          $username_admin = $d_admin["username_admin"];
          $nama_admin = $d_admin["nama_admin"];
        }

        $desc_log = $usr_session . " (" . $nm_session . ") " .  " menghapus user ". $username_admin . " (" . $nama_admin . ") "  . date('l, d-F-Y g:i a');

        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }
    // Function Web log Client Mobil
    function log_web_clientm_data($usr_session, $nm_session, $id_cm){
        global $koneksi;

        $q_cm = "SELECT * FROM client_mobil WHERE id_cm = '$id_cm'";
        $r_cm = mysqli_query($koneksi, $q_cm);
        if(isset($r_cm)){
          $d_cm = mysqli_fetch_assoc($r_cm);
          $cm_nama = $d_cm["cm_nama"];
        }
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " menghapus data client mobil ". $cm_nama . " " . date('l, d-F-Y g:i a');

        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }
        // Function Web log Client Kontruksi
        function log_web_clientk_data($usr_session, $nm_session, $id_ck){
          global $koneksi;

          $q_cm = "SELECT * FROM client_kontruksi WHERE id_cm = '$id_ck'";
          $r_cm = mysqli_query($koneksi, $q_cm);
          if(isset($r_cm)){
            $d_cm = mysqli_fetch_assoc($r_cm);
            $cm_nama = $d_cm["ck_nama"];
          }
          $desc_log = $usr_session . " (" . $nm_session . ") " .  " menghapus data client kontruksi ". $cm_nama . " " . date('l, d-F-Y g:i a');
  
          $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
          $send_log = mysqli_query($koneksi, $log);
          return $send_log;
      }

          // Function Web Log FAQ
    function log_web_faq($usr_session, $nm_session){
      global $koneksi;

      $desc_log = $usr_session . " (" . $nm_session . ") " .  " menghapus FAQ ". date('l, d-F-Y g:i a');
  
      $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
      $send_log = mysqli_query($koneksi, $log);
      return $send_log;
  }
        // Function Web Log Galeri
        function log_web_galeri($usr_session, $nm_session, $id_galeri){
          global $koneksi;
          $id_gambar = "SELECT * FROM web_galeri WHERE id_galeri='$id_galeri'";
          $r_gambar = mysqli_query($koneksi, $id_gambar);
          if(isset($r_gambar)){
            $data_gambar = mysqli_fetch_assoc($r_gambar);
            $gambar = $data_gambar["gambar"];
          }
          
          $desc_log = $usr_session . " (" . $nm_session . ") " .  " menghapus gambar " . $gambar . " " . date('l, d-F-Y g:i a');
      
          $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
          $send_log = mysqli_query($koneksi, $log);
          return $send_log;
      }

  if(isset($_GET["id_admin"])){
    $id_admin = $_GET["id_admin"];
    if($_SESSION['kategori'] == "Administrator"){
      header("Location: user.php");
      exit;
    } else if($_SESSION['kategori'] == "Pengelola"){
      if(!isset($id_admin)){
        echo "<html style='display: none';></html>";
        echo "<script>alert('Server tidak dapat menjangkau 😣');window.location='../user.php';</script>";
      } else{
        //jalankan query DELETE untuk menghapus data
        log_web_user($usr_session, $nm_session, $id_admin);
        $query = "DELETE FROM user WHERE id_admin='$id_admin'";
        $hasil_query = mysqli_query($koneksi, $query);
    
        //periksa query, apakah ada kesalahan
        if(!$hasil_query) {
          die ("Gagal menghapus data: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        } else {
          echo "<script>alert('Data user berhasil dihapus ✔');window.location='../user.php';</script>";
        }
      }
    }else{
      echo "<script>alert('Server tidak mengenali anda 😣');window.location='../user.php';</script>";
    }
  }else if(isset($_GET["id_cm"])){
    $id_cm = $_GET["id_cm"];
        log_web_clientm_data($usr_session, $nm_session, $id_cm);
        $query_deletecm = "DELETE FROM client_mobil WHERE id_cm='$id_cm'";
        $result_deletecm = mysqli_query($koneksi, $query_deletecm);
    
        //periksa query, apakah ada kesalahan
        if(!$result_deletecm) {
          die ("Gagal menghapus data: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        } else {
          echo "<script>alert('Data client mobil berhasil dihapus ✔');window.location='../clientdm.php';</script>";
        }
  }else if(isset($_GET["id_ck"])){
    $id_ck = $_GET["id_ck"];
        log_web_clientm_data($usr_session, $nm_session, $id_ck);
        $query_deleteck = "DELETE FROM client_kontruksi WHERE id_ck='$id_ck'";
        $result_deleteck = mysqli_query($koneksi, $query_deleteck);
    
        //periksa query, apakah ada kesalahan
        if(!$result_deleteck) {
          die ("Gagal menghapus data: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        } else {
          echo "<script>alert('Data client kontruksi berhasil dihapus ✔');window.location='../clientdk.php';</script>";
        }
  }else if(isset($_GET["id_faq"])){
    $id_faq = $_GET["id_faq"];
        log_web_faq($usr_session, $nm_session);
        $query_deletefaq = "DELETE FROM web_faq WHERE id_faq='$id_faq'";
        $result_deletefaq = mysqli_query($koneksi, $query_deletefaq);
    
        //periksa query, apakah ada kesalahan
        if(!$result_deletefaq) {
          die ("Gagal menghapus data: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
        } else {
          echo "<script>alert('Data FAQ dihapus ✔');window.location='../settingef.php';</script>";
        }
  }else if(isset($_GET["id_galeri"])){
    $id_galeri = $_GET["id_galeri"];
    log_web_galeri($usr_session, $nm_session, $id_galeri);
        $query_deletegaleri = "DELETE FROM web_galeri WHERE id_galeri='$id_galeri'";
        $result_deletegaleri = mysqli_query($koneksi, $query_deletegaleri);
    
        //periksa query, apakah ada kesalahan
        if(!$result_deletegaleri) {
          die ("Gagal menghapus Gambar: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
        } else {
          echo "<script>alert('Gambar dihapus ✔');window.location='../settingeg.php';</script>";
        }
  }else {
    echo "<script>alert('Server tidak menanggapi ❌');window.location='../dashboard.php';</script>";
  }
    ?>