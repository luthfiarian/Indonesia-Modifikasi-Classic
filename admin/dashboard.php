<?php include 'database/connectiondb.php'; include 'database/important.php'; include 'database/session_false.php' ?>
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
                        <li class="group"><a href="setting.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Setting</a></li>
                        <li class="group"><a href="database/logout.php" class="text-base font-semibold text-white rounded-xl py-2 px-10 mx-2 flex bg-red-500 hover:bg-red-700 group-hover:text-gray-200 transition duration-300 ease-in-out">Keluar</a></li>
                    </ul>
                </nav>
                </div>
            </div>
         </div>
    </header>

  <?php 
    $id = $_SESSION["id"];
    $q_user = "SELECT * FROM user WHERE id_admin='$id'";
    $r_user = mysqli_query($koneksi, $q_user);
    $user = mysqli_fetch_assoc($r_user);
  ?>
  <!-- Konten Dashboard -->
  <content class="pt-3.5">

    <!-- Welcome Section -->
    <section id="welcome" class="pt-28 pb-1">
      <div class="container">
        <div class="w-full px-4 bg-slate-200 border-l-2 border-slate-400">
          <div class="px-5 py-3">
            <p class="text-sm">Admin > <span class="font-bold">Dashboard</span></p>
            <h2 class="text-lg md:text-xl font-semibold" >Selamat Datang, <span class="font-bold"><?php echo $_SESSION['nama'] ?></span> 👋</h2><br>
            <p class="text-base">Anda telah login pada <span class="block"><?php echo $user['log_user']; ?></span></p>
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
          <table class="table table-auto mx-auto">
            <?php 
              // Menghitung Jumlah Admin dan Client
              $clientmobil = mysqli_num_rows($result_cm);
              $clientkontruksi = mysqli_num_rows($result_ck);
              $admincount = mysqli_num_rows($result_user);

              // Count Tipe Client In Progress
              // Mobil
              $br_mobil = "SELECT * FROM client_mobil WHERE cm_tipe LIKE '%Baru%'";
              $result_br_mobil = mysqli_query($koneksi, $br_mobil);
              $baru_mobil = mysqli_num_rows($result_br_mobil);
              
              $pg_mobil = "SELECT * FROM client_mobil WHERE cm_tipe LIKE '%Pengerjaan%'";
              $result_pg_mobil = mysqli_query($koneksi, $pg_mobil);
              $pengerjaan_mobil = mysqli_num_rows($result_pg_mobil);

              // Kontruksi
              $br_kontruksi = "SELECT * FROM client_kontruksi WHERE ck_tipe LIKE '%Baru%'";
              $result_br_kontruksi = mysqli_query($koneksi, $br_kontruksi);
              $baru_kontruksi = mysqli_num_rows($result_br_kontruksi);
              
              $pg_kontruksi = "SELECT * FROM client_kontruksi WHERE ck_tipe LIKE '%Pengerjaan%'";
              $result_pg_kontruksi = mysqli_query($koneksi, $pg_kontruksi);
              $pengerjaan_kontruksi = mysqli_num_rows($result_pg_kontruksi);
              
              $inprogress = $baru_mobil + $pengerjaan_mobil + $baru_kontruksi + $pengerjaan_kontruksi;
              
              //Finish
              //Mobil
              $fn_mobil = "SELECT * FROM client_mobil WHERE cm_progress LIKE '%100%'";
              $result_fn_mobil = mysqli_query($koneksi, $fn_mobil);
              $finish_mobil = mysqli_num_rows($result_fn_mobil);

              // Kontruksi
              $fn_kontruksi = "SELECT * FROM client_kontruksi WHERE ck_progress LIKE '%100%'";
              $result_fn_kontruksi = mysqli_query($koneksi, $fn_kontruksi);
              $finish_kontruksi = mysqli_num_rows($result_fn_kontruksi);

              $finish = $finish_mobil + $finish_kontruksi;

              //Count Tipe Pending
              // Mobil
              $pd_mobil = "SELECT * FROM client_mobil WHERE cm_tipe LIKE '%Pending%'";
              $result_pending_mobil = mysqli_query($koneksi, $pd_mobil);
              $pending_mobil = mysqli_num_rows($result_pending_mobil);
              
              $pd_kontruksi = "SELECT * FROM client_kontruksi WHERE ck_tipe LIKE '%Pending%'";
              $result_pd_kontruksi = mysqli_query($koneksi, $pd_kontruksi);
              $pending_kontruksi = mysqli_num_rows($result_pd_kontruksi);

              $pending = $pending_mobil + $pending_kontruksi;

            ?>
            <tr>
              <!-- Client -->
              <td class="text-center px-5 md:px-10">
                <h2 class="font-semibold text-xl block mb-2">Client</h2>
                <p class="text-base"><?php echo $client = $clientmobil + $clientkontruksi; ?></p>
              </td>
              <!-- In Progress -->
              <td class="text-center px-5 md:px-10">
                <h4 class="font-semibold text-lg block mb-2">In Progress</h4>
                <p class="text-base"><?php echo $inprogress; ?></p>
              </td>
              <!-- Finish -->
              <td class="text-center px-5 md:px-10">
                <h4 class="font-semibold text-lg block mb-2">Finish</h4>
                <p class="text-base"><?php echo $finish; ?></p>
              </td>
            </tr>
            <tr>
              <!-- Pending & Button -->
              <td colspan="3" class="text-center">
                <h4 class="font-semibold text-lg block mb-2">Pending</h4>
                <p class="text-base block mb-5"><?php echo $pending; ?></p>
                <a href="clientdm.php" class="py-2 px-6 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-lg hover:opacity-80 rounded-3xl ease-in-out">Cek Client</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </section>

    <!-- Admin Section -->
    <section id="count-client" class="pt-2 pb-2">
      <div class="container">
        <div class="w-full px-4 bg-slate-200 pt-5 pb-10 border-l-2 border-slate-400">
          <h4 class="text-2xl font-bold text-center">Admin</h4>
          <hr class="w-16 mx-auto mt-2 mb-6 border-b-4 rounded-full border-primary">
          <table class="table table-auto mx-auto">
            <tr>
              <!-- User -->
              <td class="text-center px-10">
                <h2 class="font-semibold text-xl block mb-2">User</h2>
                <p class="text-base"><?php echo $admincount; ?></p>
              </td>
              <!-- Roles -->
              <td class="text-center px-10">
                <h2 class="font-semibold text-xl block mb-2">Roles</h2>
                <p class="text-base">2</p>
              </td>
            </tr>
          </table>
          <!-- Button Admin -->
          <div class="text-center mx-auto mt-4 mb-4 w-full">
              <a href="user.php" class="py-2 px-6 font-semibold bg-primary border-2 border-primary transition duration-300 hover:shadow-lg hover:opacity-80 rounded-3xl ease-in-out">Halaman Admin</a>
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