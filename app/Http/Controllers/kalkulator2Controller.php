<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator2Controller extends Controller
{
    public function index()
    {
        return view('kalkulator.kalkulator2');
    }
    public function store(Request $request)
    {
        $angka1=$request->angka1;
        $angka2=$request->angka2;
        $operator=$request->op;
        $hasil=$request->hasil;

        if($operator == 'tambah'){
            $hasil = $angka1+$angka2;
        }
        elseif($operator == 'kurang')
        {
            $hasil = $angka1-$angka2;
        }
        elseif($operator == 'kali')
        {
            $hasil = $angka1*$angka2;
        }
        elseif($operator == 'bagi')
        {
            if($angka1 == 0)
            {
                $hasil = 'Error';
            }
            else{
                $hasil = $angka1/$angka2;
            }
        }
        elseif($operator='reset')
        {
            return redirect()->route('kalkulator');
        }
        else{
            $hasil = 'ERROR';
        }
        return view('kalkulator1.hasil', compact('hasil'));

    }
}