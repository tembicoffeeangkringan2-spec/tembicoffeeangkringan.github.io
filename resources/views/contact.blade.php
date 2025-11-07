@extends('layout')

@section('title', 'Hubungi Kami - Tembi Coffee & Angkringan')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-amber-100 via-amber-200 to-amber-400 py-16 px-6">
  <div class="max-w-5xl mx-auto">
    <!-- Judul Halaman -->
    <h1 class="text-4xl md:text-5xl font-extrabold text-center text-amber-900 mb-12 drop-shadow-md">
      Hubungi Kami
    </h1>

    <!-- Grid Info & Google Form -->
    <div class="grid md:grid-cols-2 gap-10">
      <!-- 🔗 Google Form -->
      <div class="bg-white/90 backdrop-blur-md shadow-xl rounded-2xl p-8 border border-amber-300 text-center">
        <h2 class="text-2xl font-semibold text-amber-900 mb-6">Isi Formulir Online Kami</h2>
        <p class="text-amber-800 mb-4">
          Silakan isi data reservasi atau pertanyaan Anda melalui formulir berikut:
        </p>

        <!-- Tombol buka Google Form -->
        <a 
          href="https://forms.gle/H9nEZET9XPjoLQoW8" 
          target="_blank" 
          class="inline-block bg-gradient-to-r from-amber-600 to-amber-800 text-white font-semibold py-3 px-6 rounded-lg hover:from-amber-700 hover:to-amber-900 transition shadow-md">
          📄 Buka Google Form
        </a>
      </div>

      <!-- Informasi Kontak -->
      <div class="bg-gradient-to-b from-amber-800 to-amber-900 text-white rounded-2xl shadow-2xl p-8 flex flex-col justify-between">
        <div>
          <h2 class="text-2xl font-semibold mb-4">Informasi Kontak</h2>
          <p class="mb-3 text-amber-100">
            <strong>Alamat:</strong><br>
            49H3+6G7 Coffee & Angkringan, Tembi, Timbulharjo, Sewon, Bantul, Yogyakarta
          </p>
          <p class="mb-3 text-amber-100">
            <strong>Telepon / WhatsApp:</strong><br>
            <a href="https://wa.me/+62895381029303" target="_blank" class="text-amber-300 hover:underline">
              +62895381029303
            </a>
          </p>
          <p class="mb-3 text-amber-100">
            <strong>Email:</strong><br>
            <a href="mailto:info@tembicoffee.id" class="text-amber-300 hover:underline">
              info@tembicoffee.id
            </a>
          </p>
        </div>

        <!-- Media Sosial -->
        <div class="mt-8">
          <h2 class="text-xl font-semibold mb-4 text-amber-100">Ikuti Kami</h2>
          <div class="flex flex-wrap gap-3">
            <!-- Instagram -->
            <a href="https://www.instagram.com/tembicoffee" target="_blank" 
              class="flex items-center space-x-2 bg-gradient-to-r from-pink-500 to-pink-600 text-white px-4 py-2 rounded-lg hover:scale-105 transition transform">
              <img src="/images/ins.jpg" alt="Instagram" class="w-5 h-5">
              <span>Instagram</span>
            </a>

            <!-- TikTok -->
            <a href="https://www.tiktok.com/@tembicoffedanangk?_r=1&_t=ZS-915dAQL84Xs" target="_blank" 
              class="flex items-center space-x-2 bg-black text-white px-4 py-2 rounded-lg hover:scale-105 transition transform">
              <img src="/images/tok.png" alt="TikTok" class="w-5 h-5">
              <span>TikTok</span>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/+62895381029303" target="_blank" 
              class="flex items-center space-x-2 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 hover:scale-105 transition transform">
              <img src="/images/was.jpg" alt="WhatsApp" class="w-5 h-5">
              <span>WhatsApp</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Google Maps -->
    <div class="mt-16">
      <h2 class="text-3xl font-bold text-center text-amber-900 mb-8">Lokasi Kami</h2>
      <div class="rounded-2xl overflow-hidden shadow-xl border border-amber-300">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.320543118248!2d110.355!3d-7.877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57f8888888%3A0x123456789abcdef!2sTembi%20Coffee%20%26%20Angkringan!5e0!3m2!1sid!2sid!4v1234567890"
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
</div>
@endsection
