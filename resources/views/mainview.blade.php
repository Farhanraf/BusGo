<!DOCTYPE html>

<body lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BUSGo Travel</title>

        <link rel="shortcut icon" href="/img/BUS.png" type="image/png">

        <link rel="stylesheet" href="css/mainview.css">

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
                        <img src="/img/BUSGo.png" alt="Tourly logo">
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
                                <img src="img/BUSGo.png" alt="Tourly logo">
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

                            <li>
                                <a href="/logout" class="navbar-link" data-nav-link>LogOut</a>
                            </li>

                        </ul>

                    </nav>

                    <button class="btn btn-primary">Book Now</button>

                </div>
            </div>

        </header>





        <main>
            <article>

                <!-- 
                - #HERO
              -->

                <section class="hero" id="home">
                    <div class="container">

                        <h2 class="h1 hero-title">Journey to explore world</h2>

                        <p class="hero-text">
                            Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem
                            quos
                            voluptatibus habitant?
                            Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.
                        </p>

                        <div class="btn-group">
                            <button class="btn btn-primary">Learn more</button>

                            <button class="btn btn-secondary">Book now</button>
                        </div>

                    </div>
                </section>





                <!-- 
                - #TOUR SEARCH
              -->

                <section class="tour-search" id="Rute">
                    <div class="container">

                        <form action="" class="tour-search-form">

                            <div class="input-wrapper">
                                <label for="destination" class="input-label">Search Destination*</label>

                                <input type="text" name="destination" id="destination" required
                                    placeholder="Enter Destination" class="input-field">
                            </div>

                            <div class="input-wrapper">
                                <label for="people" class="input-label">Pax Number*</label>

                                <input type="number" name="people" id="people" required placeholder="No.of People"
                                    class="input-field">
                            </div>

                            <div class="input-wrapper">
                                <label for="checkin" class="input-label">Checkin Date**</label>

                                <input type="date" name="checkin" id="checkin" required class="input-field">
                            </div>

                            <div class="input-wrapper">
                                <label for="checkout" class="input-label">Checkout Date*</label>

                                <input type="date" name="checkout" id="checkout" required class="input-field">
                            </div>

                            <button type="submit" class="btn btn-secondary">Inquire now</button>

                        </form>

                    </div>
                </section>


                <!-- 
                - #POPULAR
              -->

                <section class="popular" id="destination">
                    <div class="container">

                        <p class="section-subtitle">Uncover place</p>

                        <h2 class="h2 section-title">Popular destination</h2>

                        <p class="section-text">
                            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum
                            cumque laudantium.
                            Sit ornare
                            mollitia tenetur, aptent.
                        </p>

                        <ul class="popular-list">

                            <li>
                                <div class="popular-card">

                                    <figure class="card-img">
                                        <img src="img/jakarta.png" alt="San miguel, italy" loading="lazy">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <p class="card-subtitle">
                                            <a href="#">Indonesia</a>
                                        </p>

                                        <h3 class="h3 card-title">
                                            <a href="#">Jakarta</a>
                                        </h3>

                                        <p class="card-text">
                                            ibu kota Indonesia, pusat ekonomi, budaya, dan hiburan.
                                        </p>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="popular-card">

                                    <figure class="card-img">
                                        <img src="img/semarang.png" alt="Burj khalifa, dubai"
                                            loading="lazy">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <p class="card-subtitle">
                                            <a href="#">Jawa Tengah</a>
                                        </p>

                                        <h3 class="h3 card-title">
                                            <a href="#">Semarang</a>
                                        </h3>

                                        <p class="card-text">
                                            kota pelabuhan di Jawa Tengah dengan warisan sejarah dan kuliner khas.
                                        </p>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="popular-card">

                                    <figure class="card-img">
                                        <img src="img/jogja.png" alt="Kyoto temple, japan"
                                            loading="lazy">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <p class="card-subtitle">
                                            <a href="#">Yogyakarta</a>
                                        </p>

                                        <h3 class="h3 card-title">
                                            <a href="#">Jogja</a>
                                        </h3>

                                        <p class="card-text">
                                            kota budaya dan pendidikan dengan wisata ikonik.
                                        </p>

                                    </div>

                                </div>
                            </li>

                        </ul>

                        <!-- <button class="btn btn-primary">More destintion</button> -->


                    </div>
                </section>





                <!-- 
                - #PACKAGE
              -->

                <section class="package" id="package">
                    <div class="container">

                        <p class="section-subtitle">Popular Packeges</p>

                        <h2 class="h2 section-title">Checkout Our Packeges</h2>

                        <p class="section-text">
                            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum
                            cumque laudantium.
                            Sit ornare
                            mollitia tenetur, aptent.
                        </p>

                        <ul class="package-list">

                            <li>
                                <div class="package-card">

                                    <figure class="card-banner">
                                        <img src="img/semarang.png"
                                            alt="Experience The Great Holiday On Beach" loading="lazy">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3 card-title">Experience The Great Holiday On Beach</h3>

                                        <p class="card-text">
                                            Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est
                                            aliquet porttitor! Eaque,
                                            cras, aspernatur.
                                        </p>

                                        <ul class="card-meta-list">

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="time"></ion-icon>

                                                    <p class="text">7D/6N</p>
                                                </div>
                                            </li>

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="people"></ion-icon>

                                                    <p class="text">pax: 10</p>
                                                </div>
                                            </li>

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="location"></ion-icon>

                                                    <p class="text">Malaysia</p>
                                                </div>
                                            </li>

                                        </ul>

                                    </div>

                                    <div class="card-price">

                                        <div class="wrapper">

                                            <p class="reviews">(25 reviews)</p>

                                            <div class="card-rating">
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                            </div>

                                        </div>

                                        <p class="price">
                                            $750
                                            <span>/ per person</span>
                                        </p>

                                        <button class="btn btn-secondary">Book Now</button>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="package-card">

                                    <figure class="card-banner">
                                        <img src="img/jakarta.png"
                                            alt="Summer Holiday To The Oxolotan River" loading="lazy">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3 card-title">Summer Holiday To The Oxolotan River</h3>

                                        <p class="card-text">
                                            Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est
                                            aliquet porttitor! Eaque,
                                            cras, aspernatur.
                                        </p>

                                        <ul class="card-meta-list">

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="time"></ion-icon>

                                                    <p class="text">7D/6N</p>
                                                </div>
                                            </li>

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="people"></ion-icon>

                                                    <p class="text">pax: 10</p>
                                                </div>
                                            </li>

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="location"></ion-icon>

                                                    <p class="text">Malaysia</p>
                                                </div>
                                            </li>

                                        </ul>

                                    </div>

                                    <div class="card-price">

                                        <div class="wrapper">

                                            <p class="reviews">(20 reviews)</p>

                                            <div class="card-rating">
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                            </div>

                                        </div>

                                        <p class="price">
                                            $520
                                            <span>/ per person</span>
                                        </p>

                                        <button class="btn btn-secondary">Book Now</button>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="package-card">

                                    <figure class="card-banner">
                                        <img src="img/jogja.png"
                                            alt="Santorini Island's Weekend Vacation" loading="lazy">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h3 card-title">Santorini Island's Weekend Vacation</h3>

                                        <p class="card-text">
                                            Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est
                                            aliquet porttitor! Eaque,
                                            cras, aspernatur.
                                        </p>

                                        <ul class="card-meta-list">

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="time"></ion-icon>

                                                    <p class="text">7D/6N</p>
                                                </div>
                                            </li>

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="people"></ion-icon>

                                                    <p class="text">pax: 10</p>
                                                </div>
                                            </li>

                                            <li class="card-meta-item">
                                                <div class="meta-box">
                                                    <ion-icon name="location"></ion-icon>

                                                    <p class="text">Malaysia</p>
                                                </div>
                                            </li>

                                        </ul>

                                    </div>

                                    <div class="card-price">

                                        <div class="wrapper">

                                            <p class="reviews">(40 reviews)</p>

                                            <div class="card-rating">
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                                <ion-icon name="star"></ion-icon>
                                            </div>

                                        </div>

                                        <p class="price">
                                            $660
                                            <span>/ per person</span>
                                        </p>

                                        <button class="btn btn-secondary">Book Now</button>

                                    </div>

                                </div>
                            </li>

                        </ul>

                        <button class="btn btn-primary">View All Packages</button>

                    </div>
                </section>





                <!-- 
                - #GALLERY
              -->

                <section class="gallery" id="gallery">
                    <div class="container">

                        <p class="section-subtitle">Photo Gallery</p>

                        <h2 class="h2 section-title">Photo's From Travellers</h2>

                        <p class="section-text">
                            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum
                            cumque laudantium.
                            Sit ornare
                            mollitia tenetur, aptent.
                        </p>

                        <ul class="gallery-list">

                            <li class="gallery-item">
                                <figure class="gallery-image">
                                    <img src="img/semarang.png" alt="Gallery image">
                                </figure>
                            </li>

                            <li class="gallery-item">
                                <figure class="gallery-image">
                                    <img src="img/jakarta.png" alt="Gallery image">
                                </figure>
                            </li>

                            <li class="gallery-item">
                                <figure class="gallery-image">
                                    <img src="img/jogja.png" alt="Gallery image">
                                </figure>
                            </li>

                            <li class="gallery-item">
                                <figure class="gallery-image">
                                    <img src="img/terminal.png" alt="Gallery image">
                                </figure>
                            </li>

                            <li class="gallery-item">
                                <figure class="gallery-image">
                                    <img src="img/terminal1.jpg" alt="Gallery image">
                                </figure>
                            </li>

                        </ul>

                    </div>
                </section>





                <!-- 
                - #CTA
              -->

                <section class="cta" id="contact">
                    <div class="container">

                        <div class="cta-content">
                            <p class="section-subtitle">Call To Action</p>

                            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

                            <p class="section-text">
                                Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum.
                                Vestibulum cumque
                                laudantium. Sit ornare
                                mollitia tenetur, aptent.
                            </p>
                        </div>

                        <button class="btn btn-secondary">Contact Us !</button>

                    </div>
                </section>

            </article>
        </main>





        <!-- 
            - #FOOTER
          -->

        <footer class="footer">

            <div class="footer-top">
                <div class="container">

                    <div class="footer-brand">

                        <a href="#" class="logo">
                            <img src="./img/BUSGo.png" alt="Tourly logo">
                        </a>

                        <p class="footer-text">
                            Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla,
                            praesentium magna conubia
                            at
                            perferendis, pretium, aenean aut ultrices.
                        </p>

                    </div>

                    <div class="footer-contact">

                        <h4 class="contact-title">Contact Us</h4>

                        <p class="contact-text">
                            Feel free to contact and reach us !!
                        </p>

                        <ul>

                            <li class="contact-item">
                                <ion-icon name="call-outline"></ion-icon>

                                <a href="tel:+01123456790" class="contact-link">+01 (123) 4567 90</a>
                            </li>

                            <li class="contact-item">
                                <ion-icon name="mail-outline"></ion-icon>

                                <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
                            </li>

                            <li class="contact-item">
                                <ion-icon name="location-outline"></ion-icon>

                                <address>3146 Koontz, California</address>
                            </li>

                        </ul>

                    </div>

                    <div class="footer-form">

                        <p class="form-text">
                            Subscribe our newsletter for more update & news !!
                        </p>

                        <form action="" class="form-wrapper">
                            <input type="email" name="email" class="input-field" placeholder="Enter Your Email"
                                required>

                            <button type="submit" class="btn btn-secondary">Subscribe</button>
                        </form>

                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">

                    <p class="copyright">
                        &copy; 2022 <a href="">codewithsadee</a>. All rights reserved
                    </p>

                    <ul class="footer-bottom-list">

                        <li>
                            <a href="#" class="footer-bottom-link">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="#" class="footer-bottom-link">Term & Condition</a>
                        </li>

                        <li>
                            <a href="#" class="footer-bottom-link">FAQ</a>
                        </li>

                    </ul>

                </div>
            </div>

        </footer>

        <a href="#top" class="go-top" data-go-top>
            <ion-icon name="chevron-up-outline"></ion-icon>
        </a>

        <script src="js/mainview.js"></script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>