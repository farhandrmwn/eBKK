<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Data Perusahaan Baru</h3>
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

        <form action="{{route('perusahaan.store')}}" method="post">
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
        </form>

    </div>