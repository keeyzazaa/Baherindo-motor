@extends('layouts.main')

@section('title', 'Welcome to Baherindo')

@section('content')

    <div class="max-w-xl mx-auto px-5 py-10">
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <img src="{{ asset('storage/' . $motor['gambar_motor']) }}" alt="{{ $motor['nama_motor'] }}"
                class="w-full aspect-[16/9] object-cover">

            <div class="p-6">
                <h1 class="font-bold text-2xl text-stone-800 mb-3">
                    Rp {{ number_format($motor['harga_motor'], 0, ',', '.') }}
                </h1>
                <p class="text-xl mt-2 font-semibold">
                    {{ $motor['nama_motor'] }}
                </p>
                <div class="flex justify-between items-center text-neutral-500 text-md">
                <div class="flex gap-4">
                    <p>{{ $motor['tahun_motor'] }}</p>
                    <p>{{ $motor['km_motor'] }} km</p>
                </div>
            </div>

            <div class="py-8 flex space-x-3">
                <a href="https://wa.me/6281212345678" target="_blank"
                    class="bg-stone-800 text-white font-semibold text-neutral-50 py-2 px-4 rounded-3xl">
                    Order Via Whatsapp
                </a>

                <a href="{{ route('motor.edit', $motor->id) }}"
                    class="bg-lime-300 text-stone-800 font-semibold text-neutral-50 py-2 px-4 rounded-3xl">
                    Edit
                </a>

                <form action="{{ route('motor.destroy', $motor->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-700 text-white font-semibold text-neutral-50 py-2 px-4 rounded-3xl">
                        Delete
                    </button>
                </form>
            </div>

        </div>
    </div>

@endsection