<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengguna.main', [
            'title' => 'penguna'
        ]);
    }

    public function login()
    {
        return view('pengguna.login', [
            'title' => 'penguna'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login')->with('success', 'anda harus masuk terlebih dahulu');
    }

    public function log(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:3'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'login failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.signin', [
            'title' => 'penguna'
        ]);
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
            'name' => 'required|min:3',
            'nim' => 'required|min:12|max:12',
            'semester' => 'required|min:1|max:2',
            'username' => 'required|min:3',
            'password' => 'required|min:3'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['prodi'] = $request['prodi'];
        User::create($validatedData);
        return redirect('/login')->with('success', 'pendaftaran telah baerhasil, harap login ulang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(pengguna $pengguna, $id)
    {
        return view('pengguna.profile', [
            'title' => 'My Profile'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengguna $pengguna)
    {
        //
    }
}
