<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\suratmasuk;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratmasuks = suratmasuk::all();
        return view('surat_masuk.index', ['suratmasuks' => $suratmasuks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_masuk.create');
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
            'tanggal_masuk' => 'required',
        ]);


        suratmasuk::create($request->all());
        return redirect('/surat_masuk')->with('status', 'surat berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('surat_masuk.detail', ['suratmasuk'=>suratmasuk::findorfail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(suratmasuk $suratmasuk)
    {
        return view('surat_masuk.edit', compact('suratmasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,suratmasuk $suratmasuk)
    {

        $request->validate([
            'no_surat' => 'required',
            'judul' => 'required',
            'pengirim' => 'required',
            'tanggal_masuk' => 'required',
        ]);


        suratmasuk::where ('id', $suratmasuk->id)
                ->update([
                    'no_surat' => $request->no_surat,
                    'judul' => $request->judul,
                    'pengirim' => $request->pengirim,
                    'tanggal_masuk'=>$request->tanggal_masuk
                ]);
        return redirect('/surat_masuk')->with('status', 'Info surat berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(suratmasuk $suratmasuk)
    {
        suratmasuk::destroy($suratmasuk->id);
        return redirect('/surat_masuk')->with('status', 'Surat berhasil dihapus dari daftar!');

    }
}
