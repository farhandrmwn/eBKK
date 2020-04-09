@extends('template/master')
@section('konten')

<div class="container content mt-5">
    <div class="row">
        <div class="col-md-6 mt-5" id="piechart"></div>
        <div class="col-md-6 mt-5">
            <div class="row">
                <span class="h4 mt-5 ml-3">Lowongan Terbaru</span>
            </div>
            <div class="card mt-2" style="width: 20rem;" data-spy="scroll" data-offset="0">
                <div class="card-body">
                    <div class="card-body border">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    </div>
                    <div class="card-body border mt-2">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    </div>
                    <div class="card-body border mt-2">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection