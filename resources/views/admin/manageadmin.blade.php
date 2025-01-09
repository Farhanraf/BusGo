<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/admin/manageadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div style="text-align: center;">
            <img src="/img/BUSGo.png" alt="Logo">
        </div>
        <ul>
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="/order">Orders</a></li>
            <li><a href="/managebus">Manage Bus</a></li>
            <li><a href="/managejadwal">Manage Jadwal</a></li>
            <li><a href="/manageadmin">Manage Admin</a></li>
            <li><a href="/manageuser">Manage Users</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>@yield('header-title')</h1>
            <div class="user-info">
                <button id="userButton">Welcome, {{ Auth::guard('admin')->user()->username }}</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile"><i class="fas fa-user-circle"></i> Ubah Profile</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </header>

        @extends('layouts.app')

        @section('title', 'Manage Admin')
        @section('header-title', 'Manage Admin')

        @section('content')
        <div class="container">
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

            <h2>List Admin</h2>
            @if(isset($admins) && $admins->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{ $admin->id_admin }}</td>
                        <td>{{ $admin->username }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $admin->id_admin) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.destroy', $admin->id_admin) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus admin ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="text-center">Tidak ada data admin.</p>
            @endif

            <!-- Form Edit Admin -->
            <div id="editAdminForm" style="display: none;">
                <h3>Edit Admin</h3>
                <form action="{{ route('admin.update', ['id_admin' => '__ID__']) }}" method="POST" id="editForm">
                    @csrf
                    @method('PUT')

                    <!-- Hidden input untuk ID Admin -->
                    <input type="hidden" id="editAdminId" name="id_admin">

                    <div class="form-group">
                        <label for="editUsername">Username</label>
                        <input type="text" id="editUsername" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="editPassword">Password</label>
                        <input type="password" id="editPassword" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Admin</button>
                </form>
            </div>


        </div>
        @endsection

        <div class="content">
            @yield(section: 'content')
        </div>
    </div>

    <script src="js/admin/manageadmin.js"></script>
</body>

</html>