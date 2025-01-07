<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page with Carousel</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<div class="sidebar">
        <h2>Travel Admin</h2>
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#orders">Orders</a></li>
            <li><a href="#buses">Manage Buses</a></li>
            <li><a href="#users">Manage Users</a></li>
            <li><a href="#reports">Reports</a></li>
            <li><a href="#settings">Settings</a></li>
            <li><a href="#logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Admin Dashboard</h1>
            <div class="user-info">
                <button id="userButton">Welcome, Admin ▼</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#profile">Ubah Profile</a>
                    <a href="#logout">Logout</a>
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
    <script src="js/login.js"></script>
</body>

</html>