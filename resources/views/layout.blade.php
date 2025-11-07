<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'TokoKita')</title>
  {{-- CDN Tailwind tanpa npm --}}
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <nav class="bg-amber-700 text-white shadow-lg">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between items-center py-4">

      <!-- Logo + Nama -->
      <div class="flex items-center space-x-3">
        <a href="/">
          <img src="/images/logop.jpg" alt="Logo Tembi Coffee" class="w-12 h-12 rounded-full shadow-md border-2 border-white">
        </a>
        <a href="/" class="text-2xl font-bold hover:text-amber-200 transition">
          Tembi Coffee & Angkringan
        </a>
      </div>

      <!-- Menu Navigasi -->
      <div class="hidden md:flex space-x-6">
        <a href="/" class="hover:text-amber-200 transition">Beranda</a>
        <a href="/products" class="hover:text-amber-200 transition">coffee</a>
        <a href="/about" class="hover:text-amber-200 transition">angkringan</a>
        <a href="/contact" class="hover:text-amber-200 transition">Kontak</a>
      </div>
    </div>
  </div>
</nav>


  {{-- Isi halaman --}}
  <main class="py-10 px-6">
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="bg-indigo-700 text-white text-center py-4 mt-10">
    <p>&copy; {{ date('Y') }} TokoKita. Semua hak dilindungi.</p>
  </footer>

</body>
</html>
