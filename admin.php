<?php
session_start();
require 'function2.php';
if (!isset($_SESSION{
"login"})) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Silkscreen&display=swap" rel="stylesheet" />
    <link rel="icon" href="img/istana.png" type="image/png">
    <script>
        tailwind.config = {

            theme: {
                extend: {
                    spacing: {
                        144: "40rem",
                        100: "35rem",
                        98: "28rem",
                    },
                    colors: {
                        'hejo': '#0A6847',
                    },
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
        body::-webkit-scrollbar {
            display: none;
      }
      html {
            scroll-behavior: smooth;
            font-family: "Poppins";
        }
      .transition-transform {
        transition: transform 0.5s ease-in-out;
      }
      .slide {
        min-width: 100%;
        transition: opacity 0.5s ease-in-out;
      }
      .hidden-slide {
        opacity: 0;
      }
      .visible-slide {
        opacity: 1;
      }
      .indicator {
        width: 30px;
        height: 5px;
        background-color: rgba(189, 195, 199);
        display: inline-block;
        margin: 0 3px;
        transition: background-color 0.3s ease;
      }
      .active-indicator {
        background-color: rgba(108, 122, 137);
      }
      .arrow-btn {
        background-color: rgba(255,255,255, 0.5);
        color: white;
        font-size: 24px;
        border: none;
        border-radius: 50%;
        padding: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
    </style>
</head>

<body class="h-full ">
    <div class="min-h-full">
        <nav class="bg-[#000000]" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 md:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center justify-between">
                        <div class="flex text-slate-300">
                            ABI PROPERTY
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="#home" class=" text-gray-300 hover:bg-gray-700 hover:text-white  rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                                <a href="#apartemen" class="text-gray-300 hover:bg-gray-700 hover:text-white  rounded-md px-3 py-2 text-sm font-medium">Apartemen</a>
                                <a href="logout.php" class="text-gray-300 hover:bg-gray-700 hover:text-white  rounded-md px-3 py-2 text-sm font-medium">Logout</a>
                                <a href="adduser2.php" class="text-gray-300 hover:bg-gray-700 hover:text-white  rounded-md px-3 py-2 text-sm font-medium">Add apartemen</a>

                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 md:px-3">
                    <a href="#home" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
                    <a href="#apartemen" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">apartemen</a>
                    <a href="logout.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Logout</a>
                    <a href="adduser2.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Add apartemen</a>


                </div>
            </div>
        </nav>
        <main class="min-h-screen">
            <div class="lg:h-screen" id="home">
                <div class="mx-auto max-w-7xl py-6 md:px-6 lg:px-8 text-center">
                    <p>Welcome to the website...</p>
                    <div class="text-5xl pt-2">ABI <span class="text-[#E36414]">PROPERTY</span></div>
                </div>
                <div class="flex flex-col-reverse lg:flex-row px-4 lg:px-36 pt-8 lg:mt-8">
                    <div class="flex-1 mb-8 lg:mb-0 lg:order-1 text-center sm:text-center md:text-center lg:text-left ">
                        <p><span class="font-bold">Temukan kemewahan hidup di apartemen bintang 5 bersama Abi property</span>, agen properti terpercaya yang siap membantu Anda
                            menemukan hunian impian di Bandung! Kami menawarkan apartemen premium seperti <span class="text-[#0A6847] font-bold">Landmark Dago</span> dan
                            <span class="text-[#FF6500] font-bold">Beverly Dago</span>, dengan fasilitas lengkap dan modern. Terletak di lokasi emas Dago, apartemen-apartemen ini
                            menawarkan akses mudah ke pusat kota dan berbagai fasilitas hiburan, perbelanjaan, serta pendidikan. Dengan layanan
                            profesional dan ramah, Abi memastikan proses pencarian dan penyewaan berjalan lancar dan efisien.
                            Hubungi Abi sekarang dan rasakan pengalaman hidup mewah yang sesungguhnya di <span class="text-[#0A6847] font-bold">Landmark Dago</span> dan <span class="text-[#FF6500] font-bold">Beverly Dago</span>.
                        </p>
                    </div>
                    <div class="flex-1 flex justify-center lg:justify-end mb-8 lg:mb-0 lg:order-2">
                        <img src="img/abi.jpg" alt="Icon" class="w-36 md:w-48 md:w-60 lg:w-72 rounded-full lg:mr-14">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-5 md:ml-32 mt-8 md:mt-0 lg:mt-20">
                    <div class="flex justify-center md:justify-start">
                        <a href="https://wa.me/+6281214762200" class="flex bg-transparent w-48 hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                            <span class="flex items-center pr-1">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </span>
                            Whatsapp here
                        </a>
                    </div>
                    <div class="flex justify-center md:justify-start">
                        <a href="https://www.facebook.com/muhammad.aljabbier" class="flex bg-transparent w-48 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            <span class="flex items-center pr-1">
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                    <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                </svg>
                            </span>
                            Facebook here
                        </a>
                    </div>
                    <div class="flex justify-center md:justify-start">
                        <a href="https://www.instagram.com/masroniabirosyidi" class="flex bg-transparent w-48 hover:bg-pink-500 text-pink-700 font-semibold hover:text-white py-2 px-4 border border-pink-500 hover:border-transparent rounded">
                            <span class="flex items-center pr-1">
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.9 0-184.9zm-48.2 224c-7.8 19.6-22.9 34.7-42.5 42.5-29.4 11.7-99.2 9-132.7 9s-103.4 2.6-132.7-9c-19.6-7.8-34.7-22.9-42.5-42.5-11.7-29.4-9-99.2-9-132.7s-2.6-103.4 9-132.7c7.8-19.6 22.9-34.7 42.5-42.5 29.4-11.7 99.2-9 132.7-9s103.4-2.6 132.7 9c19.6 7.8 34.7 22.9 42.5 42.5 11.7 29.4 9 99.2 9 132.7s2.7 103.4-9 132.7z" />
                                </svg>
                            </span>
                            Instagram here
                        </a>
                    </div>
                    <div class="flex justify-center md:justify-start">
                        <a href="mailto:aveave1306@gmail.com" class="flex bg-transparent w-48 hover:bg-orange-500 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded ">
                            <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]: flex justify-center items-center pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 488 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                </svg>
                            </span>
                            Gmail here
                        </a>
                    </div>
                </div>
            </div>
            <?php
            $test = mysqli_query($conn, "SELECT * FROM web");
            foreach ($test as $tes) : ?>
                <div id=apartemen>
                    <div class="min-h-screen">
                        <div class="pt-10">
                            <div class="relative w-full h-64 overflow-hidden md:h-100" id="main-slider">
                                <button class="absolute inset-y-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 cursor-pointer" id="prev-arrow">
                                    &lt;
                                </button>
                                <button class="absolute inset-y-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 cursor-pointer" id="next-arrow">
                                    &gt;
                                </button>
                                <img src="Uploads/<?php echo $tes["img1"] ?>" alt="Image 1" class="main-slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000 ease-in-out">
                                <img src="Uploads/<?php echo $tes["img2"] ?>" alt="Image 2" class="main-slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000 ease-in-out">
                                <img src="Uploads/<?php echo $tes["img3"] ?>" alt="Image 3" class="main-slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000 ease-in-out">
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row px-4 lg:px-36 py-8 gap-8 bg-[#153448] text-white">
                            <div class="flex-1 text-5xl flex justify-center items-center uppercase  lg:justify-start"><?php echo $tes["title"] ?></div>
                            <div class="flex-1 text-center sm:text-center md:text-center lg:text-left">
                                <?php echo $tes["des_apartemen"] ?>
                            </div>
                        </div>

                        <span class="text-5xl flex justify-center items-center pt-20 pb-10">Fasilitas</span>
                        <div class="flex flex-col lg:flex-row p-4 gap-4">
                            <div class="flex-1">
                                <div class="grid grid-cols-2 gap-1">
                                    <img src="Uploads/<?php echo $tes["img4"] ?>" alt="" class="w-full p-0.5">
                                    <img src="Uploads/<?php echo $tes["img5"] ?>" alt="" class="w-full p-0.5">
                                    <img src="Uploads/<?php echo $tes["img6"] ?>" alt="" class="w-full p-0.5">
                                    <img src="Uploads/<?php echo $tes["img7"] ?>" alt="" class="w-full p-0.5">
                                    <img src="Uploads/<?php echo $tes["img8"] ?>" alt="" class="w-full p-0.5">
                                    <img src="Uploads/<?php echo $tes["img9"] ?>" alt="" class="w-full p-0.5">
                                </div>
                            </div>
                            <div class="flex-1 bg-[#153448] text-white p-4 h-screen items-center lg:my-auto ">
                                <p class="text-5xl flex justify-center items-center py-10">Deskripsi</p>
                                <p class="p-4"><?php echo $tes["des_fasilitas"] ?> </p>
                            </div>
                        </div>

                        <span class="text-5xl flex justify-center items-center pt-20 pb-5">Tipe unit</span>
                        <div class="flex flex-col lg:flex-row lg:space-x-8 p-4">
                            <!-- Slider 1 -->
                            <div class="w-100  lg:w-1/3 relative mb-8 border-2 border-gray-300 rounded-lg shadow-lg mx-auto">
                                <div id="slider1" class="relative w-full overflow-hidden">
                                    <div id="slides1" class="flex transition-transform space-x-2">
                                        <img src="Uploads/<?php echo $tes["img10"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                        <img src="Uploads/<?php echo $tes["img11"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                        <img src="Uploads/<?php echo $tes["img12"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                    </div>
                                    <button onclick="prevSlide(1)" class="arrow-btn absolute top-1/2 left-2 transform -translate-y-1/2 focus:outline-none">
                                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                        </svg>
                                    </button>
                                    <button onclick="nextSlide(1)" class="arrow-btn absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="indicators1" class="flex justify-center mt-2">
                                </div>
                                <div class="py-4 px-8">
                                    <h2 class="text-xl font-semibold"><?php echo $tes["title_tipe1"] ?></h2>
                                    <p class="text-gray-600"><?php echo $tes["desk_tipe1"] ?> </p>
                                </div>
                            </div>
                            <div class="w-100 lg:w-1/3 relative mb-8 border-2 border-gray-300 rounded-lg shadow-lg mx-auto">
                                <div id="slider2" class="relative w-full overflow-hidden">
                                    <div id="slides2" class="flex transition-transform space-x-2">
                                        <img src="Uploads/<?php echo $tes["img13"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                        <img src="Uploads/<?php echo $tes["img14"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                        <img src="Uploads/<?php echo $tes["img15"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                    </div>
                                    <button onclick="prevSlide(2)" class="arrow-btn absolute top-1/2 left-2 transform -translate-y-1/2 focus:outline-none">
                                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                        </svg>
                                    </button>
                                    <button onclick="nextSlide(2)" class="arrow-btn absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="indicators2" class="flex justify-center mt-2">
                                </div>
                                <div class="py-4 px-8">
                                    <h2 class="text-xl font-semibold"><?php echo $tes["title_tipe2"] ?></h2>
                                    <p class="text-gray-600"><?php echo $tes["desk_tipe2"] ?></p>
                                </div>
                            </div>
                            <div class="w-100 lg:w-1/3 relative mb-8 border-2 border-gray-300 rounded-lg shadow-lg mx-auto">
                                <div id="slider3" class="relative w-full overflow-hidden">
                                    <div id="slides3" class="flex transition-transform space-x-2">
                                        <img src="Uploads/<?php echo $tes["img16"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                        <img src="Uploads/<?php echo $tes["img17"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                        <img src="Uploads/<?php echo $tes["img18"] ?>" alt="" class="slide w-full rounded-t-md h-auto object-cover" />
                                    </div>
                                    <button onclick="prevSlide(3)" class="arrow-btn absolute top-1/2 left-2 transform -translate-y-1/2 focus:outline-none">
                                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                                        </svg>
                                    </button>
                                    <button onclick="nextSlide(3)" class="arrow-btn absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="indicators3" class="flex justify-center mt-2">
                                </div>
                                <div class="py-4 px-8">
                                    <h2 class="text-xl font-semibold"><?php echo $tes["title_tipe3"] ?></h2>
                                    <p class="text-gray-600"><?php echo $tes["desk_tipe3"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 pl-6 pb-16">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <a href="edituser2.php?id=<?php echo $tes['id']; ?>">edit</a>
                    </button>
                    <form action="" method="post">
                        <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2" type="submit" name="submit" value=<?php echo $tes['id']; ?>>delet</button>
                    </form>
                </div>
            <?php endforeach; ?>
                <footer class="bg-gray-900 text-white py-12">
                    <div class="container mx-auto px-6">
                        <div class="mt-8 flex justify-center space-x-6">
                            <a href="https://www.facebook.com/muhammad.aljabbier" class="text-gray-400 hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.23 0H1.77C.79 0 0 .8 0 1.77v20.46C0 23.2.8 24 1.77 24h11.05v-8.29H9.69v-3.22h3.13V9.41c0-3.1 1.89-4.79 4.65-4.79 1.32 0 2.46.1 2.79.14v3.24h-1.92c-1.51 0-1.8.72-1.8 1.77v2.32h3.6l-.47 3.22h-3.13V24h6.13c.97 0 1.77-.8 1.77-1.77V1.77C24 .8 23.2 0 22.23 0" />
                                </svg>
                            </a>
                            <a href="mailto:email@example.com" class="text-gray-400 hover:text-white transition duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.8 2H3.2C2.08 2 1.2 2.88 1.2 4L1.2 20C1.2 21.12 2.08 22 3.2 22H20.8C21.92 22 22.8 21.12 22.8 20V4C22.8 2.88 21.92 2 20.8 2zM20.8 4V6.55L12 12.7L3.2 6.55V4H20.8zM3.2 20V8.62L12 14.74L20.8 8.62V20H3.2z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/masroniabirosyidi" class="text-gray-400 hover:text-white transition duration-300">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.9 0-184.9zm-48.2 224c-7.8 19.6-22.9 34.7-42.5 42.5-29.4 11.7-99.2 9-132.7 9s-103.4 2.6-132.7-9c-19.6-7.8-34.7-22.9-42.5-42.5-11.7-29.4-9-99.2-9-132.7s-2.6-103.4 9-132.7c7.8-19.6 22.9-34.7 42.5-42.5 29.4-11.7 99.2-9 132.7-9s103.4-2.6 132.7 9c19.6 7.8 34.7 22.9 42.5 42.5 11.7 29.4 9 99.2 9 132.7s2.7 103.4-9 132.7z" />
                                </svg>
                            </a>
                            <a href="https://wa.me/+6281214762200" class="text-gray-400 hover:text-white transition duration-300">
                                <span class="[&>svg]:h-6 [&>svg]:w-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                    </svg>
                                </span>
                            </a>
    
                        </div>
                        <div class="mt-8 text-center text-sm text-gray-400">
                            &copy; 2024 Abi Properti. All rights reserved.
                        </div>
                    </div>
                </footer>
            
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let mainCurrentIndex = 0;
            const mainSlides = document.querySelectorAll('#main-slider .main-slide');

            function showMainSlide(index) {
                mainSlides.forEach((slide, i) => {
                    slide.style.opacity = i === index ? '1' : '0';
                });
            }

            function nextMainSlide() {
                mainCurrentIndex = (mainCurrentIndex + 1) % mainSlides.length;
                showMainSlide(mainCurrentIndex);
            }
            setInterval(nextMainSlide, 4000);
        });

        let currentIndex1 = 0;
        let currentIndex2 = 0;
        let currentIndex3 = 0;
        const sliders = {
            slider1: document.getElementById("slides1"),
            slider2: document.getElementById("slides2"),
            slider3: document.getElementById("slides3"),
        };
        const indicators = {
            slider1: document.getElementById("indicators1"),
            slider2: document.getElementById("indicators2"),
            slider3: document.getElementById("indicators3"),
        };

        function updateIndicators(sliderId, currentIndex) {
            indicators[sliderId].innerHTML = "";
            const totalSlides = sliders[sliderId].children.length;
            for (let i = 0; i < totalSlides; i++) {
                const indicator = document.createElement("div");
                indicator.classList.add("indicator");
                if (i === currentIndex) {
                    indicator.classList.add("active-indicator");
                }
                indicators[sliderId].appendChild(indicator);
            }
        }

        function updateSlides(sliderId, currentIndex) {
            const totalSlides = sliders[sliderId].children.length;
            for (let i = 0; i < totalSlides; i++) {
                sliders[sliderId].children[i].classList.add("hidden-slide");
                sliders[sliderId].children[i].classList.remove("visible-slide");
            }
            sliders[sliderId].children[currentIndex].classList.add("visible-slide");
            sliders[sliderId].children[currentIndex].classList.remove(
                "hidden-slide"
            );
            const offset = -currentIndex * 101.6 + "%";
            sliders[sliderId].style.transform = `translateX(${offset})`;
            updateIndicators(sliderId, currentIndex);
        }

        function nextSlide(sliderId) {
            if (sliderId === 1) {
                currentIndex1 = (currentIndex1 + 1) % sliders.slider1.children.length;
                updateSlides("slider1", currentIndex1);
            } else if (sliderId === 2) {
                currentIndex2 = (currentIndex2 + 1) % sliders.slider2.children.length;
                updateSlides("slider2", currentIndex2);
            } else if (sliderId === 3) {
                currentIndex3 = (currentIndex3 + 1) % sliders.slider3.children.length;
                updateSlides("slider3", currentIndex3);
            }
        }

        function prevSlide(sliderId) {
            if (sliderId === 1) {
                currentIndex1 =
                    (currentIndex1 - 1 + sliders.slider1.children.length) %
                    sliders.slider1.children.length;
                updateSlides("slider1", currentIndex1);
            } else if (sliderId === 2) {
                currentIndex2 =
                    (currentIndex2 - 1 + sliders.slider2.children.length) %
                    sliders.slider2.children.length;
                updateSlides("slider2", currentIndex2);
            } else if (sliderId === 3) {
                currentIndex3 =
                    (currentIndex3 - 1 + sliders.slider3.children.length) %
                    sliders.slider3.children.length;
                updateSlides("slider3", currentIndex3);
            }
        }


        updateSlides("slider1", currentIndex1);
        updateSlides("slider2", currentIndex2);
        updateSlides("slider3", currentIndex3);
    </script>
</body>

</html>