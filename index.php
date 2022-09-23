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
// include 'resolution.php';
$smedia = mysqli_fetch_assoc($result_sm);

    // Responsive iframe
    if(!isset($_SESSION["screen_width"])){
        header("Location: responsive.php");
    }else{
        $width_reso = $_SESSION["screen_width"];
        if($width_reso <= 486){
            $w_reso = 360;
            $h_reso = 150;
        } else if($width_reso <= 596){
            $w_reso = 400;
            $h_reso = 175;
        } else if($width_reso <= 720){
            $w_reso = 460;
            $h_reso = 200;
        } else if($width_reso <= 995){
            $w_reso = 500;
            $h_reso = 260;
        } else if($width_reso >= 1100){
            $w_reso = 560;
            $h_reso = 300;
        }else{
            $w_reso = 360;
            $h_reso = 150;
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Beranda</title>
    <link rel="shortcut icon" href="dist/img/favicon.ico" type="image/x-icon">

    <!-- Meta -->
    <meta name="author" content="PT. INTI MAJU CEMERLANG">
    <meta name="title" content="Beranda | IMC">
    <meta name="description" content="Perusahaan reparasi mobil kuno yang mengubahnya menjadi mobil jeep classic dan modern sehingga mobil memiliki citra yang tinggi.">
    <meta name="keywords" content="PT Inti Maju Cemerlang, IMC, imc, Indonesia Modifikasi Classic, Mobil Classic, Mobil Kuno, Bengkel Pak Iwan, Sidoarjo, Taman, Pergudangan Taman">

    <!-- CSS -->
    <link href="dist/output.css" rel="stylesheet">

    <!-- CDN 1. Swipper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

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
                            <li class="group"><a href="index.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Beranda</a></li>
                            <li class="group"><a href="profil.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Profil</a></li>
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

    <content class="pt-3.5">
        <!-- Hero Section -->
        <section id="beranda" class="pt-36 pb-32">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-4 lg:w-1/2">
                        <h1 class="font-bold text-dark text-2xl md:text-3xl lg:text-5xl">
                            Bergabung Bersama Kami <span class="block">Bangun Impianmu Sekarang</span>
                        </h1>
                        <p class="text-dark font-medium pt-5 mb-10 leading-relaxed uppercase">
                            Indonesia Modifikasi Classic
                        </p>
                    </div>
                    <div class="w-full self-end px-4 lg:w-1/2">
                        <div class="mt-20 relative lg:mt-0 lg:right-0">
                            <img src="dist/img/hero.png" alt="Jeep IMC" title="Jeep Buatan Kami" class="max-w-full mx-auto">
                            <span class="absolute -bottom-0 -z-10 -translate-x-1/2 left-1/2 md:-scale-150">
                                <svg width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#0c4a6e" d="M31,-37.2C39.5,-36.5,45.3,-26.6,55.5,-13.7C65.7,-0.8,80.4,15.1,79.6,28.4C78.8,41.7,62.4,52.6,46.6,62.3C30.7,72.1,15.4,80.8,1.6,78.6C-12.2,76.4,-24.4,63.3,-39.2,53.3C-54.1,43.2,-71.6,36.1,-79.1,23.3C-86.7,10.5,-84.2,-8.1,-72.5,-17.2C-60.8,-26.4,-39.9,-26.2,-26.2,-25.2C-12.6,-24.3,-6.3,-22.5,2.5,-25.9C11.3,-29.3,22.5,-37.9,31,-37.2Z" transform="translate(100 100)" />
                                </svg>
                            </span>
                            <span class="absolute -bottom-0 -z-20 -translate-x-1/2 left-1/2 md:scale-150">
                                <svg width="370" height="370" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#38bdf8" d="M32,-53.9C45.4,-49.5,60.5,-46.6,71.2,-37.9C81.9,-29.1,88.1,-14.6,89.1,0.6C90.2,15.8,86.1,31.6,74,37.8C61.9,44.1,41.8,40.8,28.1,39.7C14.5,38.5,7.2,39.4,-2.6,43.8C-12.4,48.3,-24.7,56.2,-30.9,53.1C-37.1,50,-37.2,35.8,-45.5,25.1C-53.8,14.4,-70.4,7.2,-72.8,-1.4C-75.3,-10,-63.6,-20,-56.7,-33.1C-49.8,-46.2,-47.6,-62.5,-38.9,-69.1C-30.3,-75.7,-15.1,-72.7,-2.5,-68.4C10.1,-64,20.2,-58.2,32.8,-53.9Z" transform="translate(100 100)" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->

        <!-- Profil Section -->
        <?php

        ?>
        <section id="profil" class="pt-36 pb-32">
            <div class="container">
                <div class="w-full px-4">

                    <h2 class="text-center font-bold text-3xl mb-2 text-dark">Profil</h2>
                    <hr class="w-24 border-b-2 mx-auto mb-3 mt-1 border-primary rounded-full">

                </div>
                <div class="w-full px-4 flex flex-wrap justify-center">
                    <div class="mb-12 p-4 lg:w-1/2">
                        <h2 class="font-semibold  text-4xl lg:text-6xl mb-2">Kami adalah</h2>
                        <p class="font-medium">Perusahaan reparasi mobil kuno yang mengubahnya menjadi mobil jeep classic dan modern sehingga mobil memiliki citra yang tinggi.</p>
                        <a href="profil.php">
                            <span class="font-medium text-dark">Selengkapnya ></span>
                        </a>
                    </div>
                    <div class="mb-12 p-4 lg:w-1/2">
                    <iframe class="rounded-lg shadow-2xl mx-auto" width="<?php echo $w_reso; ?>" height="<?php echo $h_reso; ?>" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.91209663032!2d112.6838822153789!3d-7.3637499745065105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e339654a0f67%3A0x11d6f004fb5d120d!2sPT.%20Inti%20Maju%20Cermerlang!5e0!3m2!1sid!2sid!4v1660839741506!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="w-full px-2 md:px-4">
                <div class="max-w-xl mx-auto mb-20">
                <iframe class="rounded-lg shadow-2xl mx-auto" width="<?php echo $w_reso; ?>" height="<?php echo $h_reso; ?>" src="https://www.youtube.com/embed/ps5pWJdo0qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="max-w-xl mx-auto text-center mb-5">
                    <a href="profil.php" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Selengkapnya</a>
                </div>
            </div>
        </section>
        <!-- End Profil Section -->

        <!-- PHP Section Galeri -->
        <?php
        $result_gambar = mysqli_query($koneksi, "SELECT * FROM web_galeri LIMIT 6");
        ?>


        <!-- Galeri Section -->
        <section id="galeri" class="pt-36 pb-16 bg-slate-100">
            <div class="container">
                <!-- Bagian header galeri -->
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h2 class="font-bold text-3xl mb-2 text-dark">Galeri</h2>
                        <hr class="w-24 border-b-2 mx-auto mb-3 mt-1 border-primary rounded-full">
                        <p>Hasil Karya Anak Bangsa untuk Republik Indonesia</p>
                    </div>
                </div>
                <!-- Bagian Foto Galeri -->
                <div class="w-full px-4 flex flex-wrap justify-center xl:w-9/12 xl:mx-auto">
                    <?php while ($data_gambar = mysqli_fetch_array($result_gambar)) { ?>
                        <div class="mb-5 p-4 md:w-1/2 lg:w-1/3">
                            <div class="rounded-md shadow-md overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out">
                                <img src="dist/img/<?php echo $data_gambar['gambar']; ?>" alt="Gambar 1" class="object-cover h-48 w-full"">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class=" w-full px-4 mt-5">
                                <div class="max-w-xl mx-auto text-center mb-16">
                                    <a href="galeri.php" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
        </section>
        <!-- End Galeri Section -->

        <!-- In Progress Customer Section -->
        <section id="progress" class="pt-36 pb-16 bg-gray-500 hover:shadow-2xl">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h2 class="font-bold text-3xl mb-2 text-white">In Progess</h2>
                        <hr class="w-24 border-b-2 mx-auto mb-3 mt-1 border-primary rounded-full">
                        <p class="text-white">Di bawah ini adalah beberapa Mobil yang sedang dalam tahap proses modifikasi</p>
                    </div>
                    <!-- Slider main container -->
                    <div class="swiper mySwiper shadow-2xl">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php
                            $query_progressm = "SELECT * FROM client_mobil LIMIT 3";
                            $result_progressm = mysqli_query($koneksi, $query_progressm);

                            while ($data_mobil = mysqli_fetch_assoc($result_progressm)) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="w-full h-full bg-slate-200 rounded-md">
                                        <div class="px-10 py-10">
                                            <h3 class="font-bold text-xl md:text-2xl"><?php echo $data_mobil["cm_nama"] ?></h3>
                                            <p class="font-semibold mb-5"><?php echo $data_mobil["cm_namamobil"] ?> | <?php echo $data_mobil["cm_tahunmobil"] ?></p>
                                            <table class="mx-auto mb-10">
                                                <tr>
                                                    <td class="w-1/2 pr-5"><img src="dist/upload/<?php echo $data_mobil["cm_foto1"] ?>" class="h-24 md:h-48 w-full rounded-sm" alt="Foto Customer 1"></td>
                                                    <td class="w-1/2 pr-5"><img src="dist/upload/<?php echo $data_mobil["cm_foto2"] ?>" class="h-24 md:h-48 w-full rounded-sm" alt="Foto Customer 1"></td>
                                                </tr>
                                            </table>
                                            <!-- Progress Pengerjaan Mobil -->
                                            <div class="flex w-full">
                                                <div class="w-5/6">
                                                    <div class="mx-auto w-[80%] bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                        <div wid class="bg-blue-600 mr-5 h-2.5 rounded-full" style="width: <?php echo $data_mobil["cm_progress"] ?>%"></div>
                                                    </div>
                                                </div>
                                                <div class="w-1/6">
                                                    <p class="font-semibold"><?php echo $data_mobil["cm_progress"] ?> %</p>
                                                </div>
                                            </div>
                                            <p class="font-light mt-5">Keterangan : <?php echo $data_mobil["cm_keterangan"] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center my-16">
                        <a href="tracking.php" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Cek Milik Anda</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End In Progress Customer Section -->
    </content>

    <!-- Footer -->
    <footer class="bg-dark pt-24 pb-12 hover:shadow-2xl hover:z-50">
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
                            <a href="mailto:<?php echo $smedia["email"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Email</title>
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Email</title>
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
                                    <a href="mailto:<?php echo $smedia["email"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Email</title>
                                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <title>Email</title>
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
                        <li class="mb-1"><a href="index.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Beranda</a></li>
                        <li class="mb-1"><a href="profil.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Profil</a></li>
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
                        <li class="mb-1"><a href="lokasi.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Lokasi</a></li>
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
    <script src="dist/js/swipper.js" type="text/javascript"></script>
</body>

</html>