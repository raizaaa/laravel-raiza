@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data wali
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama wali</label>
                            <input type="text" name="nama" class="form-control" value="{{$wali->nama}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama mahasiswa</label>
                            <input type="text" name="{{$wali->mahasiswa->id}}" class="form-control" value="{{$wali->mahasiswa->nama}}" readonly>  
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