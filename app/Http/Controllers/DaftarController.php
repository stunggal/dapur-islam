<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use App\Models\puasa;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftar.main', [
            'title' => 'Daftar'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'hari' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $kondisi = puasa::where('user_id', $validatedData['user_id'])->where('tanggal', $validatedData['tanggal'])->first();
        if (!empty($kondisi)) {
            return redirect('/')->with('error', 'Maaf, anda sudah terdaftar');
        }
        puasa::create($validatedData);
        return redirect('/')->with('success', 'Pendaftaran berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function edit(daftar $daftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(daftar $daftar)
    {
        //
    }
}
