<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BUSGOoo</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <img src="/img/BUSGo.png" alt="Logo">
        <ul>
            <li><a href="/admin" class="active">Dashboard</a></li>
            <li><a href="/order">Orders</a></li>
            <li><a href="/managebus">Manage Bus</a></li>
            <li><a href="/managejadwal">Manage Jadwal</a></li>
            <li><a href="/manageadmin">Manage Admin</a></li>
            <li><a href="/manageusers">Manage Users</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Dashboard Admin</h1>
        </header>

        <!-- Statistik Section -->
<section class="stats">
    <div class="stat-box tickets-sold">
        <h3>320</h3>
        <p>Tickets Sold</p>
    </div>
    <div class="stat-box active-bus">
        <h3>25</h3>
        <p>Active Buses</p>
    </div>
    <div class="stat-box total-revenue">
        <h3>Rp 5,400,000</h3>
        <p>Total Revenue</p>
    </div>
</section>

            <!-- Tabel Data Admin -->
            <div class="table-container">
                <h2>Data Admin</h2>
                <button class="btn btn-add">Tambah Admin</button>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Admin</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Admin 1</td>
                            <td>admin1@pohandoko.com</td>
                            <td><button class="btn btn-delete">Hapus</button></td>
                        </tr>
                        <tr>
                            <td>Admin 2</td>
                            <td>admin2@pohandoko.com</td>
                            <td><button class="btn btn-delete">Hapus</button></td>
                        </tr>
                        <tr>
                            <td>Admin 3</td>
                            <td>admin3@pohandoko.com</td>
                            <td><button class="btn btn-delete">Hapus</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Daftar Tugas -->
            <div class="tasks">
                <h2>Tasks</h2>
                <ul>
                    <li>
                        <span>Update Bus Schedule</span>
                        <button class="btn">...</button>
                    </li>
                    <li>
                        <span>Review Ticket Sales</span>
                        <button class="btn">...</button>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</body>

</html>
