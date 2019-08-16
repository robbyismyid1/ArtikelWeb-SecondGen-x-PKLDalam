<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KompetensiKeahlian;
use App\BidangStudi;
use App\Role;
use Session; 

class KompetensikeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keahlian = KompetensiKeahlian::all();
        return view('backend.kompetensikeahlian.index', compact('keahlian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keahlian = KompetensiKeahlian::all();
        $bstudi = BidangStudi::all();
        return view('backend.kompetensikeahlian.create', compact('keahlian', 'bstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keahlian = new KompetensiKeahlian();
        $keahlian->bidang_id = $request->nama_bidang;
        $keahlian->kompetensi_nama = $request->nama_kompetensi;
        $keahlian->save();

        return redirect()->route('kompetensi-keahlian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keahlian = KompetensiKeahlian::findOrFail($id);
        return view('backend.kompetensikeahlian.show', compact('keahlian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keahlian = KompetensiKeahlian::findOrFail($id);
        $bstudi = BidangStudi::all();
        return view('backend.kompetensikeahlian.edit', compact('keahlian', 'bstudi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keahlian = KompetensiKeahlian::findOrFail($id);
        $keahlian->bidang_id = $request->nama_bidang;
        $keahlian->kompetensi_nama = $request->nama_kompetensi;
        $keahlian->save();

        return redirect()->route('kompetensi-keahlian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keahlian = KompetensiKeahlian::findOrFail($id);
        $keahlian->bidang_id;
        $keahlian->kompetensi_nama;
        $keahlian->delete();
        return redirect()->route('kompetensi-keahlian.index');
    }
}
