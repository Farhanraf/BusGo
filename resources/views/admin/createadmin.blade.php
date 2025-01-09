<!-- resources/views/admin/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Tambah Admin</h2>
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Admin</button>
    </form>
@endsection
