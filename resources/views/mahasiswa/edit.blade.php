@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post">
                    <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" name="nim" class="form-control" value="{{$mahasiswa->nim}}" required>  
                        </div>
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <select name="id_dosen" class="form-control">
                            @foreach($dosen as $data)
                            <option value="{{$data->id}}"
                            {{$data->id == $mahasiswa->id_dosen ? "selected": ""}}>{{$data->nama}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" onclick="return confirm('Apakah anda yakin?')">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection