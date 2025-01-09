<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rute - Admin Page</title>
    <link rel="stylesheet" href="css/admin/manageusers.css">
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
            <li><a href="/manageuser" class="active">Manage Users</a></li>
            <li><a href="/managerutes">Manage Rute</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <dclass="main-content">
        <header>
            <h1>Manage Rute</h1>
            <div class="user-info">
                <button id="userButton">Welcome, {{ Auth::guard('admin')->user()->username }}</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile"><i class="fas fa-user-circle"></i> Ubah Profile</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </header>

        <div class="container mt-5">
            <h2>Manage Rute</h2>

            <!-- Pesan sukses/error -->
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Form Tambah Rute -->
            <form action="{{ route('rute.store') }}" method="POST" class="mb-4">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="kota_awal" class="form-control" placeholder="Kota Awal" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="kota_tujuan" class="form-control" placeholder="Kota Tujuan" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="jarak" step="0.01" class="form-control" placeholder="Jarak (km)" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="harga" step="0.01" class="form-control" placeholder="Harga (Rp)" required>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>

            <!-- Tabel Daftar Rute -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kota Awal</th>
                        <th>Kota Tujuan</th>
                        <th>Jarak (km)</th>
                        <th>Harga (Rp)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rutes as $rute)
                    <tr>
                        <td>{{ $rute->id_rute }}</td>
                        <td>{{ $rute->kota_awal }}</td>
                        <td>{{ $rute->kota_tujuan }}</td>
                        <td>{{ $rute->jarak }}</td>
                        <td>{{ $rute->harga }}</td>
                        <td>
                            <form action="{{ route('rute.destroy', $rute->id_rute) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        </div>

        <script src="js/admin.js"></script>
</body>

</html>