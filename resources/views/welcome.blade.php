<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirNav Indonesia</title>

    <!-- Tailwind CSS (via CDN for immediate display without Vite dev server, can be switched to Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Video Background */
        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            z-index: -2;
        }

        .video-container video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        /* Dark Overlay */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.55);
            z-index: -1;
        }
    </style>
</head>
<body class="antialiased text-white">

    <!-- Background Video -->
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="https://www.airnavindonesia.co.id/wp-content/uploads/2024/10/08196.mp4" type="video/mp4">
        </video>
    </div>
    <div class="overlay"></div>

    <!-- Header / Navbar -->
    <header class="absolute top-0 w-full z-50 p-6 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex-shrink-0 ml-4 md:ml-12">
            <a href="/">
                <img src="https://www.airnavindonesia.co.id/wp-content/uploads/2024/09/LOGOAIRNAVINDONESIALandscapePutih-1.png" alt="AirNav Indonesia" class="h-12 md:h-16">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden lg:flex space-x-6 text-sm font-medium tracking-wide">
            <a href="https://www.airnavindonesia.co.id/?page_id=155" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300 transition duration-300">Profil</a>
            <a href="https://www.airnavindonesia.co.id/?page_id=236" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300 transition duration-300">Layanan</a>
            <a href="https://www.airnavindonesia.co.id/?page_id=303" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300 transition duration-300">Informasi Publik</a>
            <a href="https://www.airnavindonesia.co.id/?page_id=370" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300 transition duration-300">Tata Kelola Perusahaan</a>
            <a href="https://www.airnavindonesia.co.id/?cat=2" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300 transition duration-300">Media</a>
            <a href="https://www.airnavindonesia.co.id/?page_id=396" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300 transition duration-300">Keselamatan</a>
        </nav>

        <!-- Right Menu (Lang + Login) -->
        <div class="flex items-center space-x-4 mr-4 md:mr-12">

            <!-- Login Button -->
            <div class="hidden md:block">
                @if (Auth::check())
                    <a href="{{ route('dashboard') }}" class="px-5 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/50 rounded-full transition duration-300 text-sm font-semibold">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/50 rounded-full transition duration-300 text-sm font-semibold">
                        Login
                    </a>
                @endif
            </div>
        </div>
    </header>

    <!-- Main Content / Hero -->
    <main class="relative z-10 flex flex-col items-center justify-center h-screen px-4 text-center">

        <h2 class="text-xl md:text-3xl font-medium tracking-wide mb-3 drop-shadow-md">
            Welcome to AirNav Indonesia
        </h2>

        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold tracking-widest uppercase max-w-5xl leading-tight drop-shadow-lg">
            WORLD-CLASS AIR NAVIGATION SERVICE PROVIDER IN INDONESIA
        </h1>

        <!-- Mobile Login Button (Visible only on small screens) -->
        <div class="mt-8 md:hidden">
            @if (Auth::check())
                <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-white text-blue-900 rounded-full font-bold shadow-lg transition">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="px-6 py-3 bg-white text-blue-900 rounded-full font-bold shadow-lg transition">
                    Login
                </a>
            @endif
        </div>

    </main>

    <!-- About Section -->
    <section class="relative z-10 bg-white text-gray-800 py-24 px-6 md:px-12 lg:px-24">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Sistem Logbook Fasilitas Navigasi</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Platform digital terpadu untuk pencatatan, pemantauan, dan pelaporan operasional fasilitas navigasi penerbangan. Kami memastikan setiap peralatan dan fasilitas terpelihara dengan baik demi keamanan dan kelancaran layanan navigasi udara di seluruh Indonesia.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pencatatan Real-time</h3>
                    <p class="text-gray-600 text-sm">
                        Catat dan pantau kondisi seluruh fasilitas operasional dan teknis secara langsung, transparan, dan terintegrasi di mana pun.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Monitoring Pemeliharaan</h3>
                    <p class="text-gray-600 text-sm">
                        Mendukung pemeliharaan rutin dan pencegahan insiden melalui rekapan aktivitas logbook yang tertata rapi.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 rounded-2xl p-8 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Keandalan & Akurasi</h3>
                    <p class="text-gray-600 text-sm">
                        Memastikan setiap informasi divalidasi dan tercatat dengan akurat demi mencapai standar keselamatan penerbangan tertinggi.
                    </p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
