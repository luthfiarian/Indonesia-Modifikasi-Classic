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
                        <li class="group"><a href="#" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Beranda</a></li>
                        <li class="group"><a href="dashboard.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Dashboard</a></li>
                        <li class="group"><a href="" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Client</a></li>
                        <li class="group"><a href="user.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">User</a></li>
                        <li class="group"><a href="#" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Setting</a></li>
                        <li class="group"><a href="#" class="text-base font-semibold text-white rounded-xl py-2 px-10 mx-2 flex bg-red-500 hover:bg-red-700 group-hover:text-gray-200 transition duration-300 ease-in-out">Keluar</a></li>
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

                    <!-- Search Table -->
                    <form class="flex items-center mb-5">   
                        <label for="simple-search" class="sr-only">Cari</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                        </div>
                        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                    <!-- End Search Table -->

                    <!-- Table  -->
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-2 mb-5">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">Nama (Owner)</th>
                                    <th scope="col" class="py-3 px-6">Ponsel</th>
                                    <th scope="col" class="py-3 px-6">Nama Mobil</th>
                                    <th scope="col" class="py-3 px-6">Tahun</th>
                                    <th scope="col" class="py-3 px-10">Nomor Polisi</th>
                                    <th scope="col" class="py-3 px-6">Kode Tracking</th>
                                    <th scope="col" class="py-3 px-10">Progress</th>
                                    <th scope="col" class="py-3 px-6"><span class="sr-only">Edit</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">Gunawan</th>
                                    <td class="py-4 px-6">081-232-423-122</td>
                                    <td class="py-4 px-6">Honda Civic</td>
                                    <td class="py-4 px-6">2005</td>
                                    <td class="py-4 px-10">W 0904 LXD</td>
                                    <td class="py-4 px-6">75986W28</td>
                                    <td class="py-4 px-6 text-center">50%</td>
                                    <td class="py-4 px-6 text-center"><a href="#" class="font-medium text-green-600 dark:text-green-500 hover:opacity-80">Print</a> | <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:opacity-80">Edit</a> | <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:opacity-80">Hapus</a></td>
                                </tr>
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
                                        <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
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
                    <div class="mx-auto text-center">
                        <a href="clientm.php" class="py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primaryk transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Pemesanan Mobil</a>
                        <a href="clientk.php" class="py-2 px-6 mx-auto mb-10 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Pemesanan Kontruksi</a>
                        <a href="" class="py-2 px-6 mx-auto mb-10 font-semibold text-white bg-dark border-2 border-dark transition duration-300 hover:shadow-2xl hover:opacity-80 rounded-3xl ease-in-out">Daftar Client</a>
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