@extends('template/layout')

@section('judul_halaman','Perusahaan')

@section('konten')
<div class="container">
    <!-- <div class="row">
        <div class="col-lg-12">
            <h3>Data Perusahaan Baru</h3>
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

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Input Data Perusahaan</div>
                <div class="card-body">
                    <form action="{{route('perusahaan.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-7 mt-2">
                                <label for="inputNama">Nama</label>
                                <input type="text" name="nama" id="inputNama" class="form-control">
                            </div>
                            <div class="form-group col-md-5 mt-2">
                                <label for="inputJenis">Jenis Industri</label>
                                <input type="text" name="jenis_industri" id="inputJenis" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="inputAddress">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputSitus">Situs</label>
                                <input type="text" name="situs" id="inputSitus" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputBahasa">Bahasa</label>
                                <input type="text" name="bahasa" id="inputBahasa" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('perusahaan.index')}}" class="btn btn-sm btn-success">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

    <!-- <form action="{{route('perusahaan.store')}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <strong>Nama :</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col-md-12">
                <strong>Jenis Industri :</strong>
                <input type="text" name="jenis_industri" class="form-control" placeholder="Jenis Industri">
                </select>
            </div>
            <div class="col-md-12">
                <strong>Alamat :</strong>
                <input type="textarea" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col-md-12">
                <strong>Situs :</strong>
                <input type="text" name="situs" class="form-control" placeholder="Situs">
            </div>
            <div class="col-md-12">
                <strong>Bahasa :</strong>
                <input type="text" name="bahasa" class="form-control" placeholder="Bahasa">
            </div>
            <br>
            <div class="col-md-12">
                <a href="{{route('perusahaan.index')}}" class="btn btn-sm btn-success">Back</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
    </form> -->

        </div>
    </div>
</div>
@endsection