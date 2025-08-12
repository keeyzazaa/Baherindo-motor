@extends('layouts.main')

@section('tittle', 'Welcome to baherindo')

@section('content')

<div class="bg-gray-50 flex-grow flex items-center justify-center mt-15">
  <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-10 rounded-3xl shadow-md w-full max-w-md">
    @csrf
    @method('PUT')
    <h2 class="text-3xl text-stone-800 font-bold mb-10 text-center">Tambah Data Motor</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Motor</label>
        <input type="text" id="nama_motor" name="nama_motor" value={{$motor->nama_motor}} class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>

      <div>
        <label for="harga" class="block text-sm font-medium text-gray-700">Harga Motor</label>
        <input type="text" id="harga_motor" name="harga_motor" value={{$motor->harga_motor}} class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <div>
        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun Motor</label>
        <input type="text" id="tahun_motor" name="tahun_motor" value={{$motor->tahun_motor}} class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>

      <div>
        <label for="km" class="block text-sm font-medium text-gray-700">Kilometer</label>
        <input type="text" id="km_motor" name="km_motor" value={{$motor->km_motor}} class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>
    </div>

    <!-- <div class="mb-4">
      <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
      <input type="file" id="gambar_motor" name="gambar_motor" accept=".jpg,.jpeg,.png" class="rounded-3xl mt-1 block w-full p-2 border border-gray-300" required>
    </div> -->

    <button type="submit" class="w-full bg-lime-300 text-stone-800 font-bold py-2 rounded-3xl hover:bg-lime-200 transition mt-3">Simpan</button>
  </form>
</div>

@endsection