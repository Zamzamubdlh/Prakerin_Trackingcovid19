@extends('layouts.backend')
@section('active')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Tambah Kelurahan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Kelurahan</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            Form Tambah Data Kelurahan
        </div>
        <div class="card-body">
            <form action="{{route('kelurahan.store')}}" method="POST">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="id_kecamatan">Nama Kecamatan</label>
                        <select name="id_kecamatan" id="id_kecamatan" class="form-control">
                            @foreach ($kecamatan as $data)
                            <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kelurahan" class="control-label">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" id="nama_kelurahan" class="form-control @error('nama_kelurahan') is-invalid @enderror" value="{{ old('nama_kelurahan')}}" autofocus>
                        @error('nama_kelurahan')
                        <div class="invalid_feedback" style="color:red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endSection