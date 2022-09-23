<?php
include 'database/connectiondb.php';
include 'database/important.php';
include 'database/session_false.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Version</title>
  <link rel="shortcut icon" href="../dist/img/favicon-pt.ico" type="image/x-icon">

  <link rel="stylesheet" href="../dist/output.css">
  <script src="https://kit.fontawesome.com/111f4c5763.js" crossorigin="anonymous"></script>

  <style>
    .icon {
      color: #0ea5e9;
    }

    .icon:hover {
      color: #fbbf24;
    }

    @media screen and (min-width: 640px) {
      .icon {
        font-size: 20px;
      }
    }

    @media screen and (min-width: 1024px) {
      .icon {
        font-size: 24px;
      }
    }
    
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

<body class="bg-gray-300">
  <header class="version py-28"></header>
  <content class="pt-3.5 rounded-t-2xl">
    <section class="w-full py-4 -mt-6 bg-gray-300 rounded-t-full"></section>
    <section class="-mt-24">
      <div class="container">
        <div class="w-full mx-auto">
          <div class="w-5/6 md:w-1/2 py-10 mx-auto border-2 shadow-2xl bg-slate-100 border-white rounded-3xl">
            <h1 class="text-lg font-semibold text-center">Hello👋, this is system</h1>
            <h2 class="text-2xl font-semibold text-center">Version 1.0</h1>
              <hr class="border-2 border-b-slate-600 w-10 my-3 mx-auto rounded-full">
              <p class="font-semibold text-sm text-center uppercase">PT Inti Maju Cemerlang</p>
              
          </div>
        </div>
      </div>
    </section>

    <section class="pt-5 pb-2">
      <div class="container">
        <div class="w-full px-4 text-center">
          <a href="https://github.com/luthfionumsida/Indonesia-Modifikasi-Classic">
            <button class="py-4 px-8 rounded-full bg-teal-500  text-white font-bold transition duration-300 ease-in-out hover:shadow-lg hover:bg-opacity-95 hover:text-teal-50 hover:bg-opacity-90">See Documention 👀</button>
          </a>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="w-full pt-5">
          <h1 class="text-center text-lg md:text-3xl font-semibold">This Website <span class="text-blue-300">🌐</span> Use Technologies</h1>
          <div class="flex items-center pt-10">
            <table class="table table-auto mx-auto">
              <tr>
                <td class="px-10 text-2xl font-semibold" style="color: #E34F26;"><svg role="img" class="fill-current w-10 md:w-14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>HTML</title>
                    <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
                  </svg></td>
                <td class="px-10 text-2xl font-semibold" style="color: #1572B6;"><svg role="img" class="fill-current w-10    md:w-14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>CSS</title>
                    <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                  </svg></td>
                <td class="px-10 text-2xl font-semibold" style="color: #777BB4;"><svg role="img" class="fill-current w-10 md:w-14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>PHP</title>
                    <path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z" />
                  </svg></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="w-full pt-10">
          <h1 class="text-center text-xl md:text-3xl font-semibold">Thanks To <span class="text-blue-300">✨</span></h1>
          <div class="flex flex-warp crd-atas justify-center">

            <div class="md:w-1/2 px-4 crd pt-28 pb-2 md:pb-10">
              <div class="w-5/6 md:w-4/6 py-10 mx-auto rounded-3xl bg-slate-100 border-2 boder-gray-600 shadow-xl">
                <img src="../dist/img/bpkiwan.jpg" class="rounded-full mx-auto w-1/2 md:w-2/6 -mt-24 md:-mt-28 border-4 border-dark p-1" alt="Foto Pak Iwan" srcset="">
                <h1 class="text-center text-xs md:text-sm font-semibold uppercase pt-5">MR.</h1>
                <hr class="mx-auto border-2 border-black w-4 mt-2 rounded-full">
                <h2 class="text-center text-lg md:text-2xl font-bold uppercase">IWAN SETIAWAN, S.T.</h2>
                <hr class="mx-auto border-b-2 border-black w-4 mb-2 rounded-full">
                <h3 class="text-center text-lg md:text-lg font-semibold uppercase">The Owner Of The Company</h3>
              </div>
            </div>

            <div class="md:w-1/2 px-4 crd pt-28 pb-10">
              <div class="w-5/6 md:w-4/6 py-10 mx-auto rounded-3xl bg-slate-100 border-2 boder-gray-600 shadow-xl">
                <img src="../dist/img/bpkadi.jpg" class="rounded-full mx-auto w-1/2 md:w-2/6 -mt-24 md:-mt-28 border-4 border-dark p-1" alt="Foto Pak Iwan" srcset="">
                <h1 class="text-center text-xs md:text-sm font-semibold uppercase pt-5">MR.</h1>
                <hr class="mx-auto border-2 border-black w-4 mt-2 rounded-full">
                <h2 class="text-center text-sm md:text-2xl font-bold uppercase">ADINATA SETIAWAN, S.T.</h2>
                <hr class="mx-auto border-b-2 border-black w-4 mb-2 rounded-full">
                <h3 class="text-center text-lg md:text-lg font-semibold uppercase">Project Supervisor</h3>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="w-full pt-10">
          <h1 class="text-center text-lg md:text-3xl font-semibold">Contributor <span class="text-blue-300">💻</span></h1>
          <p class="text-center text-base">Industry Internship 2022 of Unversity Muhammadiyah Sidoarjo</p>
          <div class="w-5/6 md:w-1/3 px-4 pt-28 md:pb-10 pb-5 mx-auto">
            <!-- Luthfi Arian Nugraha -->
            <div class="w-full md:w-5/6 pt-10 mx-auto rounded-2xl bg-slate-100 shadow-xl">
              <img src="../dist/img/luthfi.png" class="w-1/2 rounded-full mx-auto -mt-5 border-2 p-2" alt="Foto Luthfi">
              <p class="text-xs md:text-sm pt-2 font-semibold text-center text-gray-500 pb-4">
                <span class="text-sm md:text-xl font-bold">Luthfi</span> <br> Arian Nugraha <br> - <br> Fullstack <br> Project Leader <br> Students - Freelancer
              </p>
              <div class="z-10 relative mb-10">
                <table class="table table-auto mx-auto">
                  <tr>
                    <td colspan="3" class="text-center">
                      <a href="https://api.whatsapp.com/send?phone=6281615050588&text=Halo%20Luthfi%20👋"><i title="Whatsapp" class="fa-brands fa-whatsapp fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="https://github.com/luthfionumsida"><i title="Github" class="fa-brands fa-github fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                    </td>
                    <td>
                      <a href="mailto:hello@luthfiarian.my.id"><i title="Email" class="fa-solid fa-envelope fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                    </td>
                    <td>
                      <a href="https://luthfiarian.my.id"><i title="Website" class="fa-brands fa-safari fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="-z-10">
                <svg id="wave" class="rounded-b-2xl -bottom-0 -z-20 -mt-10" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 350" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                      <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                      <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,70L80,58.3C160,47,320,23,480,64.2C640,105,800,210,960,227.5C1120,245,1280,175,1440,175C1600,175,1760,245,1920,280C2080,315,2240,315,2400,274.2C2560,233,2720,152,2880,99.2C3040,47,3200,23,3360,35C3520,47,3680,93,3840,145.8C4000,198,4160,257,4320,250.8C4480,245,4640,175,4800,122.5C4960,70,5120,35,5280,46.7C5440,58,5600,117,5760,122.5C5920,128,6080,82,6240,99.2C6400,117,6560,198,6720,192.5C6880,187,7040,93,7200,81.7C7360,70,7520,140,7680,169.2C7840,198,8000,187,8160,163.3C8320,140,8480,105,8640,128.3C8800,152,8960,233,9120,256.7C9280,280,9440,245,9600,221.7C9760,198,9920,187,10080,163.3C10240,140,10400,105,10560,75.8C10720,47,10880,23,11040,58.3C11200,93,11360,187,11440,233.3L11520,280L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                  <defs>
                    <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                      <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                      <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                    </linearGradient>
                  </defs>
                  <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,175L80,180.8C160,187,320,198,480,175C640,152,800,93,960,58.3C1120,23,1280,12,1440,58.3C1600,105,1760,210,1920,215.8C2080,222,2240,128,2400,105C2560,82,2720,128,2880,128.3C3040,128,3200,82,3360,87.5C3520,93,3680,152,3840,163.3C4000,175,4160,140,4320,134.2C4480,128,4640,152,4800,163.3C4960,175,5120,175,5280,151.7C5440,128,5600,82,5760,52.5C5920,23,6080,12,6240,29.2C6400,47,6560,93,6720,99.2C6880,105,7040,70,7200,75.8C7360,82,7520,128,7680,151.7C7840,175,8000,175,8160,169.2C8320,163,8480,152,8640,163.3C8800,175,8960,210,9120,192.5C9280,175,9440,105,9600,105C9760,105,9920,175,10080,186.7C10240,198,10400,152,10560,157.5C10720,163,10880,222,11040,245C11200,268,11360,257,11440,250.8L11520,245L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="w-full px-4 flex flex-warp crd-atas justify-center">
            <!-- Yusuf Raharja -->
            <div class="crd lg:w-1/3 px-4 pt-5 md:pt-28 md:pb-10 pb-5 mx-auto">
              <div class="w-full md:w-5/6 pt-10 mx-auto rounded-2xl bg-slate-100 shadow-xl">
                <img src="../dist/img/yusuf.png" class="w-1/2 rounded-full mx-auto -mt-5 border-2 p-2" alt="Foto Luthfi">
                <p class="text-xs md:text-sm pt-2 font-semibold text-center text-gray-500 pb-4">
                  <span class="text-sm md:text-xl font-bold">Yusuf</span><br> Raharja <br> - <br> Frontend <br> Member of Project <br> Students
                </p>
                <div class="z-10 relative mb-10">
                  <table class="table table-auto mx-auto">
                    <tr>
                      <td>
                        <a href="https://api.whatsapp.com/send?phone=6281803555462&text=Halo%20Yusuf%20😎"><i title="Whatsapp" class="fa-brands fa-whatsapp fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                      <td>
                        <a href="mailto:yusufsynyster253@gmail.com"><i title="Email" class="fa-solid fa-envelope fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                      <td>
                        <a href="https://instagram.com/yusufraharja_"><i title="Instagram" class="fa-brands fa-instagram fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="-z-10">
                  <svg id="wave" class="rounded-b-2xl -bottom-0 -z-20 -mt-10" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 350" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,70L80,58.3C160,47,320,23,480,64.2C640,105,800,210,960,227.5C1120,245,1280,175,1440,175C1600,175,1760,245,1920,280C2080,315,2240,315,2400,274.2C2560,233,2720,152,2880,99.2C3040,47,3200,23,3360,35C3520,47,3680,93,3840,145.8C4000,198,4160,257,4320,250.8C4480,245,4640,175,4800,122.5C4960,70,5120,35,5280,46.7C5440,58,5600,117,5760,122.5C5920,128,6080,82,6240,99.2C6400,117,6560,198,6720,192.5C6880,187,7040,93,7200,81.7C7360,70,7520,140,7680,169.2C7840,198,8000,187,8160,163.3C8320,140,8480,105,8640,128.3C8800,152,8960,233,9120,256.7C9280,280,9440,245,9600,221.7C9760,198,9920,187,10080,163.3C10240,140,10400,105,10560,75.8C10720,47,10880,23,11040,58.3C11200,93,11360,187,11440,233.3L11520,280L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                    <defs>
                      <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,175L80,180.8C160,187,320,198,480,175C640,152,800,93,960,58.3C1120,23,1280,12,1440,58.3C1600,105,1760,210,1920,215.8C2080,222,2240,128,2400,105C2560,82,2720,128,2880,128.3C3040,128,3200,82,3360,87.5C3520,93,3680,152,3840,163.3C4000,175,4160,140,4320,134.2C4480,128,4640,152,4800,163.3C4960,175,5120,175,5280,151.7C5440,128,5600,82,5760,52.5C5920,23,6080,12,6240,29.2C6400,47,6560,93,6720,99.2C6880,105,7040,70,7200,75.8C7360,82,7520,128,7680,151.7C7840,175,8000,175,8160,169.2C8320,163,8480,152,8640,163.3C8800,175,8960,210,9120,192.5C9280,175,9440,105,9600,105C9760,105,9920,175,10080,186.7C10240,198,10400,152,10560,157.5C10720,163,10880,222,11040,245C11200,268,11360,257,11440,250.8L11520,245L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                  </svg>
                </div>
              </div>
            </div>
            <!-- Reyhan Adi Saputra -->
            <div class="crd lg:w-1/3 px-4 pt-5 md:pt-28 md:pb-10 pb-5 mx-auto">
              <div class="w-full md:w-5/6 pt-10 mx-auto rounded-2xl bg-slate-100 shadow-xl">
                <img src="../dist/img/reyhan.png" class="w-1/2 rounded-full mx-auto -mt-5 border-2 p-2" alt="Foto Luthfi">
                <p class="text-xs md:text-sm pt-2 font-semibold text-center text-gray-500 pb-4">
                  <span class="text-sm md:text-xl font-bold">Reyhan</span><br> Adi Saputra <br> - <br> Frontend <br> Member of Project <br> Students - Freelancer
                </p>
                <div class="z-10 relative mb-10">
                  <table class="table table-auto mx-auto">
                    <tr>
                      <td>
                        <a href="https://api.whatsapp.com/send?phone=6285850019864&text=Halo%20Reyhan%20😎"><i title="Whatsapp" class="fa-brands fa-whatsapp fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                      <td>
                        <a href="mailto:adireyhansaputra@gmail.com"><i title="Email" class="fa-solid fa-envelope fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                      <td>
                        <a href="https://instagram.com/reyhan_csgo"><i title="Instagram" class="fa-brands fa-instagram fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="-z-10">
                  <svg id="wave" class="rounded-b-2xl -bottom-0 -z-20 -mt-10" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 350" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,70L80,58.3C160,47,320,23,480,64.2C640,105,800,210,960,227.5C1120,245,1280,175,1440,175C1600,175,1760,245,1920,280C2080,315,2240,315,2400,274.2C2560,233,2720,152,2880,99.2C3040,47,3200,23,3360,35C3520,47,3680,93,3840,145.8C4000,198,4160,257,4320,250.8C4480,245,4640,175,4800,122.5C4960,70,5120,35,5280,46.7C5440,58,5600,117,5760,122.5C5920,128,6080,82,6240,99.2C6400,117,6560,198,6720,192.5C6880,187,7040,93,7200,81.7C7360,70,7520,140,7680,169.2C7840,198,8000,187,8160,163.3C8320,140,8480,105,8640,128.3C8800,152,8960,233,9120,256.7C9280,280,9440,245,9600,221.7C9760,198,9920,187,10080,163.3C10240,140,10400,105,10560,75.8C10720,47,10880,23,11040,58.3C11200,93,11360,187,11440,233.3L11520,280L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                    <defs>
                      <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,175L80,180.8C160,187,320,198,480,175C640,152,800,93,960,58.3C1120,23,1280,12,1440,58.3C1600,105,1760,210,1920,215.8C2080,222,2240,128,2400,105C2560,82,2720,128,2880,128.3C3040,128,3200,82,3360,87.5C3520,93,3680,152,3840,163.3C4000,175,4160,140,4320,134.2C4480,128,4640,152,4800,163.3C4960,175,5120,175,5280,151.7C5440,128,5600,82,5760,52.5C5920,23,6080,12,6240,29.2C6400,47,6560,93,6720,99.2C6880,105,7040,70,7200,75.8C7360,82,7520,128,7680,151.7C7840,175,8000,175,8160,169.2C8320,163,8480,152,8640,163.3C8800,175,8960,210,9120,192.5C9280,175,9440,105,9600,105C9760,105,9920,175,10080,186.7C10240,198,10400,152,10560,157.5C10720,163,10880,222,11040,245C11200,268,11360,257,11440,250.8L11520,245L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                  </svg>
                </div>
              </div>
            </div>
            <!-- Davito Rasendriya Rizqullah Putra -->
            <div class="crd lg:w-1/3 px-4 pt-5 md:pt-28 md:pb-10 pb-5 mx-auto">
              <div class="w-full md:w-5/6 pt-10 mx-auto rounded-2xl bg-slate-100 shadow-xl">
                <img src="../dist/img/davito.png" class="w-1/2 rounded-full mx-auto -mt-5 border-2 p-2" alt="Foto Luthfi">
                <p class="text-xs md:text-sm pt-2 font-semibold text-center text-gray-500 pb-4">
                  <span class="text-sm md:text-xl font-bold">Davito</span><br> Rasendriya Rizqullah P <br> - <br> Wordpress <br> Member of Project <br> Students
                </p>
                <div class="z-10 relative mb-10">
                  <table class="table table-auto mx-auto">
                    <tr>
                      <td>
                        <a href="https://api.whatsapp.com/send?phone=6282236145424&text=Halo%20Davito%20😎"><i title="Whatsapp" class="fa-brands fa-whatsapp fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                      <td>
                        <a href="mailto:davito0918@gmail.com"><i title="Email" class="fa-solid fa-envelope fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                      <td>
                        <a href="https://instagram.com/davitobiasaaja"><i title="Instagram" class="fa-brands fa-instagram fa-sm border-2 p-4 rounded-full transition duration-300 ease-out hover:bg-slate-500 icon"></i></a>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="-z-10">
                  <svg id="wave" class="rounded-b-2xl -bottom-0 -z-20 -mt-10" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 350" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,70L80,58.3C160,47,320,23,480,64.2C640,105,800,210,960,227.5C1120,245,1280,175,1440,175C1600,175,1760,245,1920,280C2080,315,2240,315,2400,274.2C2560,233,2720,152,2880,99.2C3040,47,3200,23,3360,35C3520,47,3680,93,3840,145.8C4000,198,4160,257,4320,250.8C4480,245,4640,175,4800,122.5C4960,70,5120,35,5280,46.7C5440,58,5600,117,5760,122.5C5920,128,6080,82,6240,99.2C6400,117,6560,198,6720,192.5C6880,187,7040,93,7200,81.7C7360,70,7520,140,7680,169.2C7840,198,8000,187,8160,163.3C8320,140,8480,105,8640,128.3C8800,152,8960,233,9120,256.7C9280,280,9440,245,9600,221.7C9760,198,9920,187,10080,163.3C10240,140,10400,105,10560,75.8C10720,47,10880,23,11040,58.3C11200,93,11360,187,11440,233.3L11520,280L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                    <defs>
                      <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop>
                      </linearGradient>
                    </defs>
                    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,175L80,180.8C160,187,320,198,480,175C640,152,800,93,960,58.3C1120,23,1280,12,1440,58.3C1600,105,1760,210,1920,215.8C2080,222,2240,128,2400,105C2560,82,2720,128,2880,128.3C3040,128,3200,82,3360,87.5C3520,93,3680,152,3840,163.3C4000,175,4160,140,4320,134.2C4480,128,4640,152,4800,163.3C4960,175,5120,175,5280,151.7C5440,128,5600,82,5760,52.5C5920,23,6080,12,6240,29.2C6400,47,6560,93,6720,99.2C6880,105,7040,70,7200,75.8C7360,82,7520,128,7680,151.7C7840,175,8000,175,8160,169.2C8320,163,8480,152,8640,163.3C8800,175,8960,210,9120,192.5C9280,175,9440,105,9600,105C9760,105,9920,175,10080,186.7C10240,198,10400,152,10560,157.5C10720,163,10880,222,11040,245C11200,268,11360,257,11440,250.8L11520,245L11520,350L11440,350C11360,350,11200,350,11040,350C10880,350,10720,350,10560,350C10400,350,10240,350,10080,350C9920,350,9760,350,9600,350C9440,350,9280,350,9120,350C8960,350,8800,350,8640,350C8480,350,8320,350,8160,350C8000,350,7840,350,7680,350C7520,350,7360,350,7200,350C7040,350,6880,350,6720,350C6560,350,6400,350,6240,350C6080,350,5920,350,5760,350C5600,350,5440,350,5280,350C5120,350,4960,350,4800,350C4640,350,4480,350,4320,350C4160,350,4000,350,3840,350C3680,350,3520,350,3360,350C3200,350,3040,350,2880,350C2720,350,2560,350,2400,350C2240,350,2080,350,1920,350C1760,350,1600,350,1440,350C1280,350,1120,350,960,350C800,350,640,350,480,350C320,350,160,350,80,350L0,350Z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-36">
      <div class="container">
        <div class="w-full px-4 text-center">
          <a href="setting.php">
            <button class="py-4 px-8 rounded-full bg-primary text-white font-bold transition duration-300 ease-in-out hover:shadow-lg hover:bg-opacity-95 hover:text-teal-50">Back To Setting</button>
          </a>
        </div>
      </div>
    </section>
  </content>

  <footer class="pt-3.5">
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
      <style>
        .path-0 {
          animation: pathAnim-0 4s;
          animation-timing-function: linear;
          animation-iteration-count: infinite;
        }

        @keyframes pathAnim-0 {
          0% {
            d: path("M 0,400 C 0,400 0,200 0,200 C 200.13333333333333,225.33333333333334 400.26666666666665,250.66666666666669 557,254 C 713.7333333333333,257.3333333333333 827.0666666666666,238.66666666666666 967,226 C 1106.9333333333334,213.33333333333334 1273.4666666666667,206.66666666666669 1440,200 C 1440,200 1440,400 1440,400 Z");
          }

          25% {
            d: path("M 0,400 C 0,400 0,200 0,200 C 114.66666666666669,225.73333333333335 229.33333333333337,251.46666666666667 412,236 C 594.6666666666666,220.53333333333333 845.3333333333333,163.86666666666667 1028,151 C 1210.6666666666667,138.13333333333333 1325.3333333333335,169.06666666666666 1440,200 C 1440,200 1440,400 1440,400 Z");
          }

          50% {
            d: path("M 0,400 C 0,400 0,200 0,200 C 204,179.2 408,158.4 555,167 C 702,175.6 792,213.6 930,224 C 1068,234.4 1254,217.2 1440,200 C 1440,200 1440,400 1440,400 Z");
          }

          75% {
            d: path("M 0,400 C 0,400 0,200 0,200 C 176.53333333333336,234.26666666666665 353.0666666666667,268.5333333333333 500,247 C 646.9333333333333,225.46666666666667 764.2666666666667,148.13333333333333 916,131 C 1067.7333333333333,113.86666666666666 1253.8666666666668,156.93333333333334 1440,200 C 1440,200 1440,400 1440,400 Z");
          }

          100% {
            d: path("M 0,400 C 0,400 0,200 0,200 C 200.13333333333333,225.33333333333334 400.26666666666665,250.66666666666669 557,254 C 713.7333333333333,257.3333333333333 827.0666666666666,238.66666666666666 967,226 C 1106.9333333333334,213.33333333333334 1273.4666666666667,206.66666666666669 1440,200 C 1440,200 1440,400 1440,400 Z");
          }
        }
      </style>
      <defs>
        <linearGradient id="gradient" x1="18%" y1="88%" x2="82%" y2="12%">
          <stop offset="5%" stop-color="#002bdc"></stop>
          <stop offset="95%" stop-color="#32ded4"></stop>
        </linearGradient>
      </defs>
      <path d="M 0,400 C 0,400 0,200 0,200 C 200.13333333333333,225.33333333333334 400.26666666666665,250.66666666666669 557,254 C 713.7333333333333,257.3333333333333 827.0666666666666,238.66666666666666 967,226 C 1106.9333333333334,213.33333333333334 1273.4666666666667,206.66666666666669 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    </svg>
    <div class="container bg-opacity-0 -mt-8">
      <div class="w-full">
        <h2 class="text-xs md:text-base font-semibold text-center text-white">Made With <span class="text-rose-500">❤</span> By Us</h2>
      </div>
    </div>
  </footer>
</body>

</html>