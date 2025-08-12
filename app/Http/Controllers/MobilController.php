<?php

namespace App\Http\Controllers;

use App\Models\MobilBaherindo;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("mobil.creat");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            "nama_mobil" => "required|string",
            "harga_mobil" => "required|numeric",
            "km_mobil" => "required|integer",
            "tahun_mobil" => "required|integer",
            "gambar_mobil" => "required|image|mimes:jpg,jpeg,png"
        ]);

        if ($request->HasFile('gambar_mobil')){
            $path =$request->file('gambar_mobil')->store('mobilbaherindoimage',options: 'public');
            $ValidatedData['gambar_mobil'] = $path;
        }

        MobilBaherindo::create($ValidatedData);
        return redirect('/')->with("success","data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
