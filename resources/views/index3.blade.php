@extends('template')

@section('tulisan1','Data Karyawan')

@section('link1')
	<a href="/karyawan1/tambah" class="btn btn-primary"> Tambah Data </a>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{number_format($k->Gaji,0,',','.')}}</td>
			<td>
				<a href="/karyawan1/hapus/{{ $k->NIP }}" class="btn btn-danger">Hapus Data</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection

