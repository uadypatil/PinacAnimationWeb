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

        header {
            background: rgba(0, 0, 0, 0.7);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        header .navbar-brand {
            font-size: 24px;
        }

        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 100px 20px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)), url('image2.webp');
            background-size: cover;
            background-position: center;
            height: 90vh;
            position: relative;
            backdrop-filter: blur(5px) brightness(0.8);
        }

        .carousel-item video {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            background: black;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        /* Jumping effect on heading */
        .jumping-heading h2 {
            font-size: 48px;
            margin-bottom: 20px;
            display: inline-block;
            animation: jumpUpDown 1s ease-in-out forwards; /* Runs once */
        }

        .jumping-heading p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .carousel-caption button {
            background: #ffd700;
            color: #4e54c8;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Jump Up and Down Keyframe Animation */
        .pa, h2 {
            font-weight: 700;
            text-align: center;
            font-size: 40px;
            font-family: Hack, sans-serif;
            text-transform: uppercase;
            background: linear-gradient(90deg, rgb(22, 13, 56), rgb(13, 3, 29), #3e2a8c);
            letter-spacing: 5px;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            background-repeat: no-repeat;
            background-size: 80%;
            animation: shine 5s linear infinite;
            position: relative;
        }

        @keyframes shine {
            0% {
                background-position-x: -500%;
            }
            100% {
                background-position-x: 500%;
            }
        }

        .navbar-nav {
            list-style: none;
            padding-left: 0;
        }

        .navbar-nav .nav-item {
            position: relative;
        }

        .nav-link {
            color: #fff !important;
            padding: 15px 20px;
            display: block;
            text-decoration: none;
        }

        /* Remove bullets from sub-menu */
        .navbar-nav .nav-item .sub-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: transparent;
            min-width: 200px;
            border-radius: 5px;
            z-index: 100;
            list-style: none; /* Remove bullets */
            padding-left: 0;
        }

        .navbar-nav .nav-item .sub-menu li {
            padding: 10px 0px;
        }

        .navbar-nav .nav-item .sub-menu li a {
            color: #fff !important;
            text-decoration: none;
        }

        .navbar-nav .nav-item:hover .sub-menu {
            display: block;
        }

        .sub-menu li:hover {
            background: linear-gradient(90deg, rgba(74, 39, 120, 0.7), rgba(74, 39, 120, 0.5)); /* Purple gradient with transparency */
        }

        /* Add some styling on hover for main nav items */
        .navbar-nav .nav-item:hover > .nav-link {
            background-color: #444;
        }

        .pinac {
            background: linear-gradient(90deg, #4e54c8, #8f94fb); /* Purple to Blue gradient */
            -webkit-background-clip: text; /* Ensures gradient is clipped to the text */
            background-clip: text; /* For non-webkit browsers */
            color: transparent; /* Make the text color transparent so that the gradient shows through */
        }

        /* Make the navbar and content more responsive */
        @media (max-width: 768px) {
            .carousel-caption h2 {
                font-size: 36px;
            }

            .carousel-caption p {
                font-size: 16px;
            }

            .carousel-item video {
                height: 50vh;
            }

            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .nav-item {
                padding: 5px;
            }
        }
    </style>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand pinac" href="#">PINAC Animations</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Home</a>
                        <!-- Sub-menu under Home -->
                        <ul class="sub-menu">
                            <li><a href="#subHome1">Sub Home 1</a></li>
                            <li><a href="#subHome2">Sub Home 2</a></li>
                            <li><a href="#subHome3">Sub Home 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                        <!-- Sub-menu under Courses -->
                        <ul class="sub-menu">
                            <li><a href="#course1">Course 1</a></li>
                            <li><a href="#course2">Course 2</a></li>
                            <li><a href="#course3">Course 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                        <!-- Sub-menu under Gallery -->
                        <ul class="sub-menu">
                            <li><a href="#gallery1">Gallery 1</a></li>
                            <li><a href="#gallery2">Gallery 2</a></li>
                            <li><a href="#gallery3">Gallery 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                        <!-- Sub-menu under Contact -->
                        <ul class="sub-menu">
                            <li><a href="#subContact1">Sub Contact 1</a></li>
                            <li><a href="#subContact2">Sub Contact 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="videoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-inner">
        <!-- Video Item -->
        <div class="carousel-item active">
            <video class="d-block w-100" autoplay muted loop>
                <source src="WhatsApp Video 2024-12-17 at 3.21.49 PM.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption jumping-heading">
                <h2>Welcome to Animation</h2>
                <p class="pa">Bring your imagination to life with our courses.</p>
                <button class="btn btn-warning">Enroll Now</button>
            </div>
        </div>
        <div class="carousel-item">
            <video class="d-block w-100" autoplay muted loop>
                <source src="WhatsApp Video 2024-12-17 at 3.35.45 PM.mp4"type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption jumping-heading">
                <h2><span>Master</span> Animation</h2>
                <p class="pa">Join our advanced courses and become an expert.</p>
                <button class="btn btn-warning">Join the Course</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
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
