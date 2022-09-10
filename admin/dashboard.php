<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - IMC</title>
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
                        <li class="group"><a href="" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Dashboard</a></li>
                        <li class="group"><a href="clientdm.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Client</a></li>
                        <li class="group"><a href="user.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">User</a></li>
                        <li class="group"><a href="#" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Setting</a></li>
                        <li class="group"><a href="#" class="text-base font-semibold text-white rounded-xl py-2 px-10 mx-2 flex bg-red-500 hover:bg-red-700 group-hover:text-gray-200 transition duration-300 ease-in-out">Keluar</a></li>
                    </ul>
                </nav>
                </div>
            </div>
         </div>
    </header>


  <!-- Konten Dashboard -->
  <content class="pt-3.5">

    <!-- Welcome Section -->
    <section id="welcome" class="pt-28 pb-1">
      <div class="container">
        <div class="w-full px-4 bg-slate-200 border-l-2 border-slate-400">
          <div class="px-5 py-3">
            <p class="text-sm">Admin > <span class="font-bold">Dashboard</span></p>
            <h2 class="text-lg md:text-xl font-semibold" >Selamat Datang, <span class="font-bold">Jhon Doe</span> 👋</h2><br>
            <p class="text-base">Anda telah login pada <span class="block"><?php echo date('l, d-F-Y g:i a'); ?></span></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Quotes Alert Section -->
    <section id="quotes" class="pt-3 pb-1">
      <div class="container">
        <div class="w-full">
          <div id="alert-1" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">Mereka <span class="text-orange-500">Kerja, Kami</span> Libur. Mereka <span class="text-orange-500">Libur, Kami</span> Liburan</div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Quotes Alert Section -->

    <!-- Counter Client Section -->
    <section id="count-client" class="pb-2">
      <div class="container">
        <div class="w-full px-4 bg-slate-200 pt-5 pb-10 border-l-2 border-slate-400">
          <h4 class="text-2xl font-bold text-center">Client Side</h4>
          <hr class="w-16 mx-auto mt-2 mb-6 border-b-4 rounded-full border-primary">
          <div class="flex flex-warp">
            <!-- Client -->
            <div class="text-center mt-4 mb-4 md:w-1/3">
              <h2 class="font-semibold text-xl block mb-2">Client</h2>
              <p class="text-base">74</p>
            </div>
            <!-- In Progress Client -->
            <div class="text-center mt-4 mb-4 md:w-1/3">
              <h4 class="font-semibold text-lg block mb-2">In Progress</h4>
              <p class="text-base">50</p>
            </div>
            <!-- Finish Client -->
            <div class="text-center mt-4 mb-4 md:w-1/3 block">
              <h4 class="font-semibold text-lg block mb-2">Finish</h4>
              <p class="text-base">20</p>
            </div>
          </div>
          <!-- Pending Client -->
          <div class="text-center mx-auto mt-4 mb-4 w-full">
              <h4 class="font-semibold text-lg block mb-2">Pending</h4>
              <p class="text-base block mb-5">4</p>
              <a href="clientdm.php" class="py-2 px-6 bg-primary border-2 border-primary transition duration-300 hover:shadow-lg hover:opacity-80 rounded-3xl ease-in-out">Cek Client</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Admin Section -->
    <section id="count-client" class="pt-2 pb-2">
      <div class="container">
        <div class="w-full px-4 bg-slate-200 pt-5 pb-10 border-l-2 border-slate-400">
          <h4 class="text-2xl font-bold text-center">Admin</h4>
          <hr class="w-16 mx-auto mt-2 mb-6 border-b-4 rounded-full border-primary">
          <div class="flex flex-warp">
            <!-- User -->
            <div class="text-center mt-4 mb-4 md:w-1/2">
              <h2 class="font-semibold text-xl block mb-2">User</h2>
              <p class="text-base">20</p>
            </div>
            <!-- Roles -->
            <div class="text-center mt-4 mb-4 md:w-1/2">
              <h4 class="font-semibold text-lg block mb-2">Roles</h4>
              <p class="text-base">50</p>
            </div>
        </div>
        <!-- Button Admin -->
        <div class="text-center mx-auto mt-4 mb-4 w-full">
              <a class="py-2 px-6 bg-primary border-2 border-primary transition duration-300 hover:shadow-lg hover:opacity-80 rounded-3xl ease-in-out" href="">Halaman Admin</a>
          </div>
      </div>
    </section>
    <!-- End Admin Section -->
  </content>

  <!-- Footer Dashboard -->
  <footer class="3 5">
    <div class="container">
      <div class="w-full px-4 text-center">
        <h5 class="text-sm">&copy <?php echo date('Y'); ?> PT. Inti Maju Cemerlang. All Right Reserved</h5>
      </div>
    </div>
  </footer>
  
  <script src="../dist/js/navbar.js"></script>
</body>
</html>