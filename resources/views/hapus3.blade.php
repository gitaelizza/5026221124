@extends('template')

@section('tulisan1','Konfirmasi Hapus Data')

@section('link1')
    <a href="/karyawan1" class="btn btn-secondary">Batal</a>
@endsection

@section('konten')
    <h3>Apakah Anda yakin ingin menghapus data karyawan berikut?</h3>
    <table class="table table-bordered">
        <tr>
            <th>NIP</th>
            <td>{{ $karyawan1->NIP }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $karyawan1->Nama }}</td>
        </tr>
        <tr>
            <th>Pangkat</th>
            <td>{{ $karyawan1->Pangkat }}</td>
        </tr>
        <tr>
            <th>Gaji</th>
            <td>{{ number_format($karyawan1->Gaji,0,',','.') }}</td>
        </tr>
    </table>
    <form action="/karyawan1/hapus/{{ $karyawan1->NIP }}" method="post">
        {{ csrf_field() }}
        <input type="submit" value="Hapus Data" class="btn btn-danger">
    </form>
@endsection
