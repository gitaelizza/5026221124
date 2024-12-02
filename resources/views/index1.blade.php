@extends('template')

@section('tulisan1','Data Baju')

@section('link1')
	<a href="/baju/tambah" class="btn btn-primary"> + Tambah Baju Baru</a>
@endsection
@section('konten')
	<br/>
	<form action="/baju/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Nama Baju:</label>
            <div class="col-sm-6">
                <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Baju .." value="{{ old('cari') }}">
              </div>
              <div class="col-sm-4">
		        <input type="submit" value="CARI" class="btn btn-success">
              </div>
	</form>
	<br/>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($baju as $b)
		<tr>
			<td>{{ $b->kodebaju }}</td>
			<td>{{ $b->merkbaju }}</td>
			<td>{{ $b->stockbaju }}</td>
			<td><input type="checkbox" disabled {{ $b->tersedia == 'Y' ? 'checked' : '' }}></td>
			<td>
				<a href="/baju/edit/{{ $b->kodebaju }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/baju/hapus/{{ $b->kodebaju }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $baju->currentPage() }} <br/>
	Jumlah Data : {{ $baju->total() }} <br/>
	Data Per Halaman : {{ $baju->perPage() }} <br/>


	{{ $baju->links() }}

@endsection
