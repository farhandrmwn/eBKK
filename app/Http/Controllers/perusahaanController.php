<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perusahaan;

class perusahaanController extends Controller
{
    public function index()
    {
        $perusahaan = perusahaan::latest()->paginate(10);
        return view('perusahaan.index', compact('perusahaan'))
                    ->with('i', (request()->input('page',1) -1)*5);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan.create');
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
            'nama' => 'required',
            'jenis_industri' => 'required',
            'alamat' => 'required',
            'situs' => 'required',
            'bahasa' => 'required'
        ]);

        perusahaan::create($request->all());
        return redirect()->route('perusahaan.index')
                        ->with('Succes','Perusahaan telah terdata!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perusahaan = perusahaan::find($id);
        return view('perusahaan.detail', compact('perusahaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perusahaan = perusahaan::find($id);
        return view('perusahaan.edit', compact('perusahaan'));
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
        $request->validate([
            'nama' => 'required',
            'jenis_industri' => 'required',
            'alamat' => 'required',
            'situs' => 'required',
            'bahasa' => 'required'
        ]);

        $perusahaan = perusahaan::find($id);
        $perusahaan->nama = $request->get('nama');
        $perusahaan->jenis_industri = $request->get('jenis_industri');
        $perusahaan->alamat = $request->get('alamat');
        $perusahaan->situs = $request->get('situs');
        $perusahaan->bahasa = $request->get('bahasa');
        $perusahaan->save();
        return redirect()->route('perusahaan.index')
                        ->with('Succes', 'Data Perusahaan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perusahaan = perusahaan::find($id);
        $perusahaan->delete();
        return redirect()->route('perusahaan.index')
                        ->with('Succes','Berhasil Menghapus Data');
    }
}
