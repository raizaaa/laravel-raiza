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
                    <form action="{{route('dosen.update',$dosen->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <!-- @method('PUT') -->
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="nama" class="form-control" value="{{$dosen->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Induk Pegawai Dosen</label>
                            <input type="text" name="nipd" class="form-control" value="{{$dosen->nipd}}" required>  
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin?')">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection