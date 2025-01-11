<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bus - Admin Panel</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/manage-bus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <img src="/img/BUSGo.png" alt="Logo">
        <ul>
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="/order">Orders</a></li>
            <li><a href="/managebus" class="active">Manage Bus</a></li>
            <li><a href="/managejadwal">Manage Jadwal</a></li>
            <li><a href="/manageadmin">Manage Admin</a></li>
            <li><a href="/manageusers">Manage Users</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Manage Bus</h1>
        </header>

        <!-- Search, Filter, and Add Bus -->
        <div class="top-actions">
            <input type="text" placeholder="Search by Bus Name or ID..." id="searchBus">
            <select id="filterStatus">
                <option value="">Filter by Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <button onclick="alert('Add Bus functionality coming soon!')">+ Add New Bus</button>
        </div>

        <!-- Bus Table -->
        <section id="manage-bus">
            <h2>Bus List</h2>
            <div class="bus-table">
                <table>
                    <thead>
                        <tr>
                            <th>Bus ID</th>
                            <th>Bus Name</th>
                            <th>Capacity</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="busList">
                        <tr>
                            <td>1</td>
                            <td>Bus A</td>
                            <td>50</td>
                            <td><span class="status active">Active</span></td>
                            <td>
                                <button class="edit" onclick="editBus(this)">Edit</button>
                                <button class="delete" onclick="confirmDelete(this)">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bus B</td>
                            <td>40</td>
                            <td><span class="status inactive">Inactive</span></td>
                            <td>
                                <button class="edit" onclick="editBus(this)">Edit</button>
                                <button class="delete" onclick="confirmDelete(this)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="prev-page" onclick="changePage(-1)">Previous</button>
                <span id="currentPage">Page 1 of 5</span>
                <button class="next-page" onclick="changePage(1)">Next</button>
            </div>
        </section>
    </div>

