<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | CICD</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-900 antialiased">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-200 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="#" class="flex-shrink-0 flex items-center gap-2">
                    <span
                        class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">BrandKu</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#fitur" class="text-gray-600 hover:text-indigo-600 font-medium transition">Fitur</a>
                    <a href="#tentang" class="text-gray-600 hover:text-indigo-600 font-medium transition">Tentang</a>
                    <a href="#harga" class="text-gray-600 hover:text-indigo-600 font-medium transition">Harga</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 font-medium">Masuk</a>
                    <a href="#"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-full font-medium transition shadow-md hover:shadow-lg">Daftar
                        Gratis</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-gray-900 focus:outline-none p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-4 space-y-3">
            <a href="#fitur" class="block text-gray-600 hover:text-indigo-600 font-medium">Fitur</a>
            <a href="#tentang" class="block text-gray-600 hover:text-indigo-600 font-medium">Tentang</a>
            <a href="#harga" class="block text-gray-600 hover:text-indigo-600 font-medium">Harga</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900 font-medium">Masuk</a>
            <a href="#"
                class="block bg-indigo-600 text-white text-center px-5 py-2 rounded-full font-medium">Daftar Gratis</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div
                    class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium border border-indigo-100">
                    🚀 Versi 2.0 Telah Hadir
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-gray-900 leading-tight">
                    Bangun Masa Depan Digital <span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">Tanpa
                        Batas</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-lg leading-relaxed">
                    Platform all-in-one untuk mengelola bisnis, meningkatkan produktivitas tim, dan mencapai target
                    lebih cepat. Mulai gratis hari ini.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3.5 rounded-full font-semibold text-center transition shadow-lg hover:shadow-indigo-500/30">
                        Mulai Sekarang
                    </a>
                    <a href="#"
                        class="bg-white border border-gray-300 hover:border-gray-400 text-gray-700 px-8 py-3.5 rounded-full font-semibold text-center transition flex items-center justify-center gap-2 group">
                        <svg class="w-5 h-5 text-gray-500 group-hover:text-indigo-600 transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Lihat Demo
                    </a>
                </div>
                <div class="flex items-center gap-4 pt-4">
                    <div class="flex -space-x-3">
                        <img class="w-9 h-9 rounded-full border-2 border-white shadow-sm"
                            src="https://i.pravatar.cc/100?img=1" alt="User">
                        <img class="w-9 h-9 rounded-full border-2 border-white shadow-sm"
                            src="https://i.pravatar.cc/100?img=5" alt="User">
                        <img class="w-9 h-9 rounded-full border-2 border-white shadow-sm"
                            src="https://i.pravatar.cc/100?img=8" alt="User">
                        <div
                            class="w-9 h-9 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-medium text-gray-600 shadow-sm">
                            +2k</div>
                    </div>
                    <p class="text-sm text-gray-500">Bergabung dengan <span
                            class="font-semibold text-gray-900">10.000+</span> profesional</p>
                </div>
            </div>

            <div class="relative">
                <div
                    class="relative bg-gradient-to-tr from-indigo-500 to-purple-500 rounded-2xl p-1.5 shadow-2xl rotate-1 hover:rotate-0 transition-transform duration-500 ease-out">
                    <div class="bg-white rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Dashboard Preview" class="w-full h-auto object-cover">
                    </div>
                </div>
                <!-- Floating Stats Card -->
                <div class="absolute -bottom-6 -left-4 sm:-left-8 bg-white p-4 rounded-xl shadow-xl border border-gray-100 max-w-xs hidden sm:block animate-bounce"
                    style="animation-duration: 3s;">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                            ✓</div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Produktivitas Naik</p>
                            <p class="text-xs text-gray-500">+142% bulan ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-lg text-gray-600">Solusi lengkap yang dirancang untuk mempercepat pertumbuhan bisnis
                    Anda dengan teknologi terkini.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100 group">
                    <div
                        class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-indigo-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Super Cepat & Ringan</h3>
                    <p class="text-gray-600 leading-relaxed">Arsitektur modern yang dioptimalkan untuk performa tinggi
                        tanpa mengorbankan pengalaman pengguna.</p>
                </div>
                <!-- Feature 2 -->
                <div
                    class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100 group">
                    <div
                        class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Keamanan Terjamin</h3>
                    <p class="text-gray-600 leading-relaxed">Enkripsi end-to-end dan standar keamanan enterprise untuk
                        melindungi data sensitif Anda.</p>
                </div>
                <!-- Feature 3 -->
                <div
                    class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100 group">
                    <div
                        class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center text-pink-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Sinkronisasi Real-time</h3>
                    <p class="text-gray-600 leading-relaxed">Akses dari perangkat mana pun dengan pembaruan instan dan
                        kolaborasi tim yang mulus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900 relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-4xl">
            <div
                class="absolute top-10 left-10 w-72 h-72 bg-indigo-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute top-10 right-10 w-72 h-72 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Siap Meningkatkan Bisnis Anda?</h2>
            <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">Bergabunglah dengan ribuan profesional yang telah
                beralih ke platform kami. Coba gratis 14 hari, tanpa kartu kredit.</p>
            <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto"
                onsubmit="event.preventDefault(); alert('Terima kasih telah berlangganan!');">
                <input type="email" placeholder="Masukkan email Anda" required
                    class="flex-1 px-5 py-3 rounded-full bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-full font-semibold transition shadow-lg hover:shadow-indigo-500/30 whitespace-nowrap">
                    Daftar Sekarang
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-12">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div
                class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">
                POLINDRA CICD</div>
            <p class="text-gray-500 text-sm text-center">© 2026 BrandKu. Hak cipta dilindungi undang-undang.</p>
            <div class="flex gap-5">
                <a href="#" class="text-gray-400 hover:text-indigo-600 transition" aria-label="Twitter">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-indigo-600 transition" aria-label="GitHub">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Simple JS for Mobile Menu Toggle -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
