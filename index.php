<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Beranda</title>
    <link rel="shortcut icon" href="dist/img/favicon.ico" type="image/x-icon">

    <!-- Meta -->
    <meta name="description" content="PT. Inti Maju Cemerlang">
    <meta name="keywords" content="IMC Sidoarjo">

    <!-- CSS -->
    <link href="dist/output.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 py-3">
         <div class="container">
            <div class="flex items-center justify-between relative">
                <!-- Logo -->
                <div class="px-4">
                    <a href="#"><img src="dist/img/logo.png" alt="Logo Kami" width="80" title="PT.Inti Maju Cemerlang"></a>
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
                        <li class="group"><a href="#" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Beranda</a></li>
                        <li class="group"><a href="#" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Galeri</a></li>
                        <li class="group"><a href="#" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Tentang Kami</a></li>
                        <li class="group"><a href="#" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Kostumer</a></li>
                        <li class="group"><a href="#" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Kontak</a></li>
                        <li class="group"><a href="#" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Masuk</a></li>
                    </ul>
                </nav>
                </div>
            </div>
         </div>
    </header>
    <content class="pt-3.5">
        <!-- Hero Section -->
        <section id="beranda" class="pt-36">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-4 lg:w-1/2">
                        <h1 class="font-bold text-dark text-2xl md:text-3xl lg:text-5xl">
                            Bergabung Bersama Kami <span class="block">Bangun Impianmu Sekarang</span>
                        </h1>
                        <p class="text-dark font-medium pt-5 mb-10 leading-relaxed">
                            PT. Inti Maju Cemerlang
                        </p>
                    </div>
                    <div class="w-full self-end px-4 lg:w-1/2">
                        <div class="mt-20 relative lg:mt-0 lg:right-0">
                            <img src="dist/img/car1.png" alt="Jeep IMC" title="Jeep Buatan Kami" class="max-w-full mx-auto">
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
    </content>


    <!-- JS -->
    <script src="dist/js/navbar.js" type="text/javascript"></script>
</body>
</html>