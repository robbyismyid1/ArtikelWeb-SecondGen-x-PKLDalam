<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BidangStudi;
use App\Role;
use Session; 

class BidangstudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bstudi = BidangStudi::all();
        return view('backend.bidangstudi.index', compact('bstudi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bstudi = BidangStudi::all();
        return view('backend.bidangstudi.create', compact('bstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bstudi = new BidangStudi();
        $bstudi->bidang_nama = $request->nama_bidang;
        $bstudi->save();

        return redirect()->route('bidang-studi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bstudi = BidangStudi::findOrFail($id);
        return view('backend.bidangstudi.show', compact('bstudi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bstudi = BidangStudi::findOrFail($id);
        return view('backend.bidangstudi.edit', compact('bstudi'));
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
        $bstudi = BidangStudi::findOrFail($id);
        $bstudi->bidang_nama = $request->nama_bidang;
        $bstudi->save();

        return redirect()->route('bidang-studi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bstudi = BidangStudi::findOrFail($id);
        $bstudi->bidang_nama;
        $bstudi->delete();
        return redirect()->route('bidang-studi.index');
    }
}
