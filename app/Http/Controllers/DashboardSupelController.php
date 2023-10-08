<?php

namespace App\Http\Controllers;

use App\Models\Supel;
use Illuminate\Http\Request;

class DashboardSupelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('about', [
            'supel' => Supel::all()
        ]);
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
    public function show($id)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $temp = Supel::find($id);
        $tgl_surat = date("d", strtotime($temp->sup_tanggal)) . ' ' . $bulan[intval(date("m", strtotime($temp->sup_tanggal)))] . ' ' . date("Y", strtotime($temp->sup_tanggal));

        return view('detilspl', [
            'supel' => $temp,
            'tg_surat' => $tgl_surat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supel $supel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supel $supel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supel $supel)
    {
        //
    }
}
