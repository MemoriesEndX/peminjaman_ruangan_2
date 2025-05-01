<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Peminjaman Ruangan - UNTIRTA</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold text-gray-800">
                UNTIRTA
            </div>
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block px-5 py-2 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-block px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h1 class="text-4xl font-bold text-gray-800 leading-tight">
                    Sistem Peminjaman Ruangan
                </h1>
                <p class="text-gray-600 text-lg">
                    Selamat datang di Website Peminjaman Ruang Terbaik di Universitas Sultan Ageng Tirtayasa. 
                    Temukan, pesan, dan gunakan ruang kampus dengan mudah dan cepat.
                </p>
                <div class="space-x-4">
                    <a href="{{ route('register') }}" 
                        class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Daftar Sekarang
                    </a>
                    <a href="#bantuan" 
                        class="inline-block px-6 py-3 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="{{ asset('images/bg-utama.jpeg') }}" alt="Hero Image" 
                        class="w-full h-auto rounded-lg" />
                </div>
                <img src="{{ asset('images/dot-shape.svg') }}" alt="Decorative Shape"
                    class="absolute -bottom-6 -right-6 w-24 h-24 opacity-50" />
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section id="bantuan" class="bg-white py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Cara Penggunaan</h2>
                <p class="text-gray-600">Tata Cara Penggunaan Sistem Peminjaman Ruangan Universitas Sultan Ageng Tirtayasa</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Login Card -->
                <div class="bg-blue-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Login</h3>
                    <p class="text-gray-600 text-center">Silahkan login terlebih dahulu sesuai dengan username yang telah disediakan oleh admin.</p>
                </div>

                <!-- Form Card -->
                <div class="bg-green-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Isi Form</h3>
                    <p class="text-gray-600 text-center">Silakan menuju ke menu Daftar Ruangan. Jika ruangan tersedia, isi form peminjaman secara lengkap.</p>
                </div>

                <!-- Process Card -->
                <div class="bg-purple-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Proses</h3>
                    <p class="text-gray-600 text-center">Tunggu saat proses peminjaman. Untuk mengecek status peminjaman, silakan menuju menu Daftar Peminjaman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Universitas Sultan Ageng Tirtayasa. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
