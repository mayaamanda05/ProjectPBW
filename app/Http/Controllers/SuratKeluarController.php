<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\suratkeluar;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratkeluars = suratkeluar::all();
        return view('surat_keluar.index', ['suratkeluars' => $suratkeluars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_keluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'no_surat' => 'required',
            'judul' => 'required',
            'pengirim' => 'required',
            'tanggal_keluar' => 'required',
        ]);


        suratkeluar::create($request->all());
        return redirect('/surat_keluar')->with('status', 'surat berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('surat_keluar.detail', ['suratkeluar'=>suratkeluar::findorfail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(suratkeluar $suratkeluar)
    {
        return view('surat_keluar.edit', compact('suratkeluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,suratkeluar $suratkeluar)
    {

        $request->validate([
            'no_surat' => 'required',
            'judul' => 'required',
            'pengirim' => 'required',
            'tanggal_keluar' => 'required',
        ]);


        suratkeluar::where ('id', $suratkeluar->id)
                ->update([
                    'no_surat' => $request->no_surat,
                    'judul' => $request->judul,
                    'pengirim' => $request->pengirim,
                    'tanggal_keluar'=>$request->tanggal_keluar
                ]);
        return redirect('/surat_keluar')->with('status', 'Info surat berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(suratkeluar $suratkeluar)
    {
        suratkeluar::destroy($suratkeluar->id);
        return redirect('/surat_keluar')->with('status', 'Surat berhasil dihapus dari daftar!');

    }
}
