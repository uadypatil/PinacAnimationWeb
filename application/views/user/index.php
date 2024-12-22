<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Class</title>
    <!-- Bootstrap CSS -->
     <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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

        /* Style for dropdown menu */
        .dropdown-menu {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 0;
        }

        /* Show dropdown on hover for large screens */
        @media (min-width: 768px) {
            .navbar-nav .nav-item:hover .dropdown-menu {
                display: block;
            }
        }

        /* Ensure dropdown is hidden by default */
        .dropdown-menu {
            display: none;
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
/* * Basic Structure */ */
.product-carousal .container {
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
    /* Adjust heading font size for smaller screens */
    .product-carousal-head h1 {
        font-size: 24px; /* Slightly smaller font size for better readability */
    }

    /* Adjust paragraph font size for better alignment */
    .product-carousal-head p.bolder {
        font-size: 14px; /* Adjust to make it more readable on smaller devices */
    }

    /* Add margin to the tile card for spacing */
    .tile-card {
        margin-bottom: 15px; /* Reduce margin to create more space on smaller screens */
    }

    /* Adjust swiper-slide width to make the slides stack correctly on smaller screens */
    .swiper-slide {
        width: 100%; /* Ensure the slide takes full width, adjusted for smaller screens */
        margin-right: 0; /* Remove the right margin to avoid spacing issues */
    }

    /* Adjust slider content heading size */
    .slider-content h2 {
        font-size: 18px; /* Slightly smaller font size for smaller screens */
    }

    /* Adjust slider content paragraph size */
    .slider-content p {
        font-size: 12px; /* Reduce font size to make it more readable on small screens */
    }

    /* Display arrows correctly on smaller screens */
    .icon-left-arrow,
    .icon-right-arrow {
        font-size: 18px; /* Adjust the arrow size for smaller screens */
        display: block; /* Ensure the arrows are visible on smaller screens */
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    /* Adjust arrow positions */
    .icon-left-arrow {
        left: 10px;
    }

    .icon-right-arrow {
        right: 10px;
    }

    /* Optional: If you have padding on the carousel container, reduce it for small screens */
    .swiper-container {
        padding: 0 10px; /* Reduce padding to prevent overflow */
    }

    /* Adjust image sizes for swiper slides */
    .swiper-slide img {
        width: 100%; /* Ensure images are responsive */
        height: auto; /* Maintain aspect ratio */
    }

    /* Optional: Improve the visibility of text within the swiper */
    .swiper-slide .slider-content {
        padding: 10px;
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

/* -----------vfx CSS -------------- */
/* Background animation */
    /* Background video style */
    .vfx-background {
      position: relative;
      height: 100vh;
      overflow: hidden;
    }

    /* Make the video cover the entire background */
    .vfx-background video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1; /* Ensure video stays behind content */
    }

    /* Floating Text */
    .floating-text {
      font-size: 3rem;
      color: white;
      font-weight: bold;
      text-align: center;
      animation: floatText 4s ease-in-out infinite;
    }

    @keyframes floatText {
      0% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0); }
    }

    /* Fade-in animation */
    .fade-in {
      opacity: 0;
      animation: fadeIn 2s forwards;
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    /* Hover effect on images */
    .hover-effect img {
      transition: transform 0.3s ease;
    }

    .hover-effect:hover img {
      transform: scale(1.1);
    }

    /* Border animation on images */
    .border-animate {
      border: 5px solid #ff6ec7;
      transition: all 0.3s ease;
    }

    .border-animate:hover {
      border-color: #ff9a8b;
      box-shadow: 0px 0px 15px rgba(255, 150, 150, 0.5);
    }

    /* Animated circles */
    .circle {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #ff6ec7;
      position: absolute;
      animation: circleAnimation 3s ease-in-out infinite;
    }

    .circle-1 {
      top: 10%;
      left: 10%;
    }

    .circle-2 {
      top: 30%;
      left: 70%;
    }

    .circle-3 {
      top: 70%;
      left: 40%;
    }

    @keyframes circleAnimation {
      0% { transform: translateY(0); }
      50% { transform: translateY(-50px); }
      100% { transform: translateY(0); }
    }

    /* Progress Bar */
    .progress-bar {
      width: 0;
      height: 30px;
      background: linear-gradient(45deg, #ff6ec7, #ff9a8b);
      animation: progressBarAnimation 4s forwards;
    }

    @keyframes progressBarAnimation {
      0% { width: 0%; }
      100% { width: 100%; }
    }  

     /* Light Purple Background with Curved Top */
    .gaming-section {
      background-color: #e6e6fa; /* Light lavender/purple */
      padding: 50px 0;
      position: relative;
    }

    .gaming-section::before {
      content: '';
      position: absolute;
      top: -40px; /* Adjust to curve */
      left: 0;
      width: 100%;
      height: 40px;
      background-color: #e6e6fa;
      border-radius: 50% 50% 0 0;
    }

    /* Centered Heading */
    .gaming-heading {
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
      color: #4b0082; /* Indigo color for heading */
      margin-bottom: 30px;
    }

    /* Video Styling */
    .gaming-video {
      width: 100%;
      height: auto;
    }

    /* Content Styling for Left and Right Content */
    .gaming-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
    }

    .gaming-content .content-left,
    .gaming-content .content-right {
      flex: 1;
      padding: 15px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .gaming-content {
        flex-direction: column;
        text-align: center;
      }

      .gaming-content .content-left,
      .gaming-content .content-right {
        flex: none;
        margin-bottom: 20px;
      }
    }    
    </style>
</head>

<body>

    <header>
        <nav>
            <p>PINAC ANIMATION</p>
            <ul>
                <li class="menu-item"><a href="#">Home</a></li>
                <li class="menu-item"><a href="#">About Me</a>
                    <ul class="submenu">
                        <li>Education</li>
                        <li>Experience</li>
                    </ul>
                </li>
                <li class="menu-item"><a href="#">Languages</a>
                    <ul class="submenu">
                        <li>Java</li>
                        <li>JavaScript</li>
                        <li>Python</li>
                        <li>C/C++</li>
                    </ul>
                </li>
                <li class="menu-item"><a href="#">Frameworks</a>
                    <ul class="submenu">
                        <li>ExpressJs</li>
                        <li>ReactJs</li>
                        <li>Django</li>
                        <li>Flask</li>
                    </ul>
                </li>
            </ul>
            <button class="animated-button">Contact Us</button>
        </nav>

    </header>

    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="WhatsApp Video 2024-12-17 at 3.35.45 PM.mp4"
                        type="video/mp4">Your browser does not support the video tag.
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

    <!-- Content Sections -->
    <section id="about" class="text-center py-5">
        <h3>About Us</h3>
        <p>We offer world-class animation courses to bring your creativity to life.</p>
    </section>
    <section id="courses" class="text-center py-5 bg-light">
        <h3>Our Courses</h3>
        <p>From beginner to advanced levels, we have a course for everyone.</p>
    </section>

    <!-- Footer -->
    <footer id="contact" class="text-center py-5">
        <p>Contact Us</p>
        <p>Email: info@animationclass.com</p>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>