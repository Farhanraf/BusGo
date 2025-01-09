@extends('layouts.app')

@section('content')
<div class="container">
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
                    {{ $rute->nama_rute }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="waktu_berangkat">Waktu Berangkat</label>
            <input type="datetime-local" name="waktu_berangkat" id="waktu_berangkat"
                class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($jadwal->waktu_berangkat)) }}" required>
        </div>

        <div class="form-group">
            <label for="waktu_tiba">Waktu Tiba</label>
            <input type="datetime-local" name="waktu_tiba" id="waktu_tiba"
                class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($jadwal->waktu_tiba)) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Jadwal</button>
    </form>
</div>
@endsection