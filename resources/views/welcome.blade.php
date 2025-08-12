@extends('layouts.main')

@section('title', 'Welcome to Baherindo')

@section('content')
<div class="text-center mb-15 mt-10 pt-5">
        <h1 class="text-3xl font-bold font-stone-800">Welcome to motorcycle showroom</h1>
        <p class="text-lg text-stone-600">Jual Beli Motor Murah dan Berkualitas</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-10 gap-8 px-5">
    @forelse ($motor as $m)
    <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="{{ asset('storage/' . $m->gambar_motor) }}" 
             alt="{{ $m->nama_motor }}"
             class="w-full h-48 object-cover">

        <div class="p-4">
            <h1 class="font-bold text-xl text-stone-800">
                Rp {{ number_format($m->harga_motor, 0, ',', '.') }}
            </h1>
            <h2 class="text-md mt-2 font-semibold">{{ $m->nama_motor }}</h2>

            <div class="flex justify-between items-center text-neutral-500 text-sm">
                <div class="flex gap-4">
                    <p>{{ $m->tahun_motor }}</p>
                    <p>{{ $m->km_motor }} km</p>
                </div>
                <a href="{{ route('motor.show', $m->id) }}" 
                   class="bg-lime-300 text-stone-800 font-bold py-2 px-4 rounded-3xl hover:bg-lime-200 transition">
                    Show
                </a>
            </div>
        </div>
    </div>
    @empty
    <p class="col-span-full text-center text-gray-500">Tidak ada data motor tersedia.</p>
    @endforelse
</div>


<footer class="bg-white mt-10 py-6 ">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">

    <div class="flex items-center space-x-2">
      <img src="foto/logo.jpg" class="h-10 w-12 text-lime-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
</img>
      <span class="font-bold text-black">Baherindo Motor</span>
    </div>

    <p class="text-sm text-gray-500 mt-4 md:mt-0">
      © 2025 <span class="text-lime-300 font-semibold">Baherindo Motor</span>. All rights reserved.
    </p>
  </div>
</footer>



@endsection