<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/feather-icons"></script>
    <title>EduBridge School</title>
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden">
    <div class="w-full flex gap-6 p-3 items-center justify-between bg-slate-700 z-20">
        <div class="flex gap-4 px-4">
            <a href="#" class="capitalize font-semibold text-white pb-1 border-b-2 border-transparent hover:border-white transition duration-1000 ease-in-out">informasi pendaftaran</a>
            <a href="#" class="flex gap-2">
                <i data-feather="phone" class="text-white w-6 h-6"></i>
                <span class="text-white">085363815026</span>
            </a>
            <a href="#" class="flex gap-2">
                <i data-feather="mail" class="text-white w-6 h-6"></i>
                <span class="text-white">EduBridgeSchool@ac.id</span>
            </a>
        </div>
        <div class="flex gap-12 px-4">
            <a href="#">
                <i data-feather="instagram" class="w-6 h-6 text-white hover:text-sky-600 transition duration ease-in"></i>
            </a>
            <a href="">
                <i data-feather="facebook" class="w-6 h-6 text-white hover:text-sky-600 transition duration-500 ease-in"></i>
            </a>
            <a href="">
                <i data-feather="twitter" class="w-6 h-6 text-white hover:text-sky-600 transition duration-500 ease-in"></i>
            </a> 
            <a href="">
                <i data-feather="youtube" class="w-6 h-6 text-white hover:text-sky-600 transition duration-500 ease-in"></i>
            </a>
        </div>
    </div>
    <header class="py-4 sticky w-full top-0 left-0 text-white flex justify-around bg-slate-900 items-center z-10 nav">
        <div class="container">
            <div class="px-8">
                <a href="#home" class="flex items-center gap-4">
                    <img src="{{ asset('images/logos.png') }}" alt="logo.png" class="max-h-12 w-auto invert brightness-0">
                    <p class="capitalize font-serif text-white text-3xl font-bold">EduBridge school</p>
                </a>
            </div>
            <div class="flex items-center px-8 navnav">
                <nav class="hidden absolute shadow-lg rounded-lg max-w-[250px] right-4 top-full w-full lg:block lg:static lg:bg-transparent 
                            lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex lg:justify-center items-center gap-4">
                        <li class="group">
                            <a href="#home" class="nav-link py-2 px-2 text-white text-2xl font-semibold group-hover:bg-gray-700 rounded-xl">
                                Beranda
                            </a>
                        </li>
                        <li class="group">
                            <a href="" class="nav-link py-2 px-2 text-white text-2xl font-semibold group-hover:bg-gray-700 rounded-xl">Profil</a>
                        </li>
                        <li class="group">
                            <a href="" class="nav-link py-2 px-2 text-white text-2xl font-semibold group-hover:bg-gray-700 rounded-xl">Kurikulum</a>
                        </li>
                        <li class="group">
                            <a href="" class="nav-link py-2 px-2 text-white text-2xl font-semibold group-hover:bg-gray-700 rounded-xl">Gallery</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section id="home" class="">
        
    </section>
    <script>
        feather.replace()
    </script>
</body>
</html>