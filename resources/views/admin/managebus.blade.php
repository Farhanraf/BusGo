<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bus - Admin Page</title>
    <link rel="stylesheet" href="css/admin/managebus.css">
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
            <li><a href="/managebus" class="active">Manage Bus</a></li>
            <li><a href="/managejadwal">Manage Jadwal</a></li>
            <li><a href="/manageadmin">Manage Admin</a></li>
            <li><a href="/manageuser">Manage Users</a></li>
            <li><a href="/managerutes">Manage Rute</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Manage Bus</h1>
            <div class="user-info">
                <button id="userButton">Welcome, {{ Auth::guard('admin')->user()->username }}</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile"><i class="fas fa-user-circle"></i> Ubah Profile</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </header>

        <section id="content">
            <div class="manage-bus">

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- Form Tambah Bus -->
                <form action="{{ route('bus.store') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="nama_bus" class="form-control" placeholder="Nama Bus" required>
                        </div>
                        <div class="col-md-2">
                            <input type="number" name="kapasitas" class="form-control" placeholder="Kapasitas" required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="plat_nomor" class="form-control" placeholder="Plat Nomor" required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="supir" class="form-control" placeholder="Supir" required>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>

                <!-- Tabel Daftar Bus -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Bus</th>
                            <th>Kapasitas</th>
                            <th>Plat Nomor</th>
                            <th>Supir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buses as $bus)
                        <tr>
                            <td>{{ $bus->id_bus }}</td>
                            <td>{{ $bus->nama_bus }}</td>
                            <td>{{ $bus->kapasitas }}</td>
                            <td>{{ $bus->plat_nomor }}</td>
                            <td>{{ $bus->supir }}</td>
                            <td>
                                <a href="{{ route('bus.edit', $bus->id_bus) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('bus.destroy', $bus->id_bus) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus bus ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        
    </div>

    <script src="js/admin.js"></script>
</body>

</html>