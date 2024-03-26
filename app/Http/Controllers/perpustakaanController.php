<?php

namespace App\Http\Controllers;
use App\Models\perpustakaan;
use Illuminate\Http\Request;

class perpustakaanController extends Controller
{
    public function index(){
$pustakas = perpustakaan::all();
return view('perpustakaan.index', compact ('pustakas'));
    }
    //

public function create()
{
    return view('perpustakaan.create');

}
public function store(Request $request)
    {
        $this->validate($request,[
            'judul_buku'=>'required',
            'penerbit'=>'required',
            'jumlah_buku'=>'required',
        ]);

        perpustakaan::create([
            'judul_buku'=>$request->judul_buku,
            'penerbit'=>$request->penerbit,
            'jumlah_buku'=>$request->jumlah_buku,
        ]);

        return redirect()->route('perpustakaan.index');
    }

    public function edit(perpustakaan $perpustakaan)
    {
        return view('perpustakaan.edit', compact('perpustakaan'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul_buku'=>'required',
            'penerbit'=>'required',
            'jumlah_buku'=>'required',
        ]);

        $perpustakaan=perpustakaan::find($id);
        $perpustakaan->update([
            'judul_buku'=>$request->judul_buku,
            'penerbit'=>$request->penerbit,
            'jumlah_buku'=>$request->jumlah_buku
        ]);

        return redirect()->route('perpustakaan.index');
    }
    public function destroy($id)
    {
        $perpustakaan=perpustakaan::find($id);
        $perpustakaan->delete();

        return redirect()->route('perpustakaan.index');
    }
}
