<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Page</title>
    <link rel="stylesheet" href="css/admin/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div style="text-align: center;">
            <img src="/img/BUSGo.png" alt="Logo">
        </div>
        <ul>
            <li><a href="/admin" class="active">Dashboard</a></li>
            <li><a href="/order">Orders</a></li>
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
            <h1>Dashboard Overview</h1>
            <div class="user-info">
                <button id="userButton">Welcome, {{ Auth::guard('admin')->user()->username }}</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile"><i class="fas fa-user-circle"></i> Ubah Profile</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </header>

        <section id="content">
            <h2>Statistik Utama</h2>
            <div class="stats">
                <div class="stat-box">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Total Orders</span>
                    <h3>150</h3>
                </div>
                <div class="stat-box">
                    <i class="fas fa-bus"></i>
                    <span>Active Buses</span>
                    <h3>25</h3>
                </div>
                <div class="stat-box">
                    <i class="fas fa-users"></i>
                    <span>Registered Users</span>
                    <h3>500</h3>
                </div>
                <div class="stat-box">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Monthly Revenue</span>
                    <h3>$20,000</h3>
                </div>
            </div>
        </section>
    </div>

    <script src="js/admin.js"></script>
</body>

</html>
