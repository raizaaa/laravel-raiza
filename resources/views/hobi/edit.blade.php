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
                    <form action="{{route('hobi.update',$hobi->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <!-- @method('PUT') -->
                        @csrf
                        <div class="form-group">
                            <label for="">Hobi</label>
                            <input type="text" name="hobi" class="form-control" value="{{$hobi->hobi}}" required>
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