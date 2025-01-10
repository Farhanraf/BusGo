<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Jadwal - Admin Page</title>
    <link rel="stylesheet" href="css/admin/managejadwal.css">
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
            <li><a href="/managejadwal" class="active">Manage Jadwal</a></li>
            <li><a href="/manageadmin">Manage Admin</a></li>
            <li><a href="/manageuser">Manage Users</a></li>
            <li><a href="/managerutes">Manage Rute</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Manage Jadwal</h1>
            <div class="user-info">
                <button id="userButton">Welcome, {{ Auth::guard('admin')->user()->username }}</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile"><i class="fas fa-user-circle"></i> Ubah Profile</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </header>

        <section id="content">
            <div class="add-schedule">
                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_bus">Bus</label>
                        <select name="id_bus" id="id_bus" class="form-control">
                            @foreach ($buses as $bus)
                            <option value="{{ $bus->id_bus }}">{{ $bus->nama_bus }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_rute">Rute</label>
                        <select name="id_rute" id="id_rute" class="form-control">
                            @foreach ($rutes as $rute)
                            <option value="{{ $rute->id_rute }}">{{ $rute->nama_rute }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="waktu_berangkat">Waktu Berangkat</label>
                        <input type="datetime-local" name="waktu_berangkat" id="waktu_berangkat" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="waktu_tiba">Waktu Tiba</label>
                        <input type="datetime-local" name="waktu_tiba" id="waktu_tiba" class="form-control" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
                </form>
            </div>

            <div class="schedule-list mt-5">
                <h2>Daftar Jadwal</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bus</th>
                            <th>Rute</th>
                            <th>Waktu Berangkat</th>
                            <th>Waktu Tiba</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwals as $jadwal)
                        <tr>
                            <td>{{ $jadwal->id_jadwal }}</td>
                            <td>{{ $jadwal->bus->nama_bus }}</td>
                            <td>{{ $jadwal->rute->nama_rute }}</td>
                            <td>{{ $jadwal->waktu_berangkat }}</td>
                            <td>{{ $jadwal->waktu_tiba }}</td>
                            <td>
                                <form action="{{ route('jadwal.destroy', $jadwal->id_jadwal) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">Hapus</button>
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