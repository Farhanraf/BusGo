@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Rute</h1>

    <!-- Form Edit Rute -->
    <form action="{{ route('rute.update', $rute->id_rute) }}" method="POST" class="mb-4">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="kota_awal" class="form-control" placeholder="Kota Awal" value="{{ old('kota_awal', $rute->kota_awal) }}" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="kota_tujuan" class="form-control" placeholder="Kota Tujuan" value="{{ old('kota_tujuan', $rute->kota_tujuan) }}" required>
            </div>
            <div class="col-md-2">
                <input type="number" step="0.1" name="jarak" class="form-control" placeholder="Jarak (km)" value="{{ old('jarak', $rute->jarak) }}" required>
            </div>
            <div class="col-md-2">
                <input type="number" step="0.01" name="harga" class="form-control" placeholder="Harga (Rp)" value="{{ old('harga', $rute->harga) }}" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success">Update Rute</button>
            </div>
        </div>
    </form>
</div>
@endsection
