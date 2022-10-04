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
    include 'connectiondb.php';
    include 'important.php';
    include 'session_false.php';
    include 'system_detail.php';

    // Generate Code Tracking
    function generateRandomString($length = 8) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    //WEB LOG
    $usr_session = $_SESSION["username"];
    $nm_session = $_SESSION["nama"];
    function log_web_user($usr_session, $nm_session, $username_admin, $nama_admin){
        global $koneksi;
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " menambahkan user ". $username_admin . " (" . $nama_admin . ") "  . date('l, d-F-Y g:i a');

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
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " menambahkan data client mobil ". $cm_nama . " " . date('l, d-F-Y g:i a');

        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }

    // Function Web log Client Kontruksi
    function log_web_clientk_data($usr_session, $nm_session, $id_ck){
      global $koneksi;

      $q_ck = "SELECT * FROM client_kontruksi WHERE id_ck = '$id_ck'";
      $r_ck = mysqli_query($koneksi, $q_ck);
      if(isset($r_ck)){
        $d_ck = mysqli_fetch_assoc($r_ck);
        $ck_nama = $d_ck["ck_nama"];
      }
      $desc_log = $usr_session . " (" . $nm_session . ") " .  " menambahkan data client kontruksi ". $ck_nama . " " . date('l, d-F-Y g:i a');
  
      $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
      $send_log = mysqli_query($koneksi, $log);
      return $send_log;
    }

    // Function Web Log FAQ
    function log_web_faq($usr_session, $nm_session){
        global $koneksi;

        $desc_log = $usr_session . " (" . $nm_session . ") " .  " menambahkan FAQ ". date('l, d-F-Y g:i a');
    
        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }

        // Function Web Log FAQ
        function log_web_galeri($usr_session, $nm_session, $gambar){
            global $koneksi;
    
            $desc_log = $usr_session . " (" . $nm_session . ") " .  " menambahkan gambar " . $gambar . " " . date('l, d-F-Y g:i a');
        
            $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
            $send_log = mysqli_query($koneksi, $log);
            return $send_log;
        }

    if(isset($_POST["tambah_user"])){
        if($_SESSION['kategori'] == "Administrator"){
            header("Location: ../user.php");
            exit;
        }else{
            $nama_admin = $_POST["nama"]; $telepon = $_POST["telepon"];
            $catatan = $_POST["catatan"]; $kategori = $_POST["kat_admin"];
            // Username & Admin
            $username_a = strtolower(stripslashes($_POST["username"]));
            $username_admin = mysqli_real_escape_string($koneksi, $username_a); // Protection SQL Injection
            $pass_a= stripslashes($_POST["password"]);
            $pass_admin = mysqli_real_escape_string($koneksi, $pass_a);
            $pass_encrypt = password_hash($pass_admin, PASSWORD_DEFAULT);
            
            $query_add = "INSERT INTO user (kategori, nama_admin, telepon, username_admin, pass_admin, catatan_admin) VALUES ('$kategori', '$nama_admin', '$telepon', '$username_admin', '$pass_encrypt', '$catatan')";
            $result_add = mysqli_query($koneksi, $query_add);
            if(!$result_add){
                die ("Query gagal dijalankan: ". mysqli_errno($koneksi) . " - ".mysqli_error($koneksi));
                echo "<script>alert('Server sedang bermasalah ❌');window.location='../user.php';</script>";
            } else {
                // Log web
                log_web_user($usr_session, $nm_session, $username_admin, $nama_admin, $koneksi);
                echo "<script>alert('Data berhasil ditambah ✔');window.location='../user.php';</script>";
            }
        }
    }else if(isset($_POST["daftar_cm"])){
        $cm_nama = $_POST['nama'];              $cm_tel = $_POST['telepon'];
        $cm_alamat = $_POST['alamat'];          $cm_tanggal = $_POST['tanggal'];
        $cm_namamobil = $_POST['nama_mobil'];   $cm_nopol = $_POST['nopol_mobil'];
        $cm_norangka = $_POST['nomor_rangka'];  $cm_nomesin = $_POST['nomor_mesin'];
        $cm_tahunmobil = $_POST['tahun_mobil']; $cm_jenismobil = $_POST['jenis_kendaraan'];
        $cm_catatan = $_POST['catatan'];        $cm_tracking = generateRandomString();

        // Hidden Value
        $cm_tipe = "Baru";
        $cm_tanggalmasuk = date('l, d-F-Y g:i a');
        $cm_keterangan = "Baru di daftarkan pada " . date('l, d-F-Y g:i a');
        $cm_foto1 = NULL;
        $cm_foto2 = NULL;
        $cm_progress = "0";

        $query_dm = "INSERT INTO client_mobil (cm_tipe, cm_nama, cm_tel, cm_alamat, cm_tanggalmasuk, cm_tanggal, cm_namamobil, cm_nopol, cm_norangka, cm_nomesin, cm_tahunmobil, cm_jenismobil, cm_catatan, cm_progress, cm_tracking, cm_keterangan, cm_foto1, cm_foto2) VALUES ('$cm_tipe', '$cm_nama', '$cm_tel', '$cm_alamat', '$cm_tanggalmasuk', '$cm_tanggal', '$cm_namamobil', '$cm_nopol', '$cm_norangka', '$cm_nomesin', '$cm_tahunmobil', '$cm_jenismobil', '$cm_catatan',  '$cm_progress','$cm_tracking', '$cm_keterangan', '$cm_foto1', '$cm_foto2')";
        $result_dm = mysqli_query($koneksi, $query_dm);

        $qp_cm = "SELECT * FROM client_mobil WHERE cm_nama='$cm_nama'";
        $pr_cm = mysqli_query($koneksi, $qp_cm);
        if(isset($pr_cm)){
            $d_pr = mysqli_fetch_assoc($pr_cm);
            $id_cm = $d_pr["id_cm"];
        }

        if(!$result_dm){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
                echo "<script>alert('Server sedang bermasalah ❌');window.location='../clientm.php';</script>";
        } else {
            // Log web
            log_web_clientm_data($usr_session, $nm_session, $id_cm);
            echo "<script>alert('Data berhasil ditambah ✔');window.location='../printdm.php?id_cm=". $id_cm ."';</script>";
        }

    }else if(isset($_POST["daftar_ck"])){
        $ck_tracking = generateRandomString();
        $ck_nama = $_POST['nama'];         $ck_tel = $_POST['telepon'];   $ck_alamat = $_POST['alamat'];
        $ck_tanggal = $_POST['tanggal'];   $ck_jenis = $_POST['jenis'];
        $ck_catatan = $_POST['catatan'];   

        // Hidden Value
        $ck_tipe = "Baru";
        $ck_tanggalmasuk = date('l, d-F-Y g:i a');
        $ck_keterangan = "Baru di daftarkan pada " . date('l, d-F-Y g:i a');
        $ck_foto1 = NULL;
        $ck_foto2 = NULL;
        $ck_progress = "0";
    
        $query_ck = "INSERT INTO client_kontruksi (ck_tipe, ck_nama, ck_tel, ck_alamat, ck_tanggalmasuk, ck_tanggal, ck_jenis, ck_catatan, ck_progress, ck_keterangan, ck_tracking, ck_foto1, ck_foto2) VALUES ('$ck_tipe', '$ck_nama', '$ck_tel', '$ck_alamat', '$ck_tanggalmasuk', '$ck_tanggal', '$ck_jenis', '$ck_catatan', '$ck_progress', '$ck_keterangan', '$ck_tracking', '$ck_foto1', '$ck_foto2')";
        $result_ck = mysqli_query($koneksi, $query_ck);
    
        $qp_ck = "SELECT * FROM client_kontruksi WHERE ck_nama='$ck_nama'";
        $pr_ck = mysqli_query($koneksi, $qp_ck);
        if(isset($pr_ck)){
            $d_pr = mysqli_fetch_assoc($pr_ck);
            $id_ck = $d_pr["id_ck"];
        }
    
        if(!$result_ck){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
                echo "<script>alert('Server sedang bermasalah ❌');window.location='../clientk.php';</script>";
        } else {
            // Log web
            log_web_clientk_data($usr_session, $nm_session, $id_ck);
            echo "<script>alert('Data berhasil ditambah ✔');window.location='../printdk.php?id_ck=". $id_ck ."';</script>";
        }
    }else if(isset($_POST["tambah_faq"])){
        $faq_pertanyaan = $_POST["pertanyaan"];
        $faq_jawaban = $_POST["jawaban"];

        if(isset($faq_pertanyaan) && isset($faq_jawaban)){
            $query_faq = "INSERT INTO web_faq (pertanyaan, jawaban) VALUES ('$faq_pertanyaan', '$faq_jawaban')";
            $result_faq = mysqli_query($koneksi, $query_faq);
            if(!$result_faq){
                die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                    " - ".mysqli_error($koneksi));
                    echo "<script>alert('Server sedang bermasalah ❌');window.location='../clientk.php';</script>";
            } else {
                // Log web
                log_web_faq($usr_session, $nm_session);
                echo "<script>alert('Data berhasil ditambah ✔');window.location='../settingef.php';</script>";
            }
        }else{
            echo "<script>alert('Sedang terjadi kesalahan, silahkan coba lagi ❌'); window.location='../dashboard.php';</script>";
        }
    }else if(isset($_POST["tambah_gambar"])){
        $caption = $_POST["caption"];
        $gambar = $_FILES["gambar"]['name'];
        $ukuran = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];

        if($gambar != ""){
            $ekstensi_cek = array('png','jpg', 'jpeg'); // Ekstensi gambar yang dapat diaupload
            $separator = explode('.', $gambar); //Memisahkan nama file dengan ekstensi yang diupload
            $ekstensi   = strtolower(end($separator));
            $file_tmp  = $_FILES['gambar']['tmp_name'];
            $angka_acak = rand(1,999);
            $nama_gambar = $angka_acak.'-'.$gambar; //Menggabungkan angka acak dengan nama file sebenarnya
            
            // Limit Size File
            $batas_ukuran = 512000;
            
            if(!empty($_FILES) && $ukuran > 0 && $error==0){
                if ($ukuran <= $batas_ukuran){
                    if(in_array($ekstensi, $ekstensi_cek) === true)  {     
                        move_uploaded_file($file_tmp, '../../dist/img/'.$nama_gambar); //Perintah memindahkan file foto
                          // Hanya menjalankan perintah update foto1 ke dalam database, data yang lain akan masuk ke else (if kedua setelah if yang pertama / if yang dijalankan sekarang)
                            $query_gambar = "INSERT INTO web_galeri (caption, gambar) VALUES ('$caption', '$nama_gambar')";
                            $result_gambar = mysqli_query($koneksi, $query_gambar);
                          // periska query apakah ada error
                          if(!$result_gambar){
                              die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                          } else {
                            log_web_galeri($usr_session, $nm_session, $nama_gambar);
                            echo "<script>alert('Gambar Berhasil Upload ✔'); window.location='../settingeg.php';</script>";
                          }
                    } else {     
                        //Bilamana format ekstensi foto1 tidak berformat jpg, jpeg, dan png akan ditolak
                        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png 😣');window.location='../settingeg.php';</script>";
                    }
                }else{
                    echo "<script>alert('Size file melebihi ketentuan (500KB) 😣');window.location='../settingeg.php';</script>";
                }
            }else{
                echo "<script>alert('Sedang terjadi kesalahan, silahkan coba lagi ❌'); window.location='../dashboard.php';</script>";
            }
        }else{
            echo "<script>alert('Sedang terjadi kesalahan, silahkan coba lagi ❌'); window.location='../dashboard.php';</script>";
        }
    }else{
        echo "<script>alert('Sedang terjadi kesalahan, silahkan coba lagi ❌'); window.location='../dashboard.php';</script>";
    }

?>