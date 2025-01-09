@extends('layouts.app')

@section('title', 'Edit Admin')
@section('header-title', 'Edit Admin')

@section('content')
<div class="container">
    <h2>Edit Admin</h2>

    <form action="{{ route('admin.update', $admin->id_admin) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" value="{{ old('username', $admin->username) }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Leave blank if not changing">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Admin</button>
    </form>
</div>
@endsection
