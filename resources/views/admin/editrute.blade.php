@extends('layouts.admin')

@section('content')
<style>
    .form-container {
        width: 60%;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .form-container form div {
        margin-bottom: 15px;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }
</style>

<div class="form-container">
    <h1>Edit Rute</h1>

    <form action="{{ route('rute.update', $rute->id_rute) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Kota Awal</label>
            <input type="text" name="kota_awal" value="{{ $rute->kota_awal }}" required>
        </div>
        <div>
            <label>Kota Tujuan</label>
            <input type="text" name="kota_tujuan" value="{{ $rute->kota_tujuan }}" required>
        </div>
        <div>
            <label>Jarak (km)</label>
            <input type="number" step="0.1" name="jarak" value="{{ $rute->jarak }}" required>
        </div>
        <div>
            <label>Harga (Rp)</label>
            <input type="number" step="0.01" name="harga" value="{{ $rute->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Rute</button>
    </form>
</div>
@endsection
