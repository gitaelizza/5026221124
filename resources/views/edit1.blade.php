@extends('template')
@section('tulisan1','Edit Baju')

@section('link1')
	<a href="/baju">Kembali</a>
@endsection

@section('konten')
	@foreach($baju as $b)
	<form action="/baju/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kodebaju" value="{{ $b->kodebaju }}"> <br/>
        <div class="row mb-3">
            <label for="kode" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
                <input type="number" name="kodebaju" class= "form-control" id="kode" required="required" value = "{{$b->kodebaju}}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merkbaju" class= "form-control" id="merk" required="required" value = "{{$b->merkbaju}}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="number" name="stockbaju" class= "form-control" id="stock" required="required" value = "{{$b->stockbaju}}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <input type="checkbox" id="tersedia-checkbox" disabled {{ $b->stockbaju > 0 ? 'checked' : '' }}>
            </div>
        </div>


          <div class="row mb-3">
            <div class="col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
          </div>

	</form>

    <script>
        function updateCheckbox() {
            const stock = document.getElementById('stock').value;
            const checkbox = document.getElementById('tersedia-checkbox');
            checkbox.checked = stock > 0;
        }
    </script>

	@endforeach
@endsection


