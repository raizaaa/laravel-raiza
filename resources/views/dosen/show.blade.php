@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Dosen
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="nama" class="form-control" value="{{$dosen->nama}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Induk Pegawai Dosen</label>
                            <input type="text" name="nipd" class="form-control" value="{{$dosen->nipd}}" readonly>  
                        </div>
                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection