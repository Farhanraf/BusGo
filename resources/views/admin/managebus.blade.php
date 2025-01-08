<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Travel Web</title>
    <link rel="stylesheet" href="css/admin.css">
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
            <li><a href="/managejadwal">Manage Jadwal</a></li> <!-- Perbaikan: ganti #users dengan /users -->
            <li><a href="/manageadmin">Manage Admin</a></li> <!-- Perbaikan: ganti #reports dengan /reports -->
            <li><a href="/manageusers">Manage Users</a></li> <!-- Perbaikan: ganti #settings dengan /settings -->
            <li><a href="/logout">Logout</a></li> <!-- Perbaikan: ganti #logout dengan /logout -->
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Admin Dashboard</h1>
            <div class="user-info">
                <button id="userButton">Welcome, Admin</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile"><i class="fas fa-user-circle"></i> Ubah Profile</a>
                    <a href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </header>

        <section id="dashboard">
            <h2>Dashboard Overview</h2>
            <div class="stats">
                <div class="stat-box">Total Orders: 150</div>
                <div class="stat-box">Active Buses: 25</div>
                <div class="stat-box">Registered Users: 500</div>
                <div class="stat-box">Monthly Revenue: $20,000</div>
            </div>
        </section>
    </div>

    <script src="js/admin.js"></script>
</body>

</html>