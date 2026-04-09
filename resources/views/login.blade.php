<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CICD</title>
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
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 h-screen">
    <header class="bg-white shadow-md">
        <nav class="container mx-auto p-4 flex justify-between items-center">
            <a href="#" class="flex-shrink-0 flex items-center gap-2">
                <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">POLINDRA KELAS C</span>
            </a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#fitur" class="text-gray-600 hover:text-indigo-600 font-medium transition">Fitur</a>
                <a href="#tentang" class="text-gray-600 hover:text-indigo-600 font-medium transition">Tentang</a>
                <a href="#harga" class="text-gray-600 hover:text-indigo-600 font-medium transition">Harga</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 font-medium transition">Masuk</a>
                <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-full font-medium transition shadow-md hover:shadow-lg">Daftar Gratis</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto p-4 mt-12">
        <div class="max-w-md mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Login</h2>
            <form method="POST" action="/login" class="space-y-4">
                @csrf
                <div class="space-y-2">
                    <label for="email" class="block text-gray-700 text-sm font-bold">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukan email Anda" required class="w-full px-5 py-3 rounded-full bg-gray-200 border border-gray-700 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                </div>
                <div class="space-y-2">
                    <label for="password" class="block text-gray-700 text-sm font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukan password Anda" required class="w-full px-5 py-3 rounded-full bg-gray-200 border border-gray-700 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition">
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="mr-2">
                        <label for="remember" class="text-gray-700 text-sm font-bold">Ingatkan saya</label>
                    </div>
                    <a href="/forgot-password" class="text-sm text-gray-600 hover:text-indigo-600 transition">Lupa password?</a>
                </div>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white w-full px-5 py-3 rounded-full font-medium transition shadow-md hover:shadow-lg">Login</button>
            </form>
        </div>
    </main>

    <footer class="bg-white shadow-md mt-12">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <p class="text-gray-500 text-sm">© 2026 BrandKu. Hak cipta dilindungi undang-undang.</p>
            <div class="flex items-center space-x-8">
                <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium transition">Fitur</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium transition">Tentang</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 font-medium transition">Harga</a>
            </div>
        </div>
    </footer>
</body>
</html>
