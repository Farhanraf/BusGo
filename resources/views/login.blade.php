<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page with Carousel</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="container">
        <!-- Left container: Carousel -->
        <div class="left-container">
            <div class="carousel">
                <div class="logo">
                    <img src="/assets/image/BUSGo.png" alt="Logo">
                </div>
                <div class="slides">
                    
                    <img src="/assets/image/terminal.png" alt="Image 1">
                    <img src="/assets/image/inter1.jpg" alt="Image 2">
                    <img src="/assets/image/back.png" alt="Image 3">
                </div>
                <div class="carousel-indicators">
                    <span class="indicator active" data-index="0"></span>
                    <span class="indicator" data-index="1"></span>
                    <span class="indicator" data-index="2"></span>
                </div>
            </div>
        </div>

        <!-- Right container: Login Form -->
        <div class="right-container">
            <div class="glass-effect">
                <!-- Tab navigation to switch between login forms -->
                <div class="login-tabs">
                    <button class="tab-button active" data-tab="user-login">User Login</button>
                    <button class="tab-button" data-tab="admin-login">Admin Login</button>
                </div>
                
                <!-- User login form -->
                <form class="login-form" id="user-login" style="display: block;">
                    <h2>User Login</h2>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <a href="../mainview/mainview.html">
                        <button type="button">Login</button>
                    </a>                    
                    <p>Don't have an account? <a><button class="tab-button" data-tab="register">Register</button></a></p>
                </form>
        
                <!-- Admin login form -->
                <form class="login-form" id="admin-login" style="display: none;">
                    <h2>Admin Login</h2>
                    <div class="form-group">
                        <label for="admin-username">Username</label>
                        <input type="text" id="admin-username" name="admin-username" required>
                    </div>
                    <div class="form-group">
                        <label for="admin-password">Password</label>
                        <input type="password" id="admin-password" name="admin-password" required>
                    </div>
                    <a href="../admin/index.html">
                        <button type="button">Login</button>
                    </a> 
                </form>
        
        
                <!-- Registration form -->
                <form class="login-form" id="register" style="display: none;">
                    <h2>Register</h2>
                    <div class="form-group">
                        <label for="register-username">Username</label>
                        <input type="text" id="register-username" name="register-username" required>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" id="register-password" name="register-password" required>
                    </div>
                    <div class="form-group">
                        <label for="register-email">Email</label>
                        <input type="email" id="register-email" name="register-email" required>
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
        
    </div>
    <script src="js/script.js"></script>
</body>

</html>