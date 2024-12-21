<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Class</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #fff;
            overflow-x: hidden;
        }

        nav {
            display: flex;
            justify-content: space-between;
            /* Space between items */
            align-items: center;
            /* Vertically center items */
            background-color: #333;
            padding: 10px 20px;
        }

        nav p {
            color: #fff;
            font-size: 24px;
            margin: 0;
            padding: 0;
        }

        header {
            background: rgba(0, 0, 0, 0.7);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: transparent;
            box-shadow: 0 10px 40px rgba(159, 162, 177, .8);
        }

        nav ul {
            display: flex;
            list-style-type: none;
        }

        .menu-item {
            padding: 1rem 2rem;
            color: #83818c;
            position: relative;
        }

        .menu-item:before {
            content: "";
            height: 3px;
            position: absolute;
            background-color: #00ABC7;
            bottom: 0;
            left: 0;
            width: 100%;
            border-radius: 8px;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .menu-item:hover:before {
            transform: scaleX(1);
        }

        .submenu {
            display: flex;
            flex-direction: column;
            position: absolute;
            left: 0;
            top: 35px;
            width: 100%;
            padding: 0;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            transform: translateY(50px);
            transition: all 0.5s ease;
        }

        .menu-item:hover .submenu {
            visibility: visible;
            opacity: 1;
            top: 60px;
            transform: translateY(0px);
        }

        .submenu li {
            padding: 10px;
            transition: all 1s ease;
        }

        .submenu li:hover {
            background-color: #00ABC7;
            color: black;
            cursor: pointer;
        }

        .carousel-item video {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        /* Heading Animation */
        .jumping-heading h2 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: jumpUpDown 1s ease-in-out infinite;
            position: relative;
            display: inline-block;
            color: white;
            text-shadow: 0 0 5px #8e44ad, 0 0 10px #8e44ad, 0 0 15px #8e44ad, 0 0 20px #8e44ad;
        }

        .jumping-heading p {
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 0 5px #8e44ad, 0 0 10px #8e44ad, 0 0 15px #8e44ad, 0 0 20px #8e44ad;
        }

        @keyframes jumpUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Button */
        .animated-button {
            position: relative;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            border: 2px solid #8e44ad;
            color: #fff;
            background-color: transparent;
            cursor: pointer;
            border-radius: 50px;
            outline: none;
            overflow: hidden;
            transition: 0.4s ease-in-out;
            box-shadow: 0 0 10px rgba(142, 68, 173, 0.7);
            text-align: center;
        }

        .animated-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            transition: all 0.4s;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        .animated-button:hover {
            color: #fff;
            background: #8e44ad;
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(142, 68, 173, 1);
        }

        .animated-button:hover::before {
            width: 0;
            height: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .carousel-item video {
                height: 50vh;
            }

            .carousel-caption h2 {
                font-size: 36px;
            }

            .carousel-caption p {
                font-size: 16px;
            }
        }

        /* Modal */
        .modal-content {
            background-color: #fff;
            color: #000;
            padding: 20px;
        }

        .map-container {
            height: 400px;
            width: 100%;
        }

        /* -----------------------GALLERY CSS----------------------- */
        @keyframes backgroundAnimation {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0 0;
            }
        }

        /* Container to hold the gallery items */


        .gallery-item {
            border: 2px solid #fff;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .gallery-item .card-body {
            padding: 15px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .gallery-item .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .gallery-item .card-text {
            font-size: 1rem;
        }

        /* Responsive for smaller devices */
        @media (max-width: 768px) {
            .gallery-item img {
                height: 150px;
            }

            .gallery-item .card-body {
                font-size: 0.85rem;
            }
        }

        /* -----------------------section css--------------------------- */
        * Basic Structure */ .product-carousal .container {
            max-width: 1035px;
            margin: 0 auto;
        }

        /* Heading Styles */
        .product-carousal-head h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            color: #0A0F40;
            margin-bottom: 20px;
        }

        .product-carousal-head p.bolder {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #A7B2BF;
            margin-bottom: 40px;
        }

        /* Carousel Section */
        .carousal-section {
            margin-top: 40px;
        }

        .swiper-wrapper {
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
        }

        .swiper-slide {
            width: 100%;
            flex: 0 0 auto;
            margin-right: 30px;
            /* Space between slides */
        }

        .tile-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Tile Card Content */
        .tile-card .row {
            display: flex;
            align-items: center;
        }

        .tile-card .col-md-6 {
            padding: 20px;
        }

        .slider-graphic-img {
            width: 100%;
            border-radius: 10px;
        }

        .slider-content h2 {
            font-size: 24px;
            font-weight: bold;
            color: #0A0F40;
            margin-bottom: 15px;
        }

        .slider-content p {
            font-size: 16px;
            color: #A7B2BF;
            line-height: 1.6;
        }

        /* Hover Effect for Tile Cards */
        .tile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
        }

        /* Arrows */
        .icon-left-arrow,
        .icon-right-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .slider-arrow {
            width: 24px;
            height: 24px;
            transition: transform 0.3s ease;
        }

        .icon-left-arrow:hover .slider-arrow,
        .icon-right-arrow:hover .slider-arrow {
            transform: scale(1.1);
        }

        /* Mobile View: Product Titles */
        @media (max-width: 768px) {
            .product-carousal-head h1 {
                font-size: 28px;
            }

            .product-carousal-head p.bolder {
                font-size: 16px;
            }

            .tile-card {
                margin-bottom: 20px;
            }

            .swiper-slide {
                width: calc(100% - 20px);
            }

            .slider-content h2 {
                font-size: 20px;
            }

            .slider-content p {
                font-size: 14px;
            }

            .icon-left-arrow,
            .icon-right-arrow {
                display: block;
            }
        }

        /* Styling for gradient text */
        gradtxt {
            color: #ff6f61;
            /* Gradient color */
            font-weight: bold;
        }

        /* Adding Smooth Transition for Carousel */
        .swiper-container {
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <img src="pinac-removebg-preview.png" alt="Brand Logo" style="width:80px">
            <ul>
                <li class="menu-item"><a href="#">Home</a></li>
                <li class="menu-item"><a href="#">Student Gallery</a>
                    <ul class="submenu">
                        <li>Student Activities</li>
                        <li>Events</li>
                    </ul>
                </li>
                <ul class="submenu">
                    <li>Education</li>
                    <li>Experience</li>
                </ul>
                </li>
                <li class="menu-item"><a href="#">Courses</a>
                    <ul class="submenu">
                        <li>3D Animations</li>
                        <li>VFX</li>
                        <li>Gaming</li>
                        <li>Multimedia</li>
                        <li>Graphics Designing</li>
                        <li>Video Editing</li>
                        <li>Portfolio Development Program</li>
                        <li>MotionoGraphy</li>

                    </ul>
                </li>
                <li class="menu-item"><a href="#">About Us</a>
                    <ul class="submenu">
                        <li>Pinac Institute</li>
                        <li>Meet Our Teachers</li>
                    </ul>
                </li>
            </ul>
            <button class="animated-button" data-bs-toggle="modal" data-bs-target="#addressModal">Show Address</button>
        </nav>
    </header>

    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="WhatsApp Video 2024-12-17 at 3.35.45 PM.mp4" type="video/mp4">Your browser does not support the video tag.
                </video>
                <div class="carousel-caption jumping-heading">
                    <h2>Welcome to Animation</h2>
                    <p class="pa">Bring your imagination to life with our courses.</p>
                    <button class="animated-button">Enroll Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="WhatsApp Video 2024-12-18 at 11.34.36 PM.mp4" type="video/mp4">Your browser does not support the video tag.
                </video>
                <div class="carousel-caption jumping-heading">
                    <h2>Master Animation</h2>
                    <p class="pa">Join our advanced courses and become an expert.</p>
                    <button class="animated-button">Join the Course</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- Modal for Address and Map -->
    <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="googleMap">
                <div class="modal-header">
                    <h5 class="modal-title" id="addressModalLabel">Our Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Address:</h5>
                    <p>Pandit Colony, Nashik, Maharashtra, India</p>
                    <p>Pin Code: 422002</p>

                    <!-- Embedded Google Map -->
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4291.745453141256!2d73.7898!3d20.0000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf67f68a1d6db%3A0xa97a1eaa3fd0e36b!2sNashik%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sin!4v1725395799894!5m2!1sen!2sin" width="400" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <h5>Contact Us:</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="card">
        <h1 class="text-center pt-5 jumping-heading">Our Animations</h1>
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <!-- First Slide: Shows 3 images -->
                <div class="carousel-item active">
                    <div class="row">
                        <!-- Gallery Item 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="gallery-item">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230305182658/HTML-tutorial.jpg" class="card-img-top" alt="HTML Tutorial">
                                <div class="card-body">
                                    <h5 class="card-title">HTML Tutorial</h5>
                                    <p class="card-text">Learn the basics of HTML and how to build a webpage.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="gallery-item">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20230427130955/CSS-Tutorial.webp" class="card-img-top" alt="CSS Tutorial">
                                <div class="card-body">
                                    <h5 class="card-title">CSS Tutorial</h5>
                                    <p class="card-text">Explore styling and layout techniques using CSS.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="gallery-item">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230305183140/Javascript.jpg" class="card-img-top" alt="JavaScript Tutorial">
                                <div class="card-body">
                                    <h5 class="card-title">JavaScript Tutorial</h5>
                                    <p class="card-text">Dive into JavaScript to create interactive websites.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Slide: Shows 3 images -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Gallery Item 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="gallery-item">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230305182658/HTML-tutorial.jpg" class="card-img-top" alt="HTML Tutorial">
                                <div class="card-body">
                                    <h5 class="card-title">HTML Tutorial</h5>
                                    <p class="card-text">Learn the basics of HTML and how to build a webpage.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="gallery-item">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20230427130955/CSS-Tutorial.webp" class="card-img-top" alt="CSS Tutorial">
                                <div class="card-body">
                                    <h5 class="card-title">CSS Tutorial</h5>
                                    <p class="card-text">Explore styling and layout techniques using CSS.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Item 6 -->
                        <div class="col-md-4 mb-4">
                            <div class="gallery-item">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230305183140/Javascript.jpg" class="card-img-top" alt="JavaScript Tutorial">
                                <div class="card-body">
                                    <h5 class="card-title">JavaScript Tutorial</h5>
                                    <p class="card-text">Dive into JavaScript to create interactive websites.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <!-- Carousel Section -->
    <section class="container mt-5">
        <div class="carousal-section" data-aos="fade-up">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->


                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="https://www.animaker.com/Animaker-Home/new-assets/hr-graphic.webp" alt="Human-resources" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                                    <h2 class="h4 text-dark mb-3">Human Resources</h2>
                                    <p class="text-muted">Make super appealing onboarding, orientation, and compliance videos in a jiffy! You don’t need to depend on professional video creators anymore.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="https://www.animaker.com/Animaker-Home/new-assets/Marketing-and-sales.webp" alt="Marketing-and-sales" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                                    <h2 class="h4 text-dark mb-3">Marketers and Sales Professionals</h2>
                                    <p class="text-muted">Make videos that make an impact both internally and externally. Create engaging video content to entice your followers and clients!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="https://www.animaker.com/Animaker-Home/new-assets/Internal-communications.webp" alt="Internal-communications" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                                    <h2 class="h4 text-dark mb-3">Internal Communications</h2>
                                    <p class="text-muted">Effective communication is essential for an empowering company culture. Guide your colleagues effectively with a well-crafted animated video!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="https://www.animaker.com/Animaker-Home/new-assets/Everyone-else.webp" alt="Animaker-video-creation-tool-for-everyone" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                                    <h2 class="h4 text-dark mb-3">Everyone Else</h2>
                                    <p class="text-muted">Be it a birthday wish, a wedding invite, or even a personal resume, Animaker has got you covered! Create anything you want, just the way you want!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.1.0/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Swiper Initialization
        const swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 2,
                },
            },
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</body>

</html>