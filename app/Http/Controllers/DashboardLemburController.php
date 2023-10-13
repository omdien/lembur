<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;

class DashboardLemburController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lembur', [
            'lembur' => Lembur::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahlembur');
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
        $temp = Lembur::find($id);
        // $tgl_surat = date("d", strtotime($temp->sup_tanggal)) . ' ' . $bulan[intval(date("m", strtotime($temp->sup_tanggal)))] . ' ' . date("Y", strtotime($temp->sup_tanggal));

        return view('detilslembur', [
            'lembur' => $temp
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lembur $lembur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lembur $lembur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lembur $lembur)
    {
        //
    }
}
