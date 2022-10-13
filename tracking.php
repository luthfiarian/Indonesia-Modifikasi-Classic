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
<?php include 'admin/database/connectiondb.php';
include 'admin/database/important.php';

if (isset($_GET["cari"])) {
    $cari = $_GET["cari"];
    $pencarian = $_GET["pencarian"];
    $qm_pencarian = "SELECT * FROM client_mobil WHERE cm_tracking LIKE '$pencarian'";
    $rm_pencarian = mysqli_query($koneksi, $qm_pencarian);

    $r_history = mysqli_query($koneksi_sc, "SELECT * FROM mobil WHERE hm_tracking LIKE '$pencarian'");

    if (isset($rm_pencarian) && isset($r_history)) {
        $rows = mysqli_num_rows($rm_pencarian);
        $data = mysqli_fetch_assoc($rm_pencarian);
        if (!$rows == "1") {
            $qk_pencarian = "SELECT * FROM client_kontruksi WHERE ck_tracking LIKE '$pencarian'";
            $rk_pencarian = mysqli_query($koneksi, $qk_pencarian);
            $r_history = mysqli_query($koneksi_sc, "SELECT * FROM kontruksi WHERE hk_tracking LIKE '$pencarian'");
            if (isset($rk_pencarian)) {
                $data = mysqli_fetch_assoc($rk_pencarian);
                $rows = mysqli_num_rows($rk_pencarian);
                if (!$rows == "1") {
                    include 'admin/database/system_detail.php';
                    echo "<script>alert('Data Tidak Ditemukan, Mohon Periksa Kembali');window.location='tracking.php';</script>";
                    exit;
                } else {

                    $progress = $data["ck_progress"];
                    $success = "Kontruksi";
                }
            } else {
                include 'admin/database/system_detail.php';
                echo "<script>alert('Data Tidak Ditemukan, Mohon Periksa Kembali');window.location='tracking.php';</script>";
                exit;
            }
        } else {
            $progress = $data["cm_progress"];
            $success = "Mobil";
        }
    } else {
        include 'admin/database/system_detail.php';
        echo "<script>alert('Data Tidak Ditemukan, Mohon Periksa Kembali');window.location='tracking.php';</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- FAQ -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Tracking</title>
    <link rel="shortcut icon" href="dist/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css" integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">

    <!-- Meta -->
    <meta name="author" content="PT. INTI MAJU CEMERLANG">
    <meta name="title" content="E-Tracking">
    <meta name="description" content="Tracking pesanan anda.">
    <meta name="keywords" content="PT Inti Maju Cemerlang, IMC, imc, Indonesia Modifikasi Classic, Mobil Classic, Mobil Kuno, Bengkel Pak Iwan, Sidoarjo, Taman, Pergudangan Taman">

    <!-- CSS -->
    <link href="dist/output.css" rel="stylesheet">

    <!-- Lightbox -->
    <link href="dist/lightbox/dist/css/lightbox.css" rel="stylesheet" />

</head>

<body>
    <!-- Navbar -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 py-3">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <!-- Logo -->
                <div class="px-4">
                    <a href="index.php"><img src="dist/img/logo-imc.png" alt="Logo Kami" width="80" title="PT.Inti Maju Cemerlang"></a>
                </div>
                <!-- Button Navbar -->
                <div class="flex items-center px-4">
                    <!-- Humberger navigasi -->
                    <button class="block absolute right-4 lg:hidden" type="button" name="hamburger" id="hamburger">
                        <span class="garis-navbar transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="garis-navbar transition duration-300 ease-in-out"></span>
                        <span class="garis-navbar transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group"><a href="index.php?index=TRUE" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Beranda</a></li>
                            <li class="group"><a href="profil.php?profil=TRUE" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Profil</a></li>
                            <li class="group"><a href="galeri.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Galeri</a></li>
                            <li class="group"><a href="tracking.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Tracking</a></li>
                            <li class="group"><a href="kontak.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Kontak</a></li>
                            <li class="group"><a href="login.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Masuk</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Tracking Start-->
    <content class="pt-3.5">
        <!-- Form Search Tracking Code Start -->
        <section id="beranda" class="pt-36 pb-14">
            <div class="container">
                <h2 class="font-bold text-2xl mb-3 text-dark text-center">Tracking</h2>
                <hr class="w-24 border-b-2 mx-auto mt-1 mb-8 border-primary rounded-full">
                <h1 class="mb-2 font-medium text-xl">Tracking Progress Pesanan</h1>
                <form action="" method="get">
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" name="pencarian" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Masukkan Kode Tracking Anda" required="" autofocus autocomplete="off">
                    </div>
                    <button type="submit" name="cari" class="text-white right-2.5 bottom-2.5 mt-3 bg-primary hover:bg-primary_lite focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                </form>
            </div>
        </section>
        <!-- End of Form Search Tracking -->

        <!-- Tracking Detail Start -->
        <!-- Tracking Mobil -->
        <?php if(isset($pencarian)){ if($success == "Mobil") { ?> 
        <section id="detail" class="pb-10">
            <div class="container">
            <h1 class="text-2xl font-semibold text-center py-10">Tracking Pesanan Anda</h1>
                <!-- User Information Tracking -->
                <table class="table-auto" align="center">
                    <tr><td colspan="3" class="font-semibold text-lg">Informasi Tentang Pelanggan</td></tr>
                    <tr><td>Nama</td><td>:</td><td><?php echo $data["cm_nama"]; ?></td></tr>
                    <tr><td>Nomor Ponsel</td><td>:</td><td><?php echo $data["cm_tel"]; ?></td></tr>
                    <tr><td>Alamat</td><td>:</td><td><?php echo $data["cm_alamat"]; ?></td></tr>
                    <tr><td>Nama Kendaraan</td><td>:</td><td><?php echo $data["cm_namamobil"]; ?></td></tr>
                    <tr><td>Nomor Polisi</td><td>:</td><td><?php echo $data["cm_nopol"]; ?></td></tr>
                    <tr><td>Nomor Mesin</td><td>:</td><td><?php echo $data["cm_nomesin"]; ?></td></tr>
                    <tr><td>Tahun Kendaraan</td><td>:</td><td><?php echo $data["cm_tahunmobil"]; ?></td></tr>
                    <tr><td>Jenis Kendaraan</td><td>:</td><td><?php echo $data["cm_jenismobil"]; ?></td></tr>
                    <tr><td>Catatan</td><td>:</td><td><?php echo $data["cm_catatan"]; ?></td></tr>
                </table>
                <!-- Progress Bar -->
                <div class="py-10 w-full">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700">Progress Pengerjaan</span>
                        <span class="text-sm font-medium text-blue-700"><?php echo $data["cm_progress"] ?>%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: <?php echo $data['cm_progress'] ?>%"></div>
                    </div>
                </div>
                <!--  Progress Tracking -->
                <table class="table-auto border-l border-gray-300">
                    <tr>
                        <td>
                            <div class="relative p-0.5 border-8 border-slate-300 rounded-full -ml-3"></div>
                        </td>
                        <td>
                            <div class="block">
                                <p class="text-sm">Pesanan Masuk</p>
                                <?php echo $data["cm_tanggalmasuk"] ?>
                            </div>
                        </td>
                    </tr>
                    <?php $i = 1; while($data_track = mysqli_fetch_assoc($r_history)){ ?>
                    <tr class="<?php if($data_track["hm_foto1"] || $data_track["hm_foto2"]){ echo 'h-60'; }else{ echo 'h-20'; } ?>">
                        <td>
                            <div class="relative p-0.5 border-8 border-slate-300 rounded-full -ml-3"></div>
                        </td>
                        <td>
                            <div class="block">
                                <p class="text-sm">Proses Ke-<?php echo $i ?></p>
                                <?php echo $data_track["hm_tanggal"]; ?><br>
                                <?php echo $data_track["hm_keterangan"]; ?>
                            </div>
                            <?php if($data_track["hm_foto1"] && $data_track["hm_foto2"]){ ?>
                            <div class="flex pt-1">
                                <a href="dist/upload/<?php echo $data_track['hm_foto1']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"><img src="dist/upload/<?php echo $data_track['hm_foto1'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"> <span class="px-4"></span></a>
                                <a href="dist/upload/<?php echo $data_track['hm_foto2']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"><img src="dist/upload/<?php echo $data_track['hm_foto2'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"></a>
                            </div>
                            <?php }else if($data_track["hm_foto1"]){ ?>
                            <div class="flex pt-1">
                            <a href="dist/upload/<?php echo $data_track['hm_foto1']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"><img src="dist/upload/<?php echo $data_track['hm_foto1'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"></a>
                            </div>
                            <?php }else if($data_track["hm_foto2"]){ ?>
                            <div class="flex pt-1">
                            <a href="dist/upload/<?php echo $data_track['hm_foto2']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"><img src="dist/upload/<?php echo $data_track['hm_foto2'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"></a>
                            </div>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php $i++;} ?>
                    <?php if($data["cm_progress"] == "100"){ ?>
                    <tr>
                        <td>
                            <div class="relative p-0.5 border-8 border-slate-500 rounded-full -ml-3"></div>
                        </td>
                        <td>
                            <div class="block">
                                <p class="text-sm">Pesanan Selesai ✔</p>
                                <?php echo $data["cm_tanggal"] ?>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
        <?php }else ?>
        <!-- Tracking Kontruksi -->
        <?php if($success == "Kontruksi"){?>
            <section id="detail" class="pb-16">
            <div class="container">
                <h1 class="text-2xl font-semibold text-center py-10">Tracking Pesanan Anda</h1>
                <!-- User Information Tracking -->
                <table class="table-auto" align="center">
                    <tr><td colspan="3" class="font-semibold text-lg">Informasi Tentang Pelanggan</td></tr>
                    <tr><td>Nama</td><td>:</td><td><?php echo $data["ck_nama"]; ?></td></tr>
                    <tr><td>Nomor Ponsel</td><td>:</td><td><?php echo $data["ck_tel"]; ?></td></tr>
                    <tr><td>Alamat</td><td>:</td><td><?php echo $data["ck_alamat"]; ?></td></tr>
                    <tr><td>Jenis Pesanan</td><td>:</td><td><?php echo $data["ck_jenis"]; ?></td></tr>
                    <tr><td>Catatan</td><td>:</td><td><?php echo $data["ck_catatan"]; ?></td></tr>
                </table>
                <!-- Progress Bar -->
                <div class="py-10 w-full">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700">Progress Pengerjaan</span>
                        <span class="text-sm font-medium text-blue-700"><?php echo $data["ck_progress"] ?>%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: <?php echo $data['ck_progress'] ?>%"></div>
                    </div>
                </div>
                <!--  Progress Tracking -->
                <table class="table-auto border-l border-gray-300">
                    <tr>
                        <td>
                            <div class="relative p-0.5 border-8 border-slate-300 rounded-full -ml-3"></div>
                        </td>
                        <td>
                            <div class="block">
                                <p class="text-sm">Pesanan Masuk</p>
                                <?php echo $data["ck_tanggalmasuk"] ?>
                            </div>
                        </td>
                    </tr>
                    <?php $i = 1; while($data_track = mysqli_fetch_assoc($r_history)){ ?>
                    <tr class="<?php if($data_track["hk_foto1"] || $data_track["hk_foto2"]){ echo 'h-60'; }else{ echo 'h-20'; } ?>">
                        <td>
                            <div class="relative p-0.5 border-8 border-slate-300 rounded-full -ml-3"></div>
                        </td>
                        <td>
                            <div class="block">
                                <p class="text-sm">Proses Ke-<?php echo $i ?></p>
                                <?php echo $data_track["hk_tanggal"]; ?><br>
                                <?php echo $data_track["hk_keterangan"]; ?>
                            </div>
                            <?php if($data_track["hk_foto1"] && $data_track["hk_foto2"]){ ?>
                            <div class="flex pt-1">
                            <a href="dist/upload/<?php echo $data_track['hk_foto1']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"><img src="dist/upload/<?php echo $data_track['hk_foto1'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"> <span class="px-4"></span></a>
                            <a href="dist/upload/<?php echo $data_track['hk_foto2']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"> <img src="dist/upload/<?php echo $data_track['hk_foto2'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"></a>
                            </div>
                            <?php }else if($data_track["hk_foto1"]){ ?>
                            <div class="flex pt-1">
                            <a href="dist/upload/<?php echo $data_track['hk_foto1']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"><img src="dist/upload/<?php echo $data_track['hk_foto1'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"></a>
                            </div>
                            <?php }else if($data_track["hk_foto2"]){ ?>
                            <div class="flex pt-1">
                            <a href="dist/upload/<?php echo $data_track['hk_foto2']; ?>" data-lightbox="roadtrip" data-title="Foto Bukti"><img src="dist/upload/<?php echo $data_track['hk_foto2'] ?>" alt="Foto Bukti" class="max-h-28 rounded-xl transition duration-300 ease-in-out hover:scale-110 hover:shadow-xl"></a>
                            </div>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php $i++;} ?>
                    <?php if($data["ck_progress"] == "100"){ ?>
                    <tr>
                        <td>
                            <div class="relative p-0.5 border-8 border-slate-500 rounded-full -ml-3"></div>
                        </td>
                        <td>
                            <div class="block">
                                <p class="text-sm">Pesanan Selesai ✔</p>
                                <?php echo $data["ck_tanggal"] ?>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
        <?php } ?>
        <div class="w-full px-4 flex py-14">
            <button class="py-2 px-4 bg-primary mx-auto rounded-full transition duration-300 ease-in-out hover:bg-opacity-80 hover:shadow-2xl" onclick="window.print();">Print Hasil Tracking</button>
        </div>
        <?php } ?>   
        <!-- Tracking Detail End -->

    </content>
    <!-- End Tracking -->

    <!-- Footer -->
    <footer class="bg-dark bg-opacity-90 pt-24 pb-12">
        <div class="container">
            <!-- Logo footer -->
            <div class="w-full px-4">
                <img src="dist/img/logo-imc.png" width="80px" alt="" class="mb-2">
            </div>
            <div class="flex flex-warp justify-center">
                <!-- Deskripsi footer -->
                <div class="px-4 mb-12 text-white lg:w-1/3">
                    <h3 class="text-xl my-2 font-semibold">Indonesia Modifikasi Classic</h3>
                    <p class="lg:text-justify">Perusahaan yang melayani reparasi mobil kuno ataupun mobil lawas yang ubah menjadi mobil jeep atau classic lainnya.</p>
                    <!-- Media Sosial Footer -->
                    <div class="mt-5">
                        <!-- Link Ketika Screen Besar -->
                        <div class="flex items-center blocks">
                            <!-- Youtube -->
                            <a href="<?php echo $smedia["youtube"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>YouTube</title>
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                            <!-- Instagram -->
                            <a href="<?php echo $smedia["instagram"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-pink-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a href="<?php echo $smedia["facebook"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-blue-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Facebook</title>
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="<?php echo $smedia["whatsapp"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-green-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Whatsapp</title>
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                            </a>
                            <a href="<?php echo $smedia["email"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Email</title>
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Gmail</title>
                                        <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                                    </svg>
                            </a>
                        </div>
                        <!-- Link Ketika Screen Kecil -->
                        <table class="table table-auto md:hidden lg:hidden relative -mt-8">
                            <tr>
                                <td>
                                    <!-- Youtube -->
                                    <a href="<?php echo $smedia["youtube"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>YouTube</title>
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <!-- Instagram -->
                                    <a href="<?php echo $smedia["instagram"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-pink-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Instagram</title>
                                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <!-- Facebook -->
                                    <a href="<?php echo $smedia["facebook"]; ?>" target="_blank" class="mx-6 w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-blue-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Facebook</title>
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Whatsapp -->
                                    <a href="<?php echo $smedia["whatsapp"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-green-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Whatsapp</title>
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <!-- Email -->
                                    <a href="<?php echo $smedia["email"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Email</title>
                                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <title>Gmail</title>
                                                <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                                            </svg>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Tautan Footer -->
                <div class="px-4 mb-12 text-white lg:w-1/3">
                    <h3 class="font-semibold text-xl my-2 opacity-90">Tautan kami</h3>
                    <ul>
                        <li class="mb-1"><a href="index.php?index=TRUE" class="hover:text-primary inline-block transition duration-150 ease-in-out">Beranda</a></li>
                        <li class="mb-1"><a href="profil.php?profil=TRUE" class="hover:text-primary inline-block transition duration-150 ease-in-out">Profil</a></li>
                        <li class="mb-1"><a href="galeri.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Galeri</a></li>
                        <li class="mb-1"><a href="tracking.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Tracking</a></li>
                        <li class="mb-1"><a href="kontak.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Kontak</a></li>
                        <li class="mb-1"><a href="login.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Masuk</a></li>
                    </ul>
                </div>
                <br>
                <!-- Bantuan Footer -->
                <div class="px-4 mb-12 text-white lg:w-1/3">
                    <h3 class="font-semibold text-xl my-2 opacity-90">Bantuan</h3>
                    <ul>
                        <li class="mb-1"><a href="faq.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">FAQ</a></li>
                        <li class="mb-1"><a href="layanan.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Layanan Kami</a></li>
                        <li class="mb-1"><a href="lokasi.php?lokasi=TRUE" class="hover:text-primary inline-block transition duration-150 ease-in-out">Lokasi</a></li>
                    </ul>
                </div>
                <!-- Tentang Kami Footer -->
                <!-- <div class="sm:w-1/2 px-4 mb-12 text-white lg:w-1/4">
                    <h3 class="font-semibold text-xl my-2 opacity-90">Tentang Kami</h3>
                    <ul>
                        <li class="mb-1"><a href="#" class="hover:text-primary inline-block transition duration-150 ease-in-out">Tentang Kami</a></li>
                        <li class="mb-1"><a href="#" class="hover:text-primary inline-block transition duration-150 ease-in-out">Artikel Kami</a></li>
                        <li class="mb-1"><a href="#" class="hover:text-primary inline-block transition duration-150 ease-in-out">Galeri Lengkap</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="w-full px-4 border-t pt-10 border-white">
                <p class="text-center text-white text-sm">&copy; <?php echo date("Y"); ?> PT INTI MAJU CEMERLANG</p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="dist/js/navbar.js" type="text/javascript"></script>
    <script src="dist/lightbox/dist/js/lightbox-plus-jquery.js" type="text/javascript"></script>
</body>

</html>