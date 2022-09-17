<?php

namespace App\Http\Controllers;

use App\Models\puasa;
use App\Models\User;
use Illuminate\Http\Request;

class PuasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user() == null) {
            $user = '';
        } else {
            $user = User::where('id', auth()->user()->id)->first();
        }
        $puasa = puasa::where('user_id', $user->id)->get();
        // return $daftar->user->username;

        // get next thursday
        return view('puasa.main', [
            'title' => 'Puasa',
            'puasa' => $puasa,
            'user' => $user,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function show(puasa $puasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function edit(puasa $puasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, puasa $puasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(puasa $puasa)
    {
        puasa::destroy($puasa->id);
        return redirect('/puasa')->with('success', 'Data have been deleted!');
        return $puasa->id;
    }
}
