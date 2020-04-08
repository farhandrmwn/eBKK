@extends('template/layout')

@section('judul_halaman','Alumni')

@section('konten')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whooops! </strong> There where some problems with your input.<br>
        <ul>
            @foreach($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Input Data Alumni</div>
                <div class="card-body">
                    <form action="/alumni/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputNis">NIS</label>
                                <input type="number" name="nis" class="form-control" id="inputNis">
                            </div>
                            <div class="form-group col-md-7 ">
                                <label for="inputNama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputNama">
                            </div>
                            <div class="form-group col-md-2 ">
                                <label for="inputJk">Jenis Kelamin</label>
                                <select id="inputJk" name="jk" class="form-control">
                                    <option selected>L / P</option>
                                    <option>L</option>
                                    <option>P</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="inputAddress">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputHp">No. Handphone</label>
                                <input type="text" name="no_hp" class="form-control" id="inputHp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <select id="inputStatus" name="status" class="form-control">
                                <option selected>Pilih Status</option>
                                <option>Bekerja</option>
                                <option>Kuliah</option>
                                <option>Wirausaha</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputUser">Username</label>
                                <input type="text" name="username" class="form-control" id="inputUser">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPass">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPass">
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
</div>

@endsection