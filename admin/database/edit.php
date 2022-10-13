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
    include 'important.php'; include 'session_false.php'; include 'system_detail.php';
    $usr_session = $_SESSION['username'];
    $nm_session = $_SESSION['nama'];
    function log_web_user($usr_session, $nm_session, $username_admin, $nama_admin, $koneksi){
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " mengedit user ". $username_admin . " (" . $nama_admin . ") "  . date('l, d-F-Y g:i a');

        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }
    // Function Client Mobil
    function log_web_clientm_data($usr_session, $nm_session, $cm_nama){
        global $koneksi;
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " mengedit data client mobil ". $cm_nama . " " . date('l, d-F-Y g:i a');

        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }
    function log_web_clientm_foto($usr_session, $nm_session, $cm_nama){
        global $koneksi;
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " mengedit foto client mobil ". $cm_nama . " " . date('l, d-F-Y g:i a');

        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }
    // Function Client Kontruksi
    function log_web_clientk_data($usr_session, $nm_session, $ck_nama){
        global $koneksi;
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " mengedit data client kontruksi ". $ck_nama . " " . date('l, d-F-Y g:i a');
    
        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }
    function log_web_clientk_foto($usr_session, $nm_session, $ck_nama){
        global $koneksi;
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " mengedit foto client kontruksi ". $ck_nama . " " . date('l, d-F-Y g:i a');
    
        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }  
    function log_web_smedia($usr_session, $nm_session){
        global $koneksi;
        $desc_log = $usr_session . " (" . $nm_session . ") " .  " mengedit url sosial website " . date('l, d-F-Y g:i a');
    
        $log = "INSERT INTO web_log (des_log) VALUES ('$desc_log')";
        $send_log = mysqli_query($koneksi, $log);
        return $send_log;
    }

    // Function History
    // Mobil
    function history_tracking_m($position){
        global $koneksi_sc, $result_cm ;
        $dt = mysqli_fetch_assoc($result_cm);
        $tracking = $dt["cm_tracking"];
        $query_htm = mysqli_query($koneksi_sc, "INSERT INTO mobil (hm_tracking, position) VALUES ('$tracking', '$position')");
        return $query_htm;
    }

    function history_foto1_m($position, $nama_foto_baru1){
        global $koneksi_sc;
        $query_hf1m = mysqli_query($koneksi_sc, "UPDATE mobil SET hm_foto1='$nama_foto_baru1' WHERE position='$position'");
        return $query_hf1m;
    }

    function history_foto2_m($position, $nama_foto_baru2){
        global $koneksi_sc;
        $query_hf2m = mysqli_query($koneksi_sc, "UPDATE mobil SET hm_foto2='$nama_foto_baru2' WHERE position='$position'");
        return $query_hf2m;
    }
    
    function history_data_m($position, $cm_keterangan, $cm_tanggal){
        global $koneksi_sc;
        $query_data_m = mysqli_query($koneksi_sc, "UPDATE mobil SET hm_tanggal='$cm_tanggal', hm_keterangan='$cm_keterangan' WHERE position='$position'");
        return $query_data_m;
    }
    // Kontruksi
    function history_tracking_k($position){
        global $koneksi_sc, $result_ck ;
        $dt = mysqli_fetch_assoc($result_ck);
        $tracking = $dt["ck_tracking"];
        $query_htm = mysqli_query($koneksi_sc, "INSERT INTO kontruksi (hk_tracking, position) VALUES ('$tracking', '$position')");
        return $query_htm;
    }

    function history_foto1_k($position, $nama_foto_baru1){
        global $koneksi_sc;
        $query_hf1k = mysqli_query($koneksi_sc, "UPDATE kontruksi SET hk_foto1='$nama_foto_baru1' WHERE position='$position'");
        return $query_hf1k;
    }

    function history_foto2_k($position, $nama_foto_baru2){
        global $koneksi_sc;
        $query_hf2k = mysqli_query($koneksi_sc, "UPDATE kontruksi SET hk_foto2='$nama_foto_baru2' WHERE position='$position'");
        return $query_hf2k;
    }
    
    function history_data_k($position, $ck_keterangan, $ck_tanggal){
        global $koneksi_sc;
        $query_data_k = mysqli_query($koneksi_sc, "UPDATE kontruksi SET hk_tanggal='$ck_tanggal', hk_keterangan='$ck_keterangan' WHERE position='$position'");
        return $query_data_k;
    }




    // Edit User Admin
    if(isset($_POST['edit_user'])){
        $id_admin = $_POST['id'];
        $username_a = strtolower(stripslashes($_POST['username']));
        $username_admin = mysqli_real_escape_string($koneksi, $username_a); // Protection SQL Injection
        $nama_admin = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $catatan_admin = $_POST['catatan'];

        $query_edit = "SELECT * FROM user WHERE id_admin='$id_admin'";
        $result_edit = mysqli_query($koneksi, $query_edit);
        
        if(mysqli_num_rows($result_edit) === 1){
            $data_edit = mysqli_fetch_array($result_edit);

            // Checker Pengelola (Ketika Pengelola dipilih, tanpa ada verifikasi password lama)
            if($_SESSION['kategori'] == "Pengelola"){
                // Password Baru Tidak Boleh Kosong
                if(isset($_POST['password_baru'])){
                    $password_b = stripslashes($_POST['password_baru']);
                    $password_baru = mysqli_real_escape_string($koneksi,$password_b); // Protection SQL Injection
                    $pass_encrypt = password_hash($password_baru, PASSWORD_DEFAULT); // Password Hash PHP
                    
                    $pengelola_edit = "UPDATE user SET nama_admin='$nama_admin', telepon='$telepon', username_admin='$username_admin', catatan_admin='$catatan_admin', pass_admin='$pass_encrypt' WHERE id_admin = '$id_admin'";
                    $result_pengelola = mysqli_query($koneksi, $pengelola_edit);
    
                    if(!$result_pengelola){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                        log_web_user($usr_session, $nm_session, $username_admin, $nama_admin, $koneksi);
                        echo "<script>alert('Data berhasil diedit ✔');window.location='../user.php';</script>";
                    }
                }else{
                    echo "<script>alert('Password tidak anda isi ❌'); history.back();</script>";
                }

            // Checker Administrator
            } else if($_SESSION['kategori'] == "Administrator"){
                if(isset($_POST['password_lama']) && isset($_POST['password_baru'])){
                    $password_l = stripslashes($_POST['password_lama']);
                    $password_b = stripslashes($_POST['password_baru']);
                    $password_lama = mysqli_real_escape_string($koneksi,$password_l);
                    $password_baru = mysqli_real_escape_string($koneksi,$password_b);
                    $pass_encrypt = password_hash($password_baru, PASSWORD_DEFAULT); // Password Hash PHP
    
                    if(password_verify($password_lama, $data_edit["pass_admin"])){
                        $administrator_edit = "UPDATE user SET nama_admin='$nama_admin', telepon='$telepon', username_admin='$username_admin', catatan_admin='$catatan_admin', pass_admin='$pass_encrypt' WHERE id_admin = '$id_admin'";
                        $result_administrator = mysqli_query($koneksi, $administrator_edit);
                        
                        if(!$result_administrator){
                            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                 " - ".mysqli_error($koneksi));
                        } else {
                            log_web_user($usr_session, $nm_session, $username_admin, $nama_admin, $koneksi);
                            echo "<script>alert('Data berhasil diedit ✔');window.location='../user.php';</script>";
                        }

                    } else {
                        echo "<script>alert('Password lama yang anda masukkan salah ❌'); history.back();</script>";
                    }
                }else{
                    echo "<script>alert('Pastikan Anda mengisi password lama/baru ❌'); history.back();</script>";
                }
            } else{
                echo "<script>alert('Server tidak menjangkau ❌'); history.back();</script>";
            }
        } else {
            echo "<script>alert('Server tidak menjangkau ❌'); history.back();</script>";
        }
        // Edit Client Mobil
    }else if(isset($_POST["edit_cm"])){ $id_cm = $_POST['id'];
        $cm_tipe = $_POST["jenis_progress"]; $cm_namamobil = $_POST["nama_mobil"];   $cm_jenismobil = $_POST["jenis_kendaraan"];
        $cm_nama = $_POST["nama"];           $cm_nopol = strtoupper($_POST["nopol_mobil"]);      $cm_catatan = $_POST["catatan"];
        $cm_tel = $_POST["telepon"];         $cm_norangka = strtoupper($_POST["nomor_rangka"]);  $cm_progress = $_POST["progress"];
        $cm_alamat = $_POST["alamat"];       $cm_nomesin = strtoupper($_POST["nomor_mesin"]);    $cm_keterangan = $_POST["keterangan"];
        $cm_tanggalmasuk = $_POST["tanggal"];     $cm_tahunmobil = $_POST["tahun_mobil"];             $position = rand(1,999);
        // Variabel Foto
        $foto1 = $_FILES['foto1']['name']; $foto2 = $_FILES['foto2']['name'];
        $cm_tanggal = date("d-m-Y");

        if(!$cm_tanggalmasuk){
            $q_tgl = mysqli_query($koneksi, "SELECT * FROM client_mobil WHERE id_cm='$id_cm'");
            $dtgl = mysqli_fetch_assoc($q_tgl);
            $cm_tanggalmasuk = $dtgl["cm_tanggalmasuk"];
        }

        // Proses Check File Upload
        if($foto1 != ""){
            $ekstensi_cek1 = array('png','jpg', 'jpeg'); // Ekstensi gambar yang dapat diaupload
            $separator1 = explode('.', $foto1); //Memisahkan nama file dengan ekstensi yang diupload
            $ekstensi1   = strtolower(end($separator1));
            $file_tmp1  = $_FILES['foto1']['tmp_name'];
            $angka_acak = rand(1,999);
            $nama_foto_baru1 = $angka_acak.'-'.$foto1; //Menggabungkan angka acak dengan nama file sebenarnya
            
            if(in_array($ekstensi1, $ekstensi_cek1) === true)  {     
                move_uploaded_file($file_tmp1, '../../dist/upload/'.$nama_foto_baru1); //Perintah memindahkan file foto
                  // Hanya menjalankan perintah update foto1 ke dalam database, data yang lain akan masuk ke else (if kedua setelah if yang pertama / if yang dijalankan sekarang)
                    $query_foto1 = "UPDATE client_mobil SET cm_foto1='$nama_foto_baru1' WHERE id_cm='$id_cm'";
                    $result_foto1 = mysqli_query($koneksi, $query_foto1);
                  // periska query apakah ada error
                  if(!$result_foto1){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                  } else {
                    history_tracking_m($position);
                    history_foto1_m($position, $nama_foto_baru1);
                    log_web_clientm_foto($usr_session, $nm_session, $cm_nama);
                    echo "<script>alert('Data & Foto Bukti 1 Berhasil Diedit ✔'); </script>";
                  }
            } else {     
                //Bilamana format ekstensi foto1 tidak berformat jpg, jpeg, dan png akan ditolak
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png 😣');</script>";
            }

            if($foto2 != ""){
                $ekstensi_cek2 = array('png','jpg', 'jpeg'); // Ekstensi gambar yang dapat diaupload
                $separator2 = explode('.', $foto2); //Memisahkan nama file dengan ekstensi yang diupload
                $ekstensi2   = strtolower(end($separator2));
                $file_tmp2  = $_FILES['foto2']['tmp_name'];
                $nama_foto_baru2 = $angka_acak.'-'.$foto2; //Menggabungkan angka acak dengan nama file sebenarnya
                
                if(in_array($ekstensi2, $ekstensi_cek2) === true)  {     
                    move_uploaded_file($file_tmp2, '../../dist/upload/'.$nama_foto_baru2); //Perintah memindahkan file foto
                      // Hanya menjalankan perintah update foto1 ke dalam database, data yang lain akan masuk ke else (if kedua setelah if yang pertama / if yang dijalankan sekarang)
                        $query_foto2 = "UPDATE client_mobil SET cm_nama='$cm_nama', cm_tel='$cm_tel', cm_alamat='$cm_alamat', cm_tanggalmasuk='$cm_tanggalmasuk', cm_namamobil='$cm_namamobil', cm_nopol='$cm_nopol', cm_norangka='$cm_norangka', cm_nomesin='$cm_nomesin', cm_tahunmobil='$cm_tahunmobil', cm_jenismobil='$cm_jenismobil', cm_tipe='$cm_tipe', cm_foto2='$nama_foto_baru2' WHERE id_cm='$id_cm'";
                        $result_foto2 = mysqli_query($koneksi, $query_foto2);
                      // periska query apakah ada error
                      if(!$result_foto2){
                          die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                      } else {
                        history_foto2_m($position, $nama_foto_baru2);
                        history_data_m($position, $cm_keterangan, $cm_tanggal);
                        log_web_clientm_data($usr_session, $nm_session, $cm_nama);
                        echo "<script>alert('Data & Foto Bukti 2 Berhasil Diedit ✔'); window.location='../clientdm.php';</script>";
                      }
                } else {     
                    //Bilamana format ekstensi foto1 tidak berformat jpg, jpeg, dan png akan ditolak
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png 😣');window.location='../clientdm.php';</script>";
                }
            }else{
                $query_ecm = "UPDATE client_mobil SET cm_nama='$cm_nama', cm_tel='$cm_tel', cm_alamat='$cm_alamat', cm_tanggalmasuk='$cm_tanggalmasuk', cm_namamobil='$cm_namamobil', cm_nopol='$cm_nopol', cm_norangka='$cm_norangka', cm_nomesin='$cm_nomesin', cm_tahunmobil='$cm_tahunmobil', cm_jenismobil='$cm_jenismobil', cm_catatan='$cm_catatan', cm_progress='$cm_progress', cm_keterangan='$cm_keterangan', cm_tipe='$cm_tipe' WHERE id_cm = '$id_cm'";
                $result = mysqli_query($koneksi, $query_ecm);

                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
                } else {
                    history_data_m($position, $cm_keterangan, $cm_tanggal);
                    log_web_clientm_data($usr_session, $nm_session, $cm_nama);
                    echo "<script>alert('Data berhasil diedit.'); window.location='../clientdm.php';</script>";
                }
                
            }
        } else { //Ketika gambar tidak terdeteksi maka data selain gambar akan tetap terupload / terganti

            if($foto2 != ""){
                $ekstensi_cek2 = array('png','jpg', 'jpeg'); // Ekstensi gambar yang dapat diaupload
                $separator2 = explode('.', $foto2); //Memisahkan nama file dengan ekstensi yang diupload
                $ekstensi2   = strtolower(end($separator2));
                $file_tmp2  = $_FILES['foto2']['tmp_name'];
                $angka_acak = rand(1,999);
                $nama_foto_baru2 = $angka_acak.'-'.$foto2; //Menggabungkan angka acak dengan nama file sebenarnya
                
                if(in_array($ekstensi2, $ekstensi_cek2) === true)  {     
                    move_uploaded_file($file_tmp2, '../../dist/upload/'.$nama_foto_baru2); //Perintah memindahkan file foto
                      // Hanya menjalankan perintah update foto1 ke dalam database, data yang lain akan masuk ke else (if kedua setelah if yang pertama / if yang dijalankan sekarang)
                        $query_foto2 = "UPDATE client_mobil SET cm_nama='$cm_nama', cm_tel='$cm_tel', cm_alamat='$cm_alamat', cm_tanggalmasuk='$cm_tanggalmasuk', cm_namamobil='$cm_namamobil', cm_nopol='$cm_nopol', cm_norangka='$cm_norangka', cm_nomesin='$cm_nomesin', cm_tahunmobil='$cm_tahunmobil', cm_jenismobil='$cm_jenismobil', cm_catatan='$cm_catatan', cm_progress='$cm_progress', cm_keterangan='$cm_keterangan', cm_tipe='$cm_tipe', cm_foto2='$nama_foto_baru2' WHERE id_cm='$id_cm'";
                        $result_foto2 = mysqli_query($koneksi, $query_foto2);
                      // periska query apakah ada error
                      if(!$result_foto2){
                          die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                      } else {
                        history_tracking_m($position);
                        history_foto2_m($position, $nama_foto_baru2);
                        history_data_m($position, $cm_keterangan, $cm_tanggal);
                        log_web_clientm_foto($usr_session, $nm_session, $cm_nama);
                        log_web_clientm_data($usr_session, $nm_session, $cm_nama);
                        echo "<script>alert('Data & Foto Bukti 2 Berhasil Diedit ✔'); window.location='../clientdm.php';</script>";
                      }
                } else {     
                    //Bilamana format ekstensi foto1 tidak berformat jpg, jpeg, dan png akan ditolak
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png 😣');window.location='../clientdm.php';</script>";
                }
            }else{
                $query_ecm = "UPDATE client_mobil SET cm_nama='$cm_nama', cm_tel='$cm_tel', cm_alamat='$cm_alamat', cm_tanggalmasuk='$cm_tanggalmasuk', cm_namamobil='$cm_namamobil', cm_nopol='$cm_nopol', cm_norangka='$cm_norangka', cm_nomesin='$cm_nomesin', cm_tahunmobil='$cm_tahunmobil', cm_jenismobil='$cm_jenismobil', cm_catatan='$cm_catatan', cm_progress='$cm_progress', cm_keterangan='$cm_keterangan', cm_tipe='$cm_tipe' WHERE id_cm = '$id_cm'";
                $result = mysqli_query($koneksi, $query_ecm);

                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
                } else {
                    history_tracking_m($position);
                    history_data_m($position, $cm_keterangan, $cm_tanggal);
                    log_web_clientm_data($usr_session, $nm_session, $cm_nama);
                    echo "<script>alert('Data berhasil diedit.'); window.location='../clientdm.php';</script>";
                }
                
            }
        }
        // Edit Client Kontruksi
    }else if(isset($_POST["edit_ck"])){ $id_ck = $_POST['id'];
        $ck_nama = $_POST["nama"];           $ck_catatan = $_POST["catatan"];       $ck_tipe = $_POST["jenis_progress"];
        $ck_tel = $_POST["telepon"];         $ck_progress = $_POST["progress"];     $position = rand(1,999);
        $ck_alamat = $_POST["alamat"];       $ck_keterangan = $_POST["keterangan"];
        $ck_tanggalmasuk = $_POST["tanggal"];     $ck_jenis = $_POST["jenis"];
        
        // Variabel Foto
        $foto1 = $_FILES['foto1']['name']; $foto2 = $_FILES['foto2']['name'];
        $ck_tanggal = date("d-m-Y");
        if(!$ck_tanggalmasuk){
            $q_tgl = mysqli_query($koneksi, "SELECT * FROM client_kontruksi WHERE id_ck='$id_ck'");
            $dtgl = mysqli_fetch_assoc($q_tgl);
            $ck_tanggalmasuk = $dtgl["ck_tanggalmasuk"];
        }

        // Proses Check File Upload
        if($foto1 != ""){
            $ekstensi_cek1 = array('png','jpg', 'jpeg'); // Ekstensi gambar yang dapat diaupload
            $separator1 = explode('.', $foto1); //Memisahkan nama file dengan ekstensi yang diupload
            $ekstensi1   = strtolower(end($separator1));
            $file_tmp1  = $_FILES['foto1']['tmp_name'];
            $angka_acak = rand(1,999);
            $nama_foto_baru1 = $angka_acak.'-'.$foto1; //Menggabungkan angka acak dengan nama file sebenarnya
            
            if(in_array($ekstensi1, $ekstensi_cek1) === true)  {     
                move_uploaded_file($file_tmp1, '../../dist/upload/'.$nama_foto_baru1); //Perintah memindahkan file foto
                  // Hanya menjalankan perintah update foto1 ke dalam database, data yang lain akan masuk ke else (if kedua setelah if yang pertama / if yang dijalankan sekarang)
                    $query_foto1 = "UPDATE client_kontruksi SET ck_foto1='$nama_foto_baru1' WHERE id_ck='$id_ck'";
                    $result_foto1 = mysqli_query($koneksi, $query_foto1);
                  // periska query apakah ada error
                  if(!$result_foto1){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                  } else {
                    history_tracking_k($position);
                    history_foto1_k($position, $nama_foto_baru1);
                    log_web_clientk_foto($usr_session, $nm_session, $ck_nama);
                    echo "<script>alert('Data & Foto Bukti 1 Berhasil Diedit ✔'); </script>";
                  }
            } else {     
                //Bilamana format ekstensi foto1 tidak berformat jpg, jpeg, dan png akan ditolak
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png 😣');</script>";
            }

            if($foto2 != ""){
                $ekstensi_cek2 = array('png','jpg', 'jpeg'); // Ekstensi gambar yang dapat diaupload
                $separator2 = explode('.', $foto2); //Memisahkan nama file dengan ekstensi yang diupload
                $ekstensi2   = strtolower(end($separator2));
                $file_tmp2  = $_FILES['foto2']['tmp_name'];
                $angka_acak = rand(1,999);
                $nama_foto_baru2 = $angka_acak.'-'.$foto2; //Menggabungkan angka acak dengan nama file sebenarnya
                
                if(in_array($ekstensi2, $ekstensi_cek2) === true)  {     
                    move_uploaded_file($file_tmp2, '../../dist/upload/'.$nama_foto_baru2); //Perintah memindahkan file foto
                      // Hanya menjalankan perintah update foto1 ke dalam database, data yang lain akan masuk ke else (if kedua setelah if yang pertama / if yang dijalankan sekarang)
                        $query_foto2 = "UPDATE client_kontruksi SET ck_nama='$ck_nama', ck_tel='$ck_tel', ck_alamat='$ck_alamat', ck_tanggalmasuk='$ck_tanggalmasuk', ck_catatan='$ck_catatan', ck_progress='$ck_progress', ck_keterangan='$ck_keterangan', ck_tipe='$ck_tipe', ck_foto2='$nama_foto_baru2' WHERE id_ck='$id_ck'";
                        $result_foto2 = mysqli_query($koneksi, $query_foto2);
                      // periska query apakah ada error
                      if(!$result_foto2){
                          die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                      } else {
                        history_foto2_k($position, $nama_foto_baru2);
                        history_data_k($position, $ck_keterangan, $ck_tanggal);
                        log_web_clientk_data($usr_session, $nm_session, $ck_nama);
                        echo "<script>alert('Data & Foto Bukti 2 Berhasil Diedit ✔'); window.location='../clientdk.php';</script>";
                      }
                } else {     
                    //Bilamana format ekstensi foto1 tidak berformat jpg, jpeg, dan png akan ditolak
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png 😣');window.location='../clientdk.php';</script>";
                }
            }else{
                $query_eck = "UPDATE client_kontruksi SET ck_nama='$ck_nama', ck_tel='$ck_tel', ck_alamat='$ck_alamat', ck_tanggalmasuk='$ck_tanggalmasuk', ck_catatan='$ck_catatan', ck_progress='$ck_progress', ck_keterangan='$ck_keterangan', ck_tipe='$ck_tipe' WHERE id_ck = '$id_ck'";
                $result = mysqli_query($koneksi, $query_eck);

                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
                } else {
                    history_data_k($position, $ck_keterangan, $ck_tanggal);
                    log_web_clientk_data($usr_session, $nm_session, $ck_nama);
                    echo "<script>alert('Data berhasil diedit.'); window.location='../clientdk.php';</script>";
                }
                
            }
        } else { //Ketika gambar tidak terdeteksi maka data selain gambar akan tetap terupload / terganti

            if($foto2 != ""){
                $ekstensi_cek2 = array('png','jpg', 'jpeg'); // Ekstensi gambar yang dapat diaupload
                $separator2 = explode('.', $foto2); //Memisahkan nama file dengan ekstensi yang diupload
                $ekstensi2   = strtolower(end($separator2));
                $file_tmp2  = $_FILES['foto2']['tmp_name'];
                $angka_acak = rand(1,999);
                $nama_foto_baru2 = $angka_acak.'-'.$foto2; //Menggabungkan angka acak dengan nama file sebenarnya
                
                if(in_array($ekstensi2, $ekstensi_cek2) === true)  {     
                    move_uploaded_file($file_tmp2, '../../dist/upload/'.$nama_foto_baru2); //Perintah memindahkan file foto
                      // Hanya menjalankan perintah update foto1 ke dalam database, data yang lain akan masuk ke else (if kedua setelah if yang pertama / if yang dijalankan sekarang)
                        $query_foto2 = "UPDATE client_kontruksi SET ck_nama='$ck_nama', ck_tel='$ck_tel', ck_alamat='$ck_alamat', ck_tanggalmasuk='$ck_tanggalmasuk', ck_catatan='$ck_catatan', ck_progress='$ck_progress', ck_keterangan='$ck_keterangan', ck_tipe='$ck_tipe', ck_foto2='$nama_foto_baru2' WHERE id_ck='$id_ck'";
                        $result_foto2 = mysqli_query($koneksi, $query_foto2);
                      // periska query apakah ada error
                      if(!$result_foto2){
                          die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                      } else {
                        history_tracking_k($position);
                        history_foto2_k($position, $nama_foto_baru2);
                        history_data_k($position, $ck_keterangan, $ck_tanggal);
                        log_web_clientk_foto($usr_session, $nm_session, $ck_nama);
                        log_web_clientk_data($usr_session, $nm_session, $ck_nama);
                        echo "<script>alert('Data & Foto Bukti 2 Berhasil Diedit ✔'); window.location='../clientdk.php';</script>";
                      }
                } else {     
                    //Bilamana format ekstensi foto1 tidak berformat jpg, jpeg, dan png akan ditolak
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png 😣');window.location='../clientdk.php';</script>";
                }
            }else{
                $query_eck = "UPDATE client_kontruksi SET ck_nama='$ck_nama', ck_tel='$ck_tel', ck_alamat='$ck_alamat', ck_tanggalmasuk='$ck_tanggalmasuk', ck_catatan='$ck_catatan', ck_progress='$ck_progress', ck_keterangan='$ck_keterangan', ck_tipe='$ck_tipe' WHERE id_ck = '$id_ck'";
                $result = mysqli_query($koneksi, $query_eck);

                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
                } else {
                    history_tracking_k($position);
                    history_data_k($position, $ck_keterangan, $ck_tanggal);
                    log_web_clientk_data($usr_session, $nm_session, $ck_nama);
                    echo "<script>alert('Data berhasil diedit.'); window.location='../clientdk.php';</script>";
                }
                
            }
        }
    }else if(isset($_POST["edit_smedia"])){
        $whatsapp = $_POST["sm_whatsapp"];
        $instagram = $_POST["sm_instagram"];
        $email = $_POST["sm_email"];
        $facebook = $_POST["sm_facebook"];
        $youtube = $_POST["sm_youtube"];

        $query_smedia = "UPDATE web_smedia SET facebook='$facebook', instagram='$instagram', youtube='$youtube', whatsapp='$whatsapp', email='$email' WHERE id_smedia = '1'";
        $result_smedia = mysqli_query($koneksi, $query_smedia);

        if(!$result_smedia){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
        } else {
            log_web_smedia($usr_session, $nm_session);
            echo "<script>alert('URL Sosial berhasil diedit ✔'); window.location='../settinges.php';</script>";
        }

    }else{
        echo "<script>alert('Sedang terjadi kesalahan, silahkan coba lagi ❌'); window.location='../dashboard.php';</script>";
    }


    
?>