@extends('template/layout')
@section('judul_halaman','Alumni')
@section('konten')

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">Edit Data Alumni</div>
            <div class="card-body">
                <form action="/alumni/update/{{ $alumni->nis }}" method="post">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputNis">NIS</label>
                            <input type="number" name="nis" class="form-control" id="inputNis" value="{{ $alumni->nis }}">
                        </div>
                        <div class="form-group col-md-7 ">
                            <label for="inputNama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputNama" value="{{ $alumni->nama }}">
                        </div>
                        <div class="form-group col-md-2 ">
                            <label for="inputJk">Jenis Kelamin</label>
                            <select id="inputJk" name="jk" class="form-control">
                                <option value="{{ $alumni->jk }}"></option>
                                <option>L</option>
                                <option>P</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="inputAddress" value="{{ $alumni->alamat }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputHp">No. Handphone</label>
                            <input type="text" name="no_hp" class="form-control" id="inputHp" value="{{ $alumni->no_hp }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $alumni->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" name="status" class="form-control">
                            <option value="{{ $alumni->status }}"></option>
                            <option>Bekerja</option>
                            <option>Kuliah</option>
                            <option>Wirausaha</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputUser">Username</label>
                            <input type="text" name="username" class="form-control" id="inputUser" value="{{ $alumni->username }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPass">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPass" value="{{ $alumni->password }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>

@endsection