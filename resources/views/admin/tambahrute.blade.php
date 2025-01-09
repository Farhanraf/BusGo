@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Rute Baru</h2>

    <form action="{{ route('rute.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="kota_awal" class="form-label">Kota Awal</label>
            <input type="text" class="form-control" id="kota_awal" name="kota_awal" required>
        </div>

        <div class="mb-3">
            <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
            <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" required>
        </div>

        <div class="mb-3">
            <label for="jarak" class="form-label">Jarak</label>
            <input type="number" class="form-control" id="jarak" name="jarak" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
