@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Bus</h2>

    <!-- Pesan Error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Edit Bus -->
    <form action="{{ route('bus.update', $bus->id_bus) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_bus">Nama Bus</label>
            <input type="text" name="nama_bus" class="form-control" value="{{ $bus->nama_bus }}" required>
        </div>

        <div class="form-group">
            <label for="kapasitas">Kapasitas</label>
            <input type="number" name="kapasitas" class="form-control" value="{{ $bus->kapasitas }}" required>
        </div>

        <div class="form-group">
            <label for="plat_nomor">Plat Nomor</label>
            <input type="text" name="plat_nomor" class="form-control" value="{{ $bus->plat_nomor }}" required>
        </div>

        <div class="form-group">
            <label for="supir">Supir</label>
            <input type="text" name="supir" class="form-control" value="{{ $bus->supir }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

<style>
    .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    color: #555;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-control:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn-primary {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.alert-danger {
    padding: 10px;
    color: white;
    background-color: #dc3545;
    border-radius: 4px;
    margin-bottom: 20px;
}

.alert-danger ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

</style>
@endsection
