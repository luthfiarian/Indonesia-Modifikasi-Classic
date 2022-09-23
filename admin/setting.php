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
include 'database/connectiondb.php';
include 'database/important.php';
include 'database/session_false.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - PT. Inti Maju Cemerlang</title>
    <link rel="shortcut icon" href="../dist/img/favicon-pt.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>
        <!-- Navbar Admin -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 py-3">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <!-- Logo -->
                <div class="px-4">
                    <a href="#"><img src="../dist/img/logo-pt.png" alt="Logo Kami" width="80" title="PT.Inti Maju Cemerlang"></a>
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
                        <li class="group"><a href="../index.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Beranda</a></li>
                        <li class="group"><a href="dashboard.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Dashboard</a></li>
                        <li class="group"><a href="clientdm.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Client</a></li>
                        <li class="group"><a href="user.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">User</a></li>
                        <li class="group"><a href="" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Setting</a></li>
                        <li class="group"><a href="database/logout.php" class="text-base font-semibold text-white rounded-xl py-2 px-10 mx-2 flex bg-red-500 hover:bg-red-700 group-hover:text-gray-200 transition duration-300 ease-in-out">Keluar</a></li>
                    </ul>
                </nav>
                </div>
            </div>
         </div>
    </header>

    <!-- Body of Content -->
    <content class="pt-3.5">
        <section class="pt-28 pb-1">
            <div class="container">
                <div class="w-full px-4 pb-10 bg-slate-200 border-l-2 border-slate-400">
                    <div class="px-5 py-3 text-center">
                        <p class="text-sm text-left">Admin > <span class="font-bold">Setting</span></p>
                        <h4 class="text-2xl font-bold text-center">Setting</h4>
                        <hr class="w-16 mx-auto mt-2 mb-2 border-b-4 rounded-full border-primary">
                        <p class="text-sm mb-4 text-center">Pengaturan website <span class="font-semibold">Indonesia Modifikasi Classic</span></p>
                    </div>
                    <table class="table table-auto mx-auto">
                        <tr class="">
                            <td class="px-20">Sunting Gambar Galeri</td>
                            <td><a href="settingeg.php" class="mr-auto md:mr-0 py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Edit</a></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td class="px-20">Sunting FAQ</td>
                            <td><a href="settingef.php" class="mr-auto md:mr-0 py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Edit</a></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td class="px-20">Sunting Sosial Media Web</td>
                            <td><a href="settinges.php" class="mr-auto md:mr-0 py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Edit</a></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td class="px-20">Rekap Data Client Mobil (Excel)</td>
                            <td><a href="database/rekapm.php" class="mr-auto md:mr-0 py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Unduh</a></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td class="px-20">Rekap Data Client Kontruksi (Excel)</td>
                            <td><a href="database/rekapk.php" class="mr-auto md:mr-0 py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Unduh</a></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td class="px-20">Rekap Data User/Admin (Excel)</td>
                            <td><a href="database/rekapu.php" class="mr-auto md:mr-0 py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Unduh</a></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td class="px-20">Credit Website</td>
                            <td><a href="version.php" class="mr-auto md:mr-0 py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Lihat</a></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td colspan="2"><p title="Catatan sang Ilahi 😁" class="text-sm text-red-500 text-center">*Catatan: Pengaturan ini hanya untuk <span class="italic">Website</span> <span class="font-semibold">Indonesia Modifikasi Classic</span>.</p></td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <?php if($_SESSION["kategori"] == "Pengelola"){ ?>
                        <tr>
                            <td colspan="2" class="text-lg font-semibold text-center">Log</td>
                        </tr>
                        <tr><td><br></td><td><br></td></tr>
                        <tr>
                            <td><a href="log.php" class="py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Lihat</a></td>
                            <td><a href="database/delete.php?reset=G23fg4%df5yHR6hh45g@#@" class="py-2 px-6 mx-auto mb-10 font-semibold text-white bg-red-500 border-2 border-red-500 transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Reset</a></td>
                        </tr>
                        <?php } ?>
                    </table>
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
    <script src="../dist/js/navbar.js"></script>
</body>
</html>