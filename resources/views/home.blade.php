@extends('layout')

@section('title', 'Beranda - Tembi Coffee & Angkringan')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-amber-800 via-amber-700 to-amber-900 text-white py-24 relative overflow-hidden">
  <div class="bg-black bg-opacity-40 py-20 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      
      <!-- Teks Selamat Datang -->
      <div class="text-center md:text-left space-y-6">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
          Selamat Datang di<br>
          <span class="text-amber-300">Tembi Coffee & Angkringan</span>
        </h1>
        <p class="text-lg text-gray-100 max-w-md mx-auto md:mx-0 leading-relaxed">
          Rasakan kehangatan suasana dan nikmati cita rasa kopi pilihan kami — dibuat dengan sepenuh hati untuk setiap momen santai Anda.
        </p>
        <a href="/products" 
           class="inline-block bg-amber-500 text-white px-8 py-3 rounded-lg text-lg font-semibold 
                  hover:bg-amber-600 transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
          ☕ Lihat Menu
        </a>
      </div>

      <!-- Gambar Hero -->
      <div class="flex justify-center">
        <img src="{{ asset('images/CF.jpg') }}" alt="Tembi Coffee" 
             class="w-80 h-80 object-cover rounded-2xl shadow-2xl border-4 border-amber-400">
      </div>

    </div>
  </div>
</div>

<!-- Tentang Tembi Coffee & Angkringan -->
<section class="relative bg-gradient-to-b from-amber-100 via-amber-50 to-stone-100 py-24 px-6 overflow-hidden">

  <!-- Ornamen Latar -->
  <div class="absolute inset-0">
    <div class="absolute -top-20 -left-20 w-72 h-72 bg-amber-400/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-700/20 rounded-full blur-3xl"></div>
  </div>

  <div class="relative max-w-6xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-extrabold text-amber-800 mb-10 drop-shadow-sm">
      Tentang <span class="text-amber-600">Tembi Coffee & Angkringan</span>
    </h2>

    <!-- Card utama -->
    <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl p-10 md:p-14 border border-amber-200 mx-auto max-w-4xl space-y-6 text-gray-800 leading-relaxed">
      <p>
        <span class="font-semibold text-amber-700">Tembi Coffee & Angkringan</span> berdiri pada tahun 
        <strong>2022</strong> sebagai hasil kolaborasi antara 
        <strong>Masyarakat Tembi 2</strong> dan <strong>Karang Taruna Muda Utama</strong>.  
        Tempat ini lahir dari semangat untuk menghadirkan ruang kuliner yang bukan hanya menyajikan cita rasa terbaik, 
        tetapi juga menjadi pusat interaksi sosial bagi masyarakat.
      </p>

      <p>
        Mengusung perpaduan antara <span class="text-amber-700 font-medium">konsep kedai kopi modern</span> dan 
        <span class="text-amber-700 font-medium">angkringan tradisional</span>, 
        Tembi Coffee & Angkringan tumbuh menjadi pusat kreatif sekaligus sumber penghidupan bagi warga sekitar.  
        Setiap sudutnya mencerminkan kehangatan, kebersamaan, dan nilai-nilai lokal yang dijunjung tinggi.
      </p>

      <div class="border-t border-amber-200 my-6"></div>

      <p>
        Sebagai bagian dari komitmen kami untuk menjadi 
        <span class="font-semibold text-amber-700">ikon kuliner desa</span>, 
        Tembi Coffee & Angkringan terus berupaya untuk:
      </p>

      <ul class="text-left md:text-center max-w-2xl mx-auto space-y-4 text-lg font-medium text-gray-700">
        <li class="bg-amber-50 border-l-4 border-amber-500 rounded-lg p-3 shadow-sm hover:bg-amber-100 transition">
          ☕ Menawarkan pengalaman makan yang <strong>unik dan autentik</strong>.
        </li>
        <li class="bg-amber-50 border-l-4 border-amber-500 rounded-lg p-3 shadow-sm hover:bg-amber-100 transition">
          🌾 Mendukung <strong>pemberdayaan ekonomi komunitas lokal</strong>.
        </li>
        <li class="bg-amber-50 border-l-4 border-amber-500 rounded-lg p-3 shadow-sm hover:bg-amber-100 transition">
          🎨 Menciptakan ruang bagi <strong>aktivitas sosial, budaya, dan kreatif generasi muda</strong>.
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Keunggulan Toko -->
<div class="bg-gradient-to-r from-amber-800 via-amber-700 to-amber-900 py-20 px-6 text-white">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12 text-amber-300">Keunggulan Kami</h2>

    <div class="grid md:grid-cols-3 gap-10">
      
      <!-- Keunggulan 1 -->
      <div class="bg-white/10 backdrop-blur-md shadow-xl rounded-2xl p-8 hover:bg-white/20 
                  transition transform hover:-translate-y-2 border border-amber-400/30">
        <img src="{{ asset('images/pili.jpg') }}" alt="Biji Kopi Pilihan" 
             class="mx-auto w-40 h-40 object-cover rounded-full mb-6 border-4 border-amber-400 shadow-md">
        <h3 class="text-xl font-bold text-amber-300 mb-3">Biji Kopi Pilihan</h3>
        <p class="text-gray-100 leading-relaxed">
          Kami hanya menggunakan biji kopi terbaik dari petani lokal untuk menghadirkan cita rasa yang otentik dan berkualitas tinggi.
        </p>
      </div>

      <!-- Keunggulan 2 -->
      <div class="bg-white/10 backdrop-blur-md shadow-xl rounded-2xl p-8 hover:bg-white/20 
                  transition transform hover:-translate-y-2 border border-amber-400/30">
        <img src="{{ asset('images/hl.jpg') }}" alt="Suasana Nyaman" 
             class="mx-auto w-40 h-40 object-cover rounded-full mb-6 border-4 border-amber-400 shadow-md">
        <h3 class="text-xl font-bold text-amber-300 mb-3">Suasana Nyaman</h3>
        <p class="text-gray-100 leading-relaxed">
          Tempat ideal untuk bersantai, bekerja, atau sekadar berbincang santai bersama teman dan keluarga dalam suasana hangat.
        </p>
      </div>

      <!-- Keunggulan 3 -->
      <div class="bg-white/10 backdrop-blur-md shadow-xl rounded-2xl p-8 hover:bg-white/20 
                  transition transform hover:-translate-y-2 border border-amber-400/30">
        <img src="{{ asset('images/K.jpg') }}" alt="Pelayanan Cepat" 
             class="mx-auto w-40 h-40 object-cover rounded-full mb-6 border-4 border-amber-400 shadow-md">
        <h3 class="text-xl font-bold text-amber-300 mb-3">Pelayanan Cepat</h3>
        <p class="text-gray-100 leading-relaxed">
          Kami berkomitmen memberikan pelayanan cepat dan ramah agar pengalaman ngopi Anda semakin menyenangkan.
        </p>
      </div>

    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-gradient-to-r from-amber-900 via-amber-800 to-amber-900 text-amber-100 py-12 px-6 mt-0">
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 text-center md:text-left">
    
    <!-- Kolom 1: Tentang -->
    <div>
      <h3 class="text-xl font-semibold text-amber-300 mb-4">Tembi Coffee & Angkringan</h3>
      <p class="text-sm leading-relaxed text-amber-100/90">
        Tempat berkumpul yang menghadirkan cita rasa kopi lokal terbaik dan suasana hangat khas pedesaan Tembi.
      </p>
    </div>

    <!-- Kolom 2: Info Kontak -->
    <div>
      <h3 class="text-xl font-semibold text-amber-300 mb-4">Kontak Kami</h3>
      <ul class="space-y-2 text-sm">
        <li>📍 <span class="text-amber-100/90">Jl. Parangtritis KM 8, Desa Tembi, Bantul, Yogyakarta</span></li>
        <li>📞 <a href="tel:+628975089492" class="hover:text-amber-300 transition">+62 812-3456-7890</a></li>
        <li>💬 <a href="https://wa.me/628975089492" target="_blank" class="hover:text-amber-300 transition">Chat via WhatsApp</a></li>
      </ul>
    </div>

    <!-- Kolom 3: Jam Operasional -->
    <div>
      <h3 class="text-xl font-semibold text-amber-300 mb-4">Jam Operasional</h3>
      <ul class="text-sm space-y-1">
        <li>🕐 Senin – Jumat: 17.30 – 23.00</li>
        <li>🕐 Sabtu – Minggu: 17.00 – 24.00</li>
      </ul>
    </div>
  </div>

  <!-- Garis Batas -->
  <div class="border-t border-amber-700 mt-10 pt-6 text-center text-sm text-amber-200/80">
    © {{ date('Y') }} <span class="font-medium text-amber-300">Tembi Coffee & Angkringan</span>.  
    Semua Hak Dilindungi.
  </div>
</footer>
@endsection
