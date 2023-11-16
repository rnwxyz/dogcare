<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Keputusan;
use App\Models\Kondisi;
use App\Models\Penyakit;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('diagnosis', compact('gejala', 'kondisi'));
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
        $gejala = Gejala::all();
        $penyakit = penyakit::all();
        $nama_anjing = $request->input('nama_anjing');
        $nilai_user = [];
        $nilai_keputusan = [];

        foreach ($gejala as $key => $value) {
            $nilai_user[$value->id] = $request->input($value->id);
        }

        foreach ($penyakit as $key => $value) {
            $cf_gejala = Keputusan::where('id_penyakit', $value->id)->get()->toArray();
            $cf_old = $cf_gejala[0]['nilai_cf'] * $nilai_user[$cf_gejala[0]['id_gejala']];
            $cf_result = $cf_old;

            for ($i = 1; $i < count($cf_gejala); $i++) {
                $cf_HE = $cf_gejala[$i]['nilai_cf'] * $nilai_user[$cf_gejala[$i]['id_gejala']];

                $cf_result = $cf_old + ($cf_HE * (1 - $cf_old));
                $cf_old = $cf_result;
            }
            $nilai_persentase = $cf_result * 100;

            $nilai_keputusan[$key]["id_penyakit"] = $value->id;
            $nilai_keputusan[$key]["nama"] = $value->nama;
            $nilai_keputusan[$key]["sumber"] = $value->sumber;
            $nilai_keputusan[$key]["penjelasan"] = $value->penjelasan;
            $nilai_keputusan[$key]["pencegahan"] = $value->pencegahan;
            $nilai_keputusan[$key]["nilai"] = $nilai_persentase;
        }

        // get the bigest nilai in nilai_keputusan
        $max = -1;
        $index = 0;
        foreach ($nilai_keputusan as $key => $value) {
            if ($value['nilai'] > $max) {
                $max = $value['nilai'];
                $index = $key;
            }
        }
        // insert to riwayat
        $riwayat = new Riwayat;
        $riwayat->id_user = auth()->user()->id;
        $riwayat->id_penyakit = $nilai_keputusan[$index]['id_penyakit'];
        $riwayat->nama_anjing = $nama_anjing;
        $riwayat->persentase = $nilai_keputusan[$index]['nilai'];
        $riwayat->save();

        // get the riwayat id
        $riwayat_id = Riwayat::where('id_user', auth()->user()->id)->orderBy('created_at', 'desc')->first()->id;

        return Redirect::route('diagnosis', ['id' => 4, 'riwayat_id' => $riwayat_id]);
    }

    public function storeIdentity(Request $request)
    {
        $nama_anjing = $request->input('name');
        return Redirect::route('diagnosis', ['id' => 3])
        ->with('nama_anjing',$nama_anjing);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {

        if ($id == '1') {
            return view('diagnosis-intro', compact('id'));
        } else if ($id == '2') {
            return view('diagnosis-identity', compact('id'));
        } else if ($id == '3') {
            $gejala = Gejala::all();
            $kondisi = Kondisi::all();
            $nama_anjing = session('nama_anjing');
            if($nama_anjing == null){
                return Redirect::route('diagnosis', ['id' => 1]);
            }
            return view('diagnosis-form', compact('id', 'nama_anjing', 'gejala', 'kondisi'));
        } else if ($id == '4') {
            $riwayat_id = $request->query('riwayat_id');
            $riwayat = Riwayat::find($riwayat_id);
            $nama_anjing = $riwayat->nama_anjing;
            $penyakit = Penyakit::find($riwayat->id_penyakit);
            $hasil = [
                'nama' => $penyakit->nama,
                'sumber' => $penyakit->sumber,
                'penjelasan' => $penyakit->penjelasan,
                'pencegahan' => $penyakit->pencegahan,
                'nilai' => $riwayat->persentase,
            ];
            return view('diagnosis-result', compact('id', 'hasil', 'nama_anjing'));
        } else {
            return view('diagnosis-intro', ['id' => 1]);
        }
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
