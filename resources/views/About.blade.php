@extends('layouts.main')

@section('tittle', 'Welcome to baherindo')

@section('content')

<section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    

    <h2 class="text-4xl font-bold text-center mb-5 text-lime-500">Tentang Kami</h2>
    

    <div class="bg-white shadow-lg rounded-xl p-8 mb-12">
      <p class="text-gray-700 leading-relaxed text-md">
        Baherindo Motor adalah perusahaan yang bergerak di bidang jual beli motor bekas berkualitas dengan harga terjangkau.
        Kami hadir untuk memberikan solusi terbaik bagi Anda yang ingin membeli motor impian atau menjual motor lama dengan
        proses yang cepat, aman, dan terpercaya. Dengan pengalaman bertahun-tahun di industri otomotif, kami memahami
        pentingnya kualitas, transparansi, dan layanan yang memuaskan bagi setiap pelanggan.
      </p>
      <p class="mt-4 text-gray-700 leading-relaxed text-md">
        Seluruh motor yang kami jual telah melalui proses inspeksi menyeluruh agar tetap dalam kondisi prima dan siap pakai.
        Kami juga menyediakan berbagai pilihan merk dan tipe motor dari berbagai tahun produksi, sehingga Anda dapat memilih
        motor sesuai kebutuhan dan anggaran. Proses administrasi dan legalitas kami tangani dengan rapi dan profesional.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <div class="bg-green-50 p-8 rounded-xl shadow">
        <h3 class="text-2xl font-bold text-lime-500 mb-4">Visi</h3>
        <p class="text-gray-700 text-md">
          Menjadi perusahaan jual beli motor bekas terpercaya di Indonesia yang mengutamakan kualitas, pelayanan prima,
          dan kepuasan pelanggan.
        </p>
      </div>
      
      <div class="bg-green-50 p-8 rounded-xl shadow">
        <h3 class="text-2xl font-bold text-lime-500 mb-4">Misi</h3>
        <ul class="list-disc list-inside text-gray-700 text-md space-y-2">
          <li>Memberikan pilihan motor bekas berkualitas dengan harga kompetitif.</li>
          <li>Menyediakan proses transaksi yang cepat, aman, dan transparan.</li>
          <li>Memberikan layanan purna jual yang memuaskan.</li>
          <li>Mengedepankan integritas dalam setiap transaksi.</li>
        </ul>
      </div>
    </div>


    <div class="mt-12">
      <h3 class="text-3xl font-bold text-center text-lime-300 mb-8">Nilai Perusahaan</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow text-center">
          <h4 class="text-xl font-semibold text-lime-500 mb-2">Integritas</h4>
          <p class="text-gray-600">Kami berkomitmen menjalankan bisnis dengan kejujuran dan transparansi.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow text-center">
          <h4 class="text-xl font-semibold text-lime-500 mb-2">Kualitas</h4>
          <p class="text-gray-600">Seluruh motor kami melewati inspeksi ketat sebelum dijual.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow text-center">
          <h4 class="text-xl font-semibold text-lime-500 mb-2">Pelayanan</h4>
          <p class="text-gray-600">Kepuasan pelanggan adalah prioritas utama kami.</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection