@extends('template')
@section('tulisan1','Tambah Barang')

@section('link1')
	<a href="/keranjangbelanja">Kembali</a>
@endsection

@section('konten')
	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
              <input type="text" name="KodeBarang" class= "form-control" id="KodeBarang" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="text" name="Jumlah" class= "form-control" id="Jumlah" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
              <input type="text" name="Harga" class= "form-control" id="Harga" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
          </div>
	</form>
@endsection
