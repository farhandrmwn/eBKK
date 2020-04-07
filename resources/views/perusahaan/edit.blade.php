<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Edit Data Perusahaan</h3>
            </div>
        </div>

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

        <form action="{{route('perusahaan.update',$perusahaan->id_perusahaan)}}" method="post">
        {{csrf_field()}}
        @method('PUT')
        <div class="row">
                <div class="col-md-12">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" class="form-control"value="{{$perusahaan->nama}}">
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
        </form>

    </div>