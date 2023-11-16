<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        // order by created_at desc
        $riwayat = Riwayat::where('id_user', $user_id)->orderBy('created_at', 'desc')->get();

        // get nama penyakit berdasarkan id_penyakit
        foreach ($riwayat as $key => $value) {
            $riwayat[$key]['nama_penyakit'] = $value->penyakit->nama;
            $riwayat[$key]['tanggal'] = date('d-m-Y', strtotime($value->created_at));
            $riwayat[$key]['jam'] = date('H:i:s', strtotime($value->created_at)); 
        }

        return view('riwayat', compact('riwayat'));
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
        //
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
