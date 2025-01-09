@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Rute</h2>

    <form action="{{ route('rute.update', $rute->id_rute) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kota_awal" class="form-label">Kota Awal</label>
            <input type="text" class="form-control" id="kota_awal" name="kota_awal" value="{{ $rute->kota_awal }}" required>
        </div>

        <div class="mb-3">
            <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
            <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" value="{{ $rute->kota_tujuan }}" required>
        </div>

        <div class="mb-3">
            <label for="jarak" class="form-label">Jarak</label>
            <input type="number" class="form-control" id="jarak" name="jarak" value="{{ $rute->jarak }}" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $rute->harga }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
