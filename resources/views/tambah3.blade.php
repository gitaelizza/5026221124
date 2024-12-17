@extends('template')
@section('tulisan1','Tambah Data')

@section('link1')
	<a href="/karyawan1">Kembali</a>
@endsection

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@section('konten')
	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
              <input type="text" name="NIP" class= "form-control" id="NIP" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="Nama" class= "form-control" id="Nama" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="Pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-10">
              <input type="text" name="Pangkat" class= "form-control" id="Pangkat" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
              <input type="text" name="Gaji" class= "form-control" id="Gaji" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
          </div>
	</form>
@endsection
