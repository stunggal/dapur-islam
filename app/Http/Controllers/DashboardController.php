<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use App\Models\dashboard;
use App\Models\puasa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
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

        // get next thursday
        $thursday = strtotime('next thursday');
        $monday = strtotime('next monday');
        $thursday = date("d-m-Y", $thursday);
        $monday = date("d-m-Y", $monday);
        $puasa = puasa::where('tanggal', $thursday)->orWhere('tanggal', $monday)->get();
        return view('dashboard.main', [
            'title' => 'Dashboard',
            'puasa' => $puasa,
            'user' => $user,
            'thursday' => $thursday,
            'monday' => $monday,
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
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
