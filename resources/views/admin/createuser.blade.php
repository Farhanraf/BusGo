@extends('layouts.admin')

@section('content')
<h1 class="title">Tambah User</h1>

<form action="{{ route('manageuser.store') }}" method="POST" class="form-container">
    @csrf
    <div class="form-group">
        <label for="username" class="form-label">Username:</label>
        <input type="text" name="username" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button type="submit" class="btn-submit">Simpan</button>
</form>

<style>
    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-container {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn-submit {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>
@endsection