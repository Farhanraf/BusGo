@extends('layouts.admin')

@section('content')
<h1>Tambah User</h1>

<form action="{{ route('manageuser.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection