<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Admin Page</title>
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div style="text-align: center;">
            <img src="/img/BUSGo.png" alt="Logo">
        </div>
        <ul>
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="/order" class="active">Orders</a></li>
            <li><a href="/managebus">Manage Bus</a></li>
            <li><a href="/managejadwal">Manage Jadwal</a></li>
            <li><a href="/manageadmin">Manage Admin</a></li>
            <li><a href="/manageuser">Manage Users</a></li>
            <li><a href="/managerutes">Manage Rute</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Orders Management</h1>
            <div class="user-info">
                <button id="userButton">Welcome, {{ Auth::guard('admin')->user()->username }}</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile"><i class="fas fa-user-circle"></i> Ubah Profile</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </header>

        <section id="content">
            <div class="container mt-5">
                <h2>Data Pemesanan</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Pemesanan</th>
                            <th>Nama User</th>
                            <th>Jadwal</th>
                            <th>Nomor Kursi</th>
                            <th>Status Pemesanan</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($pemesanans->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data pemesanan.</td>
                        </tr>
                        @else
                        @foreach ($pemesanans as $pemesanan)
                        <tr>
                            <td>{{ $pemesanan->id_pesan }}</td>
                            <td>{{ $pemesanan->user->name }}</td>
                            <td>{{ $pemesanan->jadwal->tanggal }} - {{ $pemesanan->jadwal->waktu }}</td>
                            <td>{{ $pemesanan->nomor_kursi }}</td>
                            <td>{{ $pemesanan->status_pemesanan }}</td>
                            <td>{{ $pemesanan->status_pembayaran }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <script src="js/admin.js"></script>
</body>

</html>