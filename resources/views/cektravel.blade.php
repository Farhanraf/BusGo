<!DOCTYPE html>

<body lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BUSGo Travel</title>

        <link rel="shortcut icon" href="img/BUS.png" type="image/png">

        <link rel="stylesheet" href="css/cektravel.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet">
    </head>

    <body id="top">
        <header class="header" data-header>

            <div class="overlay" data-overlay></div>

            <div class="header-top">
                <div class="container">

                    <a href="tel:+01123456790" class="helpline-box">

                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <div class="wrapper">
                            <p class="helpline-title">For Further Inquires :</p>

                            <p class="helpline-number">+62 (0812) 2604 5210</p>
                        </div>

                    </a>

                    <a href="#" class="logo">
                        <img src="img/BUSGo.png" alt="Tourly logo">
                    </a>

                    <div class="header-btn-group">

                        <button class="search-btn" aria-label="Search">
                            <ion-icon name="search"></ion-icon>
                        </button>

                        <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                            <ion-icon name="menu-outline"></ion-icon>
                        </button>

                    </div>

                </div>
            </div>

            <div class="header-bottom">
                <div class="container">

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                    <nav class="navbar" data-navbar>

                        <div class="navbar-top">

                            <a href="#" class="logo">
                                <img src=".imgs/logo-blue.svg" alt="Tourly logo">
                            </a>

                            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>

                        </div>

                        <ul class="navbar-list">

                            <li>
                                <a href="/mainview" class="navbar-link" data-nav-link>Home</a>
                            </li>

                            <li>
                                <a href="/booking" class="navbar-link" data-nav-link>Booking</a>
                            </li>

                            <li>
                                <a href="/cektravel" class="navbar-link" data-nav-link>Cek Travel</a>
                            </li>

                            <li>
                                <a href="/destinasi" class="navbar-link" data-nav-link>Destinasi</a>
                            </li>

                            <li>
                                <a href="/aboutus" class="navbar-link" data-nav-link>About Us</a>
                            </li>

                        </ul>

                    </nav>

                    <button class="btn btn-primary">Book Now</button>

                </div>
            </div>

        </header>
        <main>
            <article>
                <section class="back" id="home">
                    <section id="cek-travel" class="cek-travel-section">
                        <h2 class="section-title">CEK TRAVEL</h2>
                        <p class="section-description">Temukan mitra perjalanan terbaik untuk perjalanan Anda dengan
                            mudah.</p>

                        <div class="cek-travel-container">
                            <!-- Form Container -->
                            <div class="form-container">
                                <form class="travel-form">
                                    <label for="asal-kota">Kota Asal</label>
                                    <input type="text" id="asal-kota" name="asal-kota" placeholder="Kota Asal" required>

                                    <label for="tujuan-kota">Kota Tujuan</label>
                                    <input type="text" id="tujuan-kota" name="tujuan-kota" placeholder="Kota Tujuan"
                                        required>

                                    <label for="tanggal-travel">Tanggal Perjalanan</label>
                                    <input type="date" id="tanggal-travel" name="tanggal-travel" required>

                                    <button type="submit" class="btn-submit">Cek Mitra</button>
                                </form>
                            </div>

                            <!-- Results Container -->
                            <div class="results-container">
                                <h3>Daftar Mitra Tersedia</h3>
                                <div class="partners-list">
                                    <!-- Example Partner Card -->
                                    <div class="partner-card">
                                        <img src="mitra-logo.png" alt="Logo Mitra" class="partner-logo">
                                        <p class="partner-name">Nama Mitra</p>
                                        <p class="seats">Jumlah Kursi Tersedia: 25</p>
                                        <p class="price">Harga: Rp 250,000</p>
                                        <p class="travel-date">Tanggal: Senin, 15 Januari 2024</p>
                                    </div>
                                    <!-- Repeat Partner Cards dynamically with backend data -->
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </article>
        </main>

        <a href="#top" class="go-top" data-go-top>
            <ion-icon name="chevron-up-outline"></ion-icon>
        </a>

        <script src="js/cektravel.js"></script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>