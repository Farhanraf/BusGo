<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="/manageuser">Manage Users</a></li>
        </ul>
    </div>

    <div class="main-content">
        @yield('content')
    </div>
</body>

</html>