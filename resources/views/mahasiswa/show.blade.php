@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data mahasiswa
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama mahasiswa</label>
                            <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" name="nim" class="form-control" value="{{$mahasiswa->nim}}" readonly>  
                        </div>
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="{{$mahasiswa->dosen->id}}" class="form-control" value="{{$mahasiswa->dosen->nama}}" readonly>  
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