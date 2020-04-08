@extends('template/layout')

@section('judul_halaman','Lowongan')

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
                <div class="card-header">Input Data Lowongan</div>
                <div class="card-body">
                    <form action="{{route('lowongan.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-7 mt-2">
                                <label for="inputNama">Id Perusahaan</label>
                                <input type="text" name="id_perusahaan" id="inpuId" class="form-control">
                            </div>
                            <div class="form-group col-md-5 mt-2">
                                <label for="inputJenis">Jenis Lowongan</label>
                                <input type="text" name="jenis_lowongan" id="inputJenis" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="inputDeskripsi">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputSitus">Requirements</label>
                                <input type="text" name="requirements" id="inputRequirements" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputBahasa">Benefits</label>
                                <input type="text" name="benefits" id="inputBenefits" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('lowongan.index')}}" class="btn btn-sm btn-success">Back</a>
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection