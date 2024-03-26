<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use App\Models\pustaka;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class peminjamancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth::user();
        $pinjams = peminjam::all();
        return view('peminjam.index', compact('pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjam = peminjam::all();
        return view('peminjam.create', compact('peminjam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id'=>'required',
            'buku_id'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required',
            'pengurus'=>'required'
        ]);

        peminjam::create([
            'user_id'=>$request->user_id,
            'buku_id'=>$request->buku_id,
            'tgl_pinjam'=>$request->tgl_pinjam,
        'tgl_kembali'=>$request->tgl_kembali,
       'pengurus'=>$request->pengurus
        ]);

        return redirect()->route('pinjam.index');
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
