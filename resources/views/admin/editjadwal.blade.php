@extends('layouts.admin')

@section('content')
<h1>Edit Jadwal</h1>

<form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="id_bus">Bus</label>
        <select name="id_bus" id="id_bus" class="form-control">
            @foreach ($buses as $bus)
            <option value="{{ $bus->id_bus }}" {{ $jadwal->id_bus == $bus->id_bus ? 'selected' : '' }}>
                {{ $bus->nama_bus }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="id_rute">Rute</label>
        <select name="id_rute" id="id_rute" class="form-control">
            @foreach ($rutes as $rute)
            <option value="{{ $rute->id_rute }}" {{ $jadwal->id_rute == $rute->id_rute ? 'selected' : '' }}>
                {{ $rute->kota_awal }} - {{ $rute->kota_tujuan }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="waktu_berangkat">Waktu Berangkat</label>
        <input type="datetime-local" name="waktu_berangkat" id="waktu_berangkat" class="form-control"
            value="{{ $jadwal->waktu_berangkat }}" required>
    </div>

    <div class="form-group">
        <label for="waktu_tiba">Waktu Tiba</label>
        <input type="datetime-local" name="waktu_tiba" id="waktu_tiba" class="form-control"
            value="{{ $jadwal->waktu_tiba }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update Jadwal</button>
</form>

<style>
    /* Styling untuk form container */
form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Judul halaman */
h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

/* Styling untuk form group */
.form-group {
    margin-bottom: 15px;
}

/* Label styling */
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

/* Input dan select styling */
.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

/* Button styling */
button[type="submit"] {
    width: 100%;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #28a745;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Hover effect untuk button */
button[type="submit"]:hover {
    background-color: #218838;
}

</style>
@endsection