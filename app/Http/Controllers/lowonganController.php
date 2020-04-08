<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lowongan;

class lowonganController extends Controller
{
    public function index()
    {
        $lowongan = lowongan::latest()->paginate(10);
        return view('lowongan.index', compact('lowongan'))
                    ->with('i', (request()->input('page',1) -1)*5);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lowongan.create');
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
            'id_perusahaan' => 'required',
            'jenis_lowongan' => 'required',
            'deskripsi' => 'required',
            'requirements' => 'required',
            'benefits' => 'required'
        ]);

        lowongan::create($request->all());
        return redirect()->route('lowongan.index')
                        ->with('Succes','lowongan telah terdata!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lowongan = lowongan::find($id);
        return view('lowongan.detail', compact('lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lowongan = lowongan::find($id);
        return view('lowongan.edit', compact('lowongan'));
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
            'id_perusahaan' => 'required',
            'jenis_lowongan' => 'required',
            'deskripsi' => 'required',
            'requirements' => 'required',
            'benefits' => 'required'
        ]);

        $lowongan = lowongan::find($id);
        $lowongan->id_perusahaan = $request->get('id_perusahaan');
        $lowongan->jenis_lowongan = $request->get('jenis_lowongan');
        $lowongan->deskripsi = $request->get('deskripsi');
        $lowongan->requirements = $request->get('requirements');
        $lowongan->benefits = $request->get('benefits');
        $lowongan->save();
        return redirect()->route('lowongan.index')
                        ->with('Succes', 'Data lowongan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lowongan = lowongan::find($id);
        $lowongan->delete();
        return redirect()->route('lowongan.index')
                        ->with('Succes','Berhasil Menghapus Data');
    }
}
