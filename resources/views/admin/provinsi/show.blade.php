@extends('layouts.backend')
@section('active')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Lihat Provinsi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Provinsi</li>
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
            Form Lihat Data Provinsi
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="kode_provinsi" class="control-label">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" id="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_provinsi" class="control-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" id="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <a href="{{url()->previous()}}" class="btn btn-success"><i class="fa fa-chevron-circle-left"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endSection