<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
            <h3>List Perusahaan</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{ route('perusahaan.create') }}">Tambah Data Perusahaan</a>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

        <table class="table table-hover table-sm"">
            <tr>
                <th width = "50px"><b>No.</b></th>
                <th width = "150px"><b>ID Perusahaan</b></th>
                <th width = "150px"><b>Nama</b></th>
                <th width = "150px"><b>Jenis Industri</b></th>
                <th width = "150px"><b>Alamat</b></th>
                <th width = "150px"><b>Situs</b></th>
                <th width = "150px"><b>Bahasa</b></th>
                <th width = "180px">Action</th>
            </tr>

        @foreach ($perusahaan as $p)
            <tr>
                <td><b>{{++$i}}.</b></td>
                <td>{{$p->id_perusahaan}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->jenis_industri}}</td>
                <td>{{$p->alamat}}</td>
                <td>{{$p->situs}}</td>
                <td>{{$p->bahasa}}</td>
                <td>
                    <form action="{{ route('perusahaan.destroy', $p->id_perusahaan) }}" method="post">
                        <a class="btn btn-sm btn-success" href="{{route('perusahaan.show',$p->id_perusahaan)}}">Show</a>
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