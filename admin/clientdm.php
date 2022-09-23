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
    include 'database/connectiondb.php'; include 'database/important.php';
    include 'database/session_false.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client - PT. INTI MAJU CEMERLANG</title>
    <link rel="shortcut icon" href="../dist/img/favicon-pt.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="../dist/output.css">
    <style>
    @media screen and (max-width: 640px) {
      .crd-atas{
        flex-direction: column;
      }
      .crd{
        display: flex;
      }
    }
  </style>
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
                        <li class="group"><a href="" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Client</a></li>
                        <li class="group"><a href="user.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">User</a></li>
                        <li class="group"><a href="setting.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Setting</a></li>
                        <li class="group"><a href="database/logout.php" class="text-base font-semibold text-white rounded-xl py-2 px-10 mx-2 flex bg-red-500 hover:bg-red-700 group-hover:text-gray-200 transition duration-300 ease-in-out">Keluar</a></li>
                    </ul>
                </nav>
                </div>
            </div>
         </div>
    </header>

    <!-- Body of Content -->
    <content class="pt-3.5">
        <section class="pt-28 pb-3">
            <div class="container">
                <div class="w-full px-4 mb-5 text-center">
                    <a href="" class="px-4 py-2 -mr-1.5 rounded-l-lg bg-dark text-white font-semibold">Mobil</a>
                    <a href="clientdk.php" class="px-4 py-2 bg-primary rounded-r-lg shadow-lg font-semibold">Kontruksi</a>
                </div>
                <div class="w-full px-4 pb-10 bg-slate-200 border-l-2 border-slate-400">
                    <div class="px-5 py-3">
                        <p class="text-sm">Admin > <span class="font-bold">Client</span> - Daftar Client Mobil</p>
                    </div>
                    
                    <?php
                        // Pagination
                        $batas = 10;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                        $previous = $halaman - 1;
                		$next = $halaman + 1;
                        
                        $jumlah_user = mysqli_num_rows($result_cm);
                	    $total_halaman = ceil($jumlah_user / $batas);
                	    $data_user = mysqli_query($koneksi,"SELECT * FROM client_mobil LIMIT $halaman_awal, $batas");
                        

                        if(isset($_GET["cari"])){
                            if(isset($_GET["keyword"])){
                                $pencarian = $_GET["pencarian"];
                                $keyword = $_GET["keyword"];   
                                
                                if($keyword == "Nama Owner"){
                                    $query_pencarian = "SELECT * FROM client_mobil WHERE cm_nama LIKE '%$pencarian%' LIMIT $halaman_awal, $batas";
                                    $data_user = mysqli_query($koneksi, $query_pencarian);
                                } else if($keyword == "Nama Mobil"){
                                    $query_pencarian = "SELECT * FROM client_mobil WHERE cm_namamobil LIKE '%$pencarian%' LIMIT $halaman_awal, $batas";
                                    $data_user = mysqli_query($koneksi, $query_pencarian);
                                } else if($keyword == "Nomor Polisi"){
                                    $query_pencarian = "SELECT * FROM client_mobil WHERE cm_nopol LIKE '%$pencarian%' LIMIT $halaman_awal, $batas";
                                    $data_user = mysqli_query($koneksi, $query_pencarian);
                                } else if($keyword == "Kode Tracking"){
                                    $query_pencarian = "SELECT * FROM client_mobil WHERE cm_tracking LIKE '%$pencarian%' LIMIT $halaman_awal, $batas";
                                    $data_user = mysqli_query($koneksi, $query_pencarian);
                                } else if($keyword == "Tahun Mobil"){
                                    $query_pencarian = "SELECT * FROM client_mobil WHERE cm_tahunmobil LIKE '%$pencarian%' LIMIT $halaman_awal, $batas";
                                    $data_user = mysqli_query($koneksi, $query_pencarian);
                                } else if($keyword == "Jenis Mobil"){
                                    $query_pencarian = "SELECT * FROM client_mobil WHERE cm_jenismobil LIKE '%$pencarian%' LIMIT $halaman_awal, $batas";
                                    $data_user = mysqli_query($koneksi, $query_pencarian);
                                } else if($keyword == "Progress"){
                                    $query_pencarian = "SELECT * FROM client_mobil WHERE cm_progress LIKE '%$pencarian%' LIMIT $halaman_awal, $batas";
                                    $data_user = mysqli_query($koneksi, $query_pencarian);
                                } else {
                                    echo "<script>alert('Server tidak menjangkau ❌'); window.location='clientdm.php';</script>";
                                }
                            }else{
                                echo "<script>alert('Keyword yang anda masukkan salah ❌'); window.location='clientdm.php';</script>";
                            }
                        }

                        $nomor = $halaman_awal+1;
                    ?>


                    <!-- Search Table -->
                    <form class="" action="" method="get">   
                        <div class="pt-5 block">
                        <div class="relative z-0 mb-6 w-full group">
                            <select name="keyword" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" aria-placeholder=" " required="">
                                <option value="Nama Owner">Nama Owner</option>
                                <option value="Nama Mobil">Nama Mobil</option>
                                <option value="Nomor Polisi">Nomor Polisi</option>
                                <option value="Kode Tracking">Kode Tracking</option>
                                <option value="Tahun Mobil">Tahun Mobil</option>
                                <option value="Jenis Mobil">Jenis Mobil</option>
                                <option value="Progress">Progress</option>
                            </select>
                            <label for="ket_progress" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pencarian Bedasarkan :</label>
                        </div>
                        </div>
                        <div class="flex items-center mb-5">
                            <label for="simple-search" class="sr-only">Cari</label>
                            <div class="relative w-full">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" name="pencarian" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari" required="" autocomplete="off" autofocus>
                            </div>
                            <button type="submit" name="cari" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </form>
                    <!-- End Search Table -->
                    
                    <!-- Text Hasil Pencarian -->
                    <?php if(isset($_GET['cari'])){  echo "<p class='text-lg'>Hasil pencarian : </p>" . $pencarian; }?>


                    <!-- Table  -->
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-2 mb-5">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">Nama (Owner)</th>
                                    <th scope="col" class="py-3 px-6">Ponsel</th>
                                    <th scope="col" class="py-3 px-6">Nama Mobil</th>
                                    <th scope="col" class="py-3 px-6">Tahun</th>
                                    <th scope="col" class="py-3 px-12">Nomor Polisi</th>
                                    <th scope="col" class="py-3 px-6">Kode Tracking</th>
                                    <th scope="col" class="py-3 px-6">Progress</th>
                                    <th scope="col" class="py-3 px-6"><span class="sr-only">Edit</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($clientcm = mysqli_fetch_assoc($data_user)){ ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $clientcm['cm_nama']; ?></th>
                                    <td class="py-4 px-6"><?php echo $clientcm['cm_tel']; ?></td>
                                    <td class="py-4 px-6"><?php echo $clientcm['cm_namamobil']; ?></td>
                                    <td class="py-4 px-6"><?php echo $clientcm['cm_tahunmobil']; ?></td>
                                    <td class="py-4 px-12"><?php echo $clientcm['cm_nopol']; ?></td>
                                    <td class="py-4 px-6"><?php echo $clientcm['cm_tracking']; ?></td>
                                    <td class="py-4 px-6 text-center"><?php echo $clientcm['cm_progress'] . "%"; ?></td>
                                    <td class="py-4 px-6 text-center"><a href="printdm.php?id_cm=<?php echo $clientcm['id_cm'] ?>" class="font-medium text-green-600 dark:text-green-500 hover:opacity-80">Print</a> | <a href="editdm.php?id_cm=<?php echo $clientcm['id_cm'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:opacity-80">Edit</a> | <a href="database/delete.php?id_cm=<?php echo $clientcm['id_cm'] ?>" class="font-medium text-red-600 dark:text-red-500 hover:opacity-80">Hapus</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->

                    <!-- Pagination -->
                    <div class="flex flex-warp">
                        <div class="mx-auto items-center">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px text-center">
                                    <li>
                                        <a <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?> class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                    </li>
                                    <?php for($x=1;$x<=$total_halaman;$x++){ ?> 
                                    <li>
                                        <a href="?halaman=<?php echo $x ?>" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $x; ?></a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?> class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </section>
        
        <!-- Button Changger Section -->
        <section id="button-changger" class="pt-4 pb-10">
            <div class="container">
                <div class="w-full px-4">
                    <div class="mx-auto crd-atas text-center">
                        <a href="clientm.php" class="crd py-2 px-6 mx-auto mb-2 md:mb-10 font-semibold bg-primary border-2 border-primaryk transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Pemesanan Mobil</a>
                        <a href="clientk.php" class="crd py-2 px-6 mx-auto mb-2 md:mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Pemesanan Kontruksi</a>
                        <a href="" class="crd py-2 px-6 mx-auto mb-2 md:mb-10 font-semibold text-white bg-dark border-2 border-dark transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Daftar Client</a>
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
    <script src="../dist/js/navbar.js"></script>
</body>
</html>