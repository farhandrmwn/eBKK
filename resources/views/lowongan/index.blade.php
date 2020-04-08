@extends('template/layout')


@section('judul_halaman','Lowongan')

@section('konten')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<div class="container">

    <div class="form-row mt-5">
        <h3 class="col-md-10 mt-5">List Lowongan</h3>
        <a class="btn btn-sm btn-success col-md-2 mt-5" href="{{ route('lowongan.create') }}">Tambah Data Lowongan</a>
    </div>



    <table class="table table-bordered table-hover table-sm text-center mt-3">
        <tr>
            <th>No</th>
            <th>ID Lowongan</th>
            <th>ID Perusahaan</th>
            <th>Jenis Lowongan</th>
            <th>Deskripsi</th>
            <th>Requirements</th>
            <th>Benefits</th>
            <th>Action</th>
        </tr>

        @foreach ($lowongan as $l)
        <tr>
            <td>{{++$i}}.</td>
            <td>{{$l->id_lowongan}}</td>
            <td>{{$l->id_perusahaan}}</td>
            <td>{{$l->jenis_lowongan}}</td>
            <td>{{$l->deskripsi}}</td>
            <td>{{$l->requirements}}</td>
            <td>{{$l->benefits}}</td>
            <td>
                <form action="{{ route('lowongan.destroy', $l->id_lowongan) }}" method="post">
                    <a class="btn btn-sm btn-success" href="{{route('lowongan.show',$l->id_lowongan)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{route('lowongan.edit',$l->id_lowongan)}}">Edit</a>
                    {{csrf_field()}}
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onClick="return confirm('Yakin?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection