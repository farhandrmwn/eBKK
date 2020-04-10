<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all();
        return view('alumni/index',['alumni' => $alumni]);
    }

    public function tambah()
    {
        return view('alumni/tambah');
    }

    public function store(Request $request)
    {
        Alumni::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'status' => $request->status,
            'username' => $request->username,
            'password' =>$request->password
        ]);
        return redirect('/alumni');
    }

    public function edit($nis)
    {
        $alumni = Alumni::find($nis);
        return view('alumni/edit',['alumni' => $alumni]);
    }

    public function update($nis, Request $request)
    {
        $alumni = Alumni::find($nis);
        $alumni->nis = $request->nis;
        $alumni->nama = $request->nama;
        $alumni->jk = $request->jk;
        $alumni->alamat = $request->alamat;
        $alumni->no_hp = $request->no_hp;
        $alumni->email = $request->email;
        $alumni->status = $request->status;
        $alumni->username = $request->username;
        $alumni->password = $request->password;
        $alumni->save();
        return redirect('/alumni');
    }

    public function delete($nis)
    {
        $alumni = Alumni::find($nis);
        $alumni->delete();
        return redirect('/alumni');
    }

    public function show($nis)
    {
        $alumni = alumni::find($nis);
        return view('alumni.detail',['alumni' => $alumni]);
    }
}
