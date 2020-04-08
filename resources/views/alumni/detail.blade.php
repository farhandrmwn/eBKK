@extends('/template/layout');
@section('judul_halaman','Alumni')
@section('konten')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Detail alumni</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>NIS :</strong> {{$alumni['nis']}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nama :</strong> {{$alumni['nama']}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong> {{$alumni['jk']}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong> {{$alumni['alamat']}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>No.Handphone :</strong> {{$alumni['no_hp']}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Email :</strong> {{$alumni['email']}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Username :</strong> {{$alumni['username']}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Password :</strong> {{$alumni['password']}}
            </div>
        </div>
        <div class="col-md-12">
            <a href="/alumni/index" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</div>
</div>

@endsection