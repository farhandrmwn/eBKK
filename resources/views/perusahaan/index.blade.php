@extends('template/layout')


@section('judul_halaman','Perusahaan')

@section('konten')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<div class="container">

    <div class="form-row mt-5">
        <h3 class="col-md-10 mt-5">List Perusahaan</h3>
        <a class="btn btn-sm btn-success col-md-2 mt-5" href="{{ route('perusahaan.create') }}">Tambah Data Perusahaan</a>
    </div>



    <table class="table table-bordered table-hover table-sm text-center mt-3">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Industri</th>
            <th>Alamat</th>
            <th>Situs</th>
            <th>Bahasa</th>
            <th>Action</th>
        </tr>

        @foreach ($perusahaan as $p)
        <tr>
            <td>{{++$i}}.</td>
            <td hidden="true">{{$p->id_perusahaan}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->jenis_industri}}</td>
            <td>{{$p->alamat}}</td>
            <td>{{$p->situs}}</td>
            <td>{{$p->bahasa}}</td>
            <td>
                <form action="{{ route('perusahaan.destroy', $p->id_perusahaan) }}" method="post">
                    <!-- <a class="btn btn-sm btn-success" href="{{route('perusahaan.show',$p->id_perusahaan)}}">Show</a> -->
                    <a class="btn btn-sm btn-warning" href="{{route('perusahaan.edit',$p->id_perusahaan)}}">Edit</a>
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