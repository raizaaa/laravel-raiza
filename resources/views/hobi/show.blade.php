@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Hobi
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Hobi</label>
                            <input type="text" name="hobi" class="form-control" value="{{$hobi->hobi}}" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="btn btn-outline-primary btn-lg btn-block">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection