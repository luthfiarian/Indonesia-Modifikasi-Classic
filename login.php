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
<?php include 'admin/database/important.php';
include 'admin/database/session_true.php' ?>
<!-- Login Page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - IMC</title>
    <link rel="shortcut icon" href="dist/img/favicon.ico" type="image/x-icon">

    <meta name="author" content="PT. INTI MAJU CEMERLANG">
    <meta name="title" content="Login | IMC">
    <meta name="description" content="Login admin Indonesia Modifikasi Classic.">
    <meta name="keywords" content="PT Inti Maju Cemerlang, IMC, imc, Indonesia Modifikasi Classic, Mobil Classic, Mobil Kuno, Bengkel Pak Iwan, Sidoarjo, Taman, Pergudangan Taman">

    <!-- CSS -->
    <link rel="stylesheet" href="dist/output.css">
</head>

<body>
    <content class="pt-3.5">
        <section class="pt-36 pb-10">
            <div class="container">
                <div class="w-5/6 md:w-4/6 lg:w-1/2 bg-slate-100 rounded-xl mx-auto shadow-xl">
                    <div class="w-full rounded-t-xl">
                        <img src="dist/img/login.png" class="rounded-t-xl w-full" alt="">
                        <div class="-mt-28 md:-mt-36 lg:-mt-40">
                            <h1 class="text-primary_lite text-xl md:text-2xl lg:text-4xl font-bold text-center">Login</h1>
                            <hr class="w-10 border-b-teal-200 border-b-2 mt-2 mx-auto relative z-10">
                        </div>
                    </div>
                    <div class="w-full relative z-10 pt-20 md:pt-24 lg:pt-32">
                        <form action="admin/database/auth.php" method="post" class="px-8 py-5">
                            <label for="username" class="text-sm md:text-base">Username : </label>
                            <input type="text" name="username" class="font-semibold text-sm md:text-base w-full py-1 px-5 my-2 bg-orange-300 rounded-2xl placeholder:text-slate-500 placeholder:text-sm md:placeholder:text-base focus:ring-orange-400" required placeholder="Nama Pengguna">
                            <label for="password" class="text-sm md:text-base">Password : </label>
                            <input type="password" name="password" class="font-semibold text-sm md:text-base w-full py-1 px-5 my-2 bg-orange-300 rounded-2xl placeholder:text-slate-500 placeholder:text-sm md:placeholder:text-base focus:ring-orange-400" required autocomplete="off" placeholder="***">
                            <input type="submit" name="login" value="Masuk" class="py-2 px-5 mt-2 mb-2 text-sm md:text-base md:mb-0 md:mt-5 flex mx-auto font-semibold text-white bg-teal-500 rounded-full transition duration-300 ease-in-out hover:bg-opacity-80 hover:shadow-lg">
                        </form>
                    </div>
                    <div class="w-full">
                        <svg class="rounded-b-xl -mt-14" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 290" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                                    <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                                    <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,174L60,154.7C120,135,240,97,360,96.7C480,97,600,135,720,145C840,155,960,135,1080,116C1200,97,1320,77,1440,101.5C1560,126,1680,193,1800,198.2C1920,203,2040,145,2160,101.5C2280,58,2400,29,2520,14.5C2640,0,2760,0,2880,9.7C3000,19,3120,39,3240,77.3C3360,116,3480,174,3600,198.2C3720,222,3840,213,3960,174C4080,135,4200,68,4320,77.3C4440,87,4560,174,4680,188.5C4800,203,4920,145,5040,130.5C5160,116,5280,145,5400,169.2C5520,193,5640,213,5760,217.5C5880,222,6000,213,6120,174C6240,135,6360,68,6480,72.5C6600,77,6720,155,6840,183.7C6960,213,7080,193,7200,174C7320,155,7440,135,7560,140.2C7680,145,7800,174,7920,188.5C8040,203,8160,203,8280,169.2C8400,135,8520,68,8580,33.8L8640,0L8640,290L8580,290C8520,290,8400,290,8280,290C8160,290,8040,290,7920,290C7800,290,7680,290,7560,290C7440,290,7320,290,7200,290C7080,290,6960,290,6840,290C6720,290,6600,290,6480,290C6360,290,6240,290,6120,290C6000,290,5880,290,5760,290C5640,290,5520,290,5400,290C5280,290,5160,290,5040,290C4920,290,4800,290,4680,290C4560,290,4440,290,4320,290C4200,290,4080,290,3960,290C3840,290,3720,290,3600,290C3480,290,3360,290,3240,290C3120,290,3000,290,2880,290C2760,290,2640,290,2520,290C2400,290,2280,290,2160,290C2040,290,1920,290,1800,290C1680,290,1560,290,1440,290C1320,290,1200,290,1080,290C960,290,840,290,720,290C600,290,480,290,360,290C240,290,120,290,60,290L0,290Z"></path>
                            <defs>
                                <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                                    <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                                    <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,261L60,256.2C120,251,240,242,360,212.7C480,184,600,135,720,96.7C840,58,960,29,1080,38.7C1200,48,1320,97,1440,140.2C1560,184,1680,222,1800,232C1920,242,2040,222,2160,188.5C2280,155,2400,106,2520,96.7C2640,87,2760,116,2880,125.7C3000,135,3120,126,3240,111.2C3360,97,3480,77,3600,82.2C3720,87,3840,116,3960,145C4080,174,4200,203,4320,207.8C4440,213,4560,193,4680,183.7C4800,174,4920,174,5040,164.3C5160,155,5280,135,5400,106.3C5520,77,5640,39,5760,62.8C5880,87,6000,174,6120,217.5C6240,261,6360,261,6480,227.2C6600,193,6720,126,6840,96.7C6960,68,7080,77,7200,87C7320,97,7440,106,7560,116C7680,126,7800,135,7920,130.5C8040,126,8160,106,8280,101.5C8400,97,8520,106,8580,111.2L8640,116L8640,290L8580,290C8520,290,8400,290,8280,290C8160,290,8040,290,7920,290C7800,290,7680,290,7560,290C7440,290,7320,290,7200,290C7080,290,6960,290,6840,290C6720,290,6600,290,6480,290C6360,290,6240,290,6120,290C6000,290,5880,290,5760,290C5640,290,5520,290,5400,290C5280,290,5160,290,5040,290C4920,290,4800,290,4680,290C4560,290,4440,290,4320,290C4200,290,4080,290,3960,290C3840,290,3720,290,3600,290C3480,290,3360,290,3240,290C3120,290,3000,290,2880,290C2760,290,2640,290,2520,290C2400,290,2280,290,2160,290C2040,290,1920,290,1800,290C1680,290,1560,290,1440,290C1320,290,1200,290,1080,290C960,290,840,290,720,290C600,290,480,290,360,290C240,290,120,290,60,290L0,290Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section id="button-back" class="pt-1 pb-10">
            <div class="container">
                <div class="w-full px-4">
                    <div class="mx-auto text-center">
                        <a href="index.php" class="py-2 px-6 mx-auto mb-10 text-white font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Beranda</a>
                    </div>
                </div>
            </div>
        </section>
    </content>
    <!-- Footer Dashboard -->
    <footer class="pt-3.5">
        <div class="container">
            <div class="w-full px-4 text-center">
                <h5 class="text-sm">&copy <?php echo date('Y'); ?> PT. INTI MAJU CEMERLANG. All Right Reserved</h5>
            </div>
        </div>
    </footer>
</body>

</html>