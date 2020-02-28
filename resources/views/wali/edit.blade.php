@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Wali
                </div>
                <div class="card-body">
                    <form action="{{route('wali.update',$wali->id)}}" method="post">
                    <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama wali</label>
                            <input type="text" name="nama" class="form-control" value="{{$wali->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <select name="id_mahasiswa" class="form-control">
                            @foreach($mahasiswa as $data)
                            <option value="{{$data->id}}"
                            {{$data->id == $wali->id_mahasiswa ? "selected": ""}}>{{$data->nama}}</option>
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