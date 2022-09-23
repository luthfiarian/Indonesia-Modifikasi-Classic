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
    include 'database/connectiondb.php'; include "database/important.php";
    include 'database/session_false.php';
    if(isset($_GET["id_ck"])){
        $id_ck = $_GET["id_ck"];
        echo "<script>window.print(); setTimeout(function(){ window.location.href = 'clientdk.php'; }, 5000);</script>";
    } else if(!isset($_GET["id_ck"])){
        header("Location: clientdk.php");
        exit;
    }
    $query_pr = "SELECT * FROM client_kontruksi WHERE id_ck = '$id_ck'";
    $result_pr = mysqli_query($koneksi, $query_pr);
    $printk = mysqli_fetch_assoc($result_pr);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print - PT. Inti Maju Cemerlang</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>
    <content class="pt-3.5">
        <section id="data" class="pt-10">
            <div class="container">
                <div class="w-full px-4 mx-auto">
                    <table class="mx-auto table table-auto">
                        <tr>
                            <td><img width="100px" src="../dist/img/logo-pt.png" alt="Logo Kami"></td>
                            <td class="px-10">
                                <h1 class="text-xl text-center font-bold uppercase font-serif block">PT. Inti Maju Cemerlang</h1>
                                <p class="text-base text-center font-thin">Sambikerep, Jemundo, Kec. Taman, Kabupaten Sidoarjo, <br> Jawa Timur <br> ☎ (0851)-0311-5145 📬 61257</p>
                            </td>
                        </tr>
                    </table>
                    <div class="flex">
                        <hr class="my-6 w-1/2 block mx-auto border-b-2 border-black">
                    </div>
                    <table class="mx-auto table text-base table-auto">
                        <tr>
                            <td>Nama Pemilik</td>
                            <td class="px-20">:</td>
                            <td><?php echo $printk["ck_nama"]; ?></td>
                        </tr>
                        <tr>
                            <td>Ponsel</td>
                            <td class="px-20">:</td>
                            <td><?php echo $printk["ck_tel"]; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td class="px-20">:</td>
                            <td class="w-[300px] block"><?php echo $printk["ck_alamat"]; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td class="px-20">:</td>
                            <td><?php echo $printk["ck_jenis"]; ?></td>
                        </tr>
                        <tr>
                            <td>Catatan/Deskripsi</td>
                            <td class="px-20">:</td>
                            <td class="w-[300px] block"><?php echo $printk["ck_catatan"]; ?></td>
                        </tr>
                        <tr>
                            <td>Progress</td>
                            <td class="px-20">:</td>
                            <td><?php echo $printk["ck_progress"] . "%" ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td class="px-20">:</td>
                            <td class="w-[300px] block"><?php echo $printk["ck_keterangan"]; ?>l</td>
                        </tr>
                    </table>
                    <div class="mx-auto mt-10 mb-10 py-5 w-[50%] text-center border-4 border-green-400">
                        <h1 class="text-lg font-semibold">Kode Tracking</h1>
                        <p class="text-4xl font-bold"><?php echo $printk["ck_tracking"]; ?></p>
                    </div>
                </div>
            </div>
        </section>
    </content>
    <!-- Footer Print -->
    <footer class="pt-3.5">
        <div class="container">
            <div class="w-full px-4 text-center">
                <h5 class="text-sm">&copy <?php echo date('Y'); ?> PT. Inti Maju Cemerlang. All Right Reserved</h5>
            </div>
        </div>
    </footer>
</body>
</html>