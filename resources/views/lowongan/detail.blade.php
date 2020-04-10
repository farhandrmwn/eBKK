<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Detail Lowongan</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>ID Lowongan :</strong> {{$lowongan['id_lowongan']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>ID Perusahaan :</strong> {{$lowongan['id_perusahaan']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Jenis Lowongan :</strong> {{$lowongan['jenis_lowongan']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Deskripsi :</strong> {{$lowongan['deskripsi']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Requirements :</strong> {{$lowongan['requirements']}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Benefits :</strong> {{$lowongan['benefits']}}
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{route('lowongan.index')}}" class="btn btn-sm btn-success">Back</a>
            </div>
        </div>
    </div>