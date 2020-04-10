@extends('template/layout')

@section('judul_halaman','Alumni')
@section('konten')

<div class="container">

    <div class="form-row mt-5">
        <h3 class="col-md-10 mt-5">Data Alumni</h3>
        <a href="/alumni/tambah" class="btn btn-sm btn-success col-md-2 mt-5">Tambah Data Alumni</a>
    </div>
<br>
    <table id="table-datatables"class="table table-bordered table-hover table-sm text-center mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Handphone</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>

        @foreach ($alumni as $a)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->nis }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->jk }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->no_hp }}</td>
                <td>{{ $a->status }}</td>
                <td>
                    <a class="btn btn-sm btn-success" href="/alumni/detail{{ $a->nis }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="/alumni/edit/{{ $a->nis }}">Edit</a>
                    <a class="btn btn-sm btn-danger" onClick="return confirm('Yakin?')" href="/alumni/delete/{{ $a->nis }}">Hapus</a>
                    <!-- <button type="submit" class="btn btn-sm btn-danger" onClick="return confirm('Yakin?')">Delete</button> -->
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table-datatables').DataTable();
    } );
</script>

@endsection