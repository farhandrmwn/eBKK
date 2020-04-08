@extends('template/layout')

@section('judul_halaman','Perusahaan')

@section('konten')
<div class="container">
    <!-- <div class="row">
        <div class="col-lg-12">
            <h3>Edit Data Perusahaan</h3>
        </div>
    </div> -->

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

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">Input Data Perusahaan</div>
                    <div class="card-body">
                        <form action="{{route('perusahaan.update',$perusahaan->id_perusahaan)}}" method="post">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-row ">
                                <div class="form-group col-md-7 mt-2">
                                    <label for="inputNama">Nama</label>
                                    <input type="text" name="nama" id="inputNama" class="form-control" value="{{$perusahaan->nama}}">
                                </div>
                                <div class="form-group col-md-5 mt-2">
                                    <label for="inputJenis">Jenis Industri</label>
                                    <input type="text" name="jenis_industri" id="inputJenis" class="form-control" value="{{$perusahaan->jenis_industri}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="inputAddress" value="{{$perusahaan->alamat}}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputSitus">Situs</label>
                                    <input type="text" name="situs" id="inputSitus" class="form-control" value="{{$perusahaan->situs}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputBahasa">Bahasa</label>
                                    <input type="text" name="bahasa" id="inputBahasa" class="form-control" value="{{$perusahaan->bahasa}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{route('perusahaan.index')}}" class="btn btn-sm btn-success">Back</a>
                                <button type="submit" class="btn btn-sm btn-primary float-right">Update</button>
                            </div>
                        </form>

        <!-- <form action="{{route('perusahaan.update',$perusahaan->id_perusahaan)}}" method="post">
            {{csrf_field()}}
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" class="form-control" value="{{$perusahaan->nama}}">
                </div>
                <div class="col-md-12">
                    <strong>Jenis Industri :</strong>
                    <input type="text" name="jenis_industri" class="form-control" value="{{$perusahaan->jenis_industri}}">
                </div>
                <div class="col-md-12">
                    <strong>Alamat :</strong>
                    <input type="text" name="alamat" class="form-control" value="{{$perusahaan->alamat}}">
                </div>
                <div class="col-md-12">
                    <strong>Situs :</strong>
                    <input type="text" name="situs" class="form-control" value="{{$perusahaan->situs}}">
                </div>
                <div class="col-md-12">
                    <strong>Bahasa :</strong>
                    <input type="text" name="bahasa" class="form-control" value="{{$perusahaan->bahasa}}">
                </div>
                <br>
                <div class="col-md-12">
                    <a href="{{route('perusahaan.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
            </div>
        </form> -->

                    </div>
                </div>
            </div>
        </div>