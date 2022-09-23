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
include 'database/system_detail.php';
if(!$_SESSION["kategori"] == "Pengelola") {
    header("Locaton: setting.php");
    exit;
}
if(isset($_GET["cari"])){
    $pencarian = $_GET["pencarian"];
    $query_logweb = "SELECT * FROM web_log WHERE des_log LIKE '%$pencarian%'";
    $result_logweb = mysqli_query($koneksi, $query_logweb);
}else{
    $query_logweb = "SELECT * FROM web_log";
    $result_logweb = mysqli_query($koneksi, $query_logweb);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="shortcut icon" href="../dist/img/favicon-pt.ico" type="image/x-icon">
</head>

<body>
    <content class="pt-3.5">
        <section class="pt-28">
            <div class="container">
                <div class="w-full px-4">
                    <h1 class="text-center font-bold text-dark text-2xl mb-2">LOG SYSTEM</h1>
                    <hr class="border mx-auto border-b-2 border-primary w-[80px] mb-2">
                    <p class="text-base text-center mb-10">Rekam jejak admin</p>
                    <div class="flex items-center">
                        <a href="setting.php" class="text-base mb-5 mx-auto font-semibold bg-primary rounded-full px-8 py-2 transition duration-300 ease-in-out shadow-xl hover:shadow-none">Kembali</a>
                    </div>
                    <form action="" method="get">
                        <div class="flex items-center mb-5">
                            <label for="simple-search" class="sr-only">Cari</label>
                            <div class="relative w-full">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="pencarian" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari" required="" autocomplete="off" autofocus>
                            </div>
                            <button type="submit" name="cari" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="w-full px-4 pt-5">
                    <table class="table w-full table-auto mx-auto">
                        <?php $n = 1; while($log = mysqli_fetch_assoc($result_logweb)){ ?>
                        <tr>
                            <td class="px-5"><?php echo $n; ?>.</td>
                            <td class="max-w-sm"><?php echo $log["des_log"]; $n++;?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </section>
    </content>
</body>

</html>