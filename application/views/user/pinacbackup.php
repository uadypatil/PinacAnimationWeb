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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a0dad, #ff7f32, #1e3a8a);
            margin: 0;
            padding: 0;
            color: #fff;
            overflow-x: hidden;
        }
       
     /* Centering navbar content */
.navbar-nav {
  text-align: center;
}

.navbar-collapse {
  justify-content: center;
}

/* Styling the navbar links */
.navbar-nav .nav-link {
  position: relative;
  padding: 0.5rem 1.5rem;
}

/* Underline effect on hover */
.navbar-nav .nav-link:hover {
  text-decoration: none;
  border-bottom: 2px solid #00ABC7; /* Underline color */
}

/* Customizing the dropdown behavior */
.nav-item.dropdown:hover .dropdown-menu {
  display: block;
  visibility: visible;
  opacity: 1;
  top: 35px;
  transform: translateY(0);
  transition: all 0.3s ease;
}

/* For smaller screens, the dropdown should toggle on button click */
@media (max-width: 991px) {
  .navbar-nav .dropdown-menu {
    display: none; /* Hide the dropdown by default */
  }

  .navbar-nav .dropdown-menu.show {
    display: block;
  }

  .navbar-nav .nav-link {
    padding-left: 15px;
    padding-right: 15px;
  }
}
/* Change background color on hover for sublist items */
.nav-item .dropdown-menu .dropdown-item:hover {
  background-color: #00ABC7; /* Background color on hover */
  color: #fff; /* Text color on hover */
}
/* --------------------------NAVBAR CSS ENDS HERE----------------------------- */

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
        /* Heading with purple border around the text */
        .jumping-heading h2 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: jumpUpDown 1s ease-in-out infinite;
            position: relative;
            display: inline-block;
            color: white;
            /* White text */
            text-shadow: 0 0 5px #8e44ad, 0 0 10px #8e44ad, 0 0 15px #8e44ad, 0 0 20px #8e44ad;
            /* Purple text border */
        }

        .jumping-heading p {
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
            /* White text */
            text-shadow: 0 0 5px #8e44ad, 0 0 10px #8e44ad, 0 0 15px #8e44ad, 0 0 20px #8e44ad;
            /* Purple text border */
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

        .pa {
            font-size: 24px;
            letter-spacing: 2px;
            animation: shine 5s linear infinite;
        }

        @keyframes shine {
            0% {
                background-position: -500%;
            }

            100% {
                background-position: 500%;
            }
        }

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
    /* -------------------------------------Multimedia CSS-------------------------------------------    */
    
    /* Text animation */
    .animated-text {
      animation: fadeIn 2s ease-out;
    }

    /* Image Hover Animation */
    .image-container {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 10px;
    }

    .image-container:hover {
      transform: scale(1.1);
      box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.3);
    }

    /* Keyframe for text fade-in */
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    /* Video embed responsive */
    .video-embed {
      position: relative;
      padding-bottom: 56.25%; /* Aspect ratio 16:9 */
      height: 0;
      overflow: hidden;
      max-width: 100%;
      border-radius: 10px;
    }

    .video-embed iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    /* Card Image responsive for small screens */
    .card-img-top {
      object-fit: cover;
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    /* Ensure container content is properly spaced and centered on all screen sizes */
    .container {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }
    

    /* -----------------------------------HEADING CSS----------------------------------- */
     /* Adding a blinking cursor effect */
     .cursor {
      display: inline-block;
      width: 10px;
      background-color: black;
      animation: blink 0.7s infinite step-end;
    }

    @keyframes blink {
      50% {
        opacity: 0;
      }
    }

    /* -------------------------------ANOMATIONS------------------------ */
       .scrolling-wrapper {
      width: 100%;
      overflow: hidden;
      position: relative;
    }

    .scrolling-images {
      display: flex;
      animation: scrollImages 20s linear infinite;
    }

    .scrolling-images img {
      width: 200px; /* Adjust the image size */
      height: auto;
      margin-right: 20px; /* Space between images */
      border-radius: 50%;
    }

    /* Animation to scroll images continuously */
    @keyframes scrollImages {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(-100%);
      }
    }
    /* ------------------------------------------FOOTBAR CSS --------------------------------------- */
    /* CSS */
    .button-85 {
            padding: 0.6em 2em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-85:before {
            content: "";
            background: linear-gradient(45deg,
                    #ff0000,
                    #ff7300,
                    #fffb00,
                    #48ff00,
                    #00ffd5,
                    #002bff,
                    #7a00ff,
                    #ff00c8,
                    #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            -webkit-filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing-button-85 20s linear infinite;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowing-button-85 {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .button-85:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #222;
            left: 0;
            top: 0;
            border-radius: 10px;
        }


        .glitch-container {
            position: relative;
            display: inline-block;
        }

        .glitch-text {
            position: relative;
            /* font-size: 4rem; */
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            animation: glitch-animation 1.5s infinite;
        }

        .glitch-text::before,
        .glitch-text::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            color: red;
            z-index: -1;
        }

        .glitch-text::before {
            color: red;
            animation: glitch-before 1.5s infinite linear;
        }

        .glitch-text::after {
            color: blue;
            animation: glitch-after 1.5s infinite linear;
        }

        @keyframes glitch-animation {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-1px);
            }

            50% {
                transform: translateX(1px);
            }

            75% {
                transform: translateX(-0.5px);
            }
        }

        @keyframes glitch-before {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-3px);
            }

            50% {
                transform: translateX(3px);
            }

            75% {
                transform: translateX(-2px);
            }
        }

        @keyframes glitch-after {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(3px);
            }

            50% {
                transform: translateX(-3px);
            }

            75% {
                transform: translateX(2px);
            }
        }
    </style>
</head>

<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Left button for toggling -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Logo on the left -->
    <img src="pinac-removebg-preview.png" alt="Brand Logo" loading="lazy" style="width: 80px;" class="ms-3">

    <!-- Navbar content, centered -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Student Gallery
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#activities">Student Activities</a></li>
            <li><a class="dropdown-item" href="#eventsgallery">Events</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCourses" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownCourses">
            <li><a class="dropdown-item" href="#threed">3D Animations</a></li>
            <li><a class="dropdown-item" href="#vfxanimation">VFX</a></li>
            <li><a class="dropdown-item" href="#gaming">Gaming</a></li>
            <li><a class="dropdown-item" href="#">Multimedia</a></li>
            <li><a class="dropdown-item" href="#">Graphics Designing</a></li>
            <li><a class="dropdown-item" href="#">Video Editing</a></li>
            <li><a class="dropdown-item" href="#">Portfolio Development Program</a></li>
            <li><a class="dropdown-item" href="#">MotionoGraphy</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownAbout">
            <li><a class="dropdown-item" href="#">Pinac Institute</a></li>
            <li><a class="dropdown-item" href="#teachers">Meet Our Teachers</a></li>
          </ul>
        </li>
      </ul>
      <button type="button" class="animated-button" data-bs-toggle="modal" data-bs-target="#addressModal">
  Inquiry
</button>    </div>
  </nav>
</header>

<!-- --------------------------------------  navbar ends here---------------------------------------- -->
<div id="videoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="d-block w-100" autoplay muted loop preload="auto" loading="lazy">
                <source src="https://assets.mixkit.co/videos/32982/32982-720.mp4" type="video/mp4">Your browser does not support the video tag.
            </video>
            <div class="carousel-caption jumping-heading">
                <h2>Welcome to Animation</h2>
                <p class="pa">Bring your imagination to life with our courses.</p>
                <button class="animated-button">Enroll Now</button>
            </div>
        </div>
        <div class="carousel-item">
            <video class="d-block w-100" autoplay muted loop preload="auto">
                <source src="https://assets.mixkit.co/videos/18140/18140-720.mp4" type="video/mp4">Your browser does not support the video tag.
            </video>
            <div class="carousel-caption jumping-heading">
                <h2>Master Animation</h2>
                <p class="pa">Join our advanced courses and become an expert.</p>
                <button class="animated-button">Join the Course</button>
            </div>
        </div>
        <div class="carousel-item">
            <video class="d-block w-100" autoplay muted loop preload="auto">
                <source src="https://videos.pexels.com/video-files/854228/854228-hd_1920_1080_30fps.mp4" type="video/mp4">Your browser does not support the video tag.
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4291.745453141256!2d73.7898!3d20.0000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf67f68a1d6db%3A0xa97a1eaa3fd0e36b!2sNashik%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sin!4v1725395799894!5m2!1sen!2sin" loading="lazy" width="400" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
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
    <h3 class="text-center pt-5 typing-effect" style="color:#61a0e7">Animations</h3>
    <!-- <div class="scrolling-wrapper">
      <div class="scrolling-images">
        <img src="https://mikesreda.com/wp-content/uploads/2017/09/Gallery_16.jpg" alt="Image 1">
        <img src="https://wallpaperaccess.com/full/1346596.jpg" alt="Image 2">
        <img src="https://wallpaperaccess.com/full/1346596.jpg" alt="Image 3">
        <img src="https://via.placeholder.com/300x200?text=Image+4" alt="Image 4">
        <img src="https://via.placeholder.com/300x200?text=Image+5" alt="Image 5">
      </div>
    </div>  -->

    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
        <!-- First Slide: Shows 3 images -->
      <div class="carousel-item active">
            <div class="row"> 
                <!-- Gallery Item 1 -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="https://mikesreda.com/wp-content/uploads/2017/09/Gallery_16.jpg" loading="lazy class="card-img-top" alt="HTML Tutorial">
                        <div class="card-body"> 
                         <!-- <h5 class="card-title">HTML Tutorial</h5> -->
                            <!-- <p class="card-text pa">Learn the basics of HTML and how to build a webpage.</p> -->
                         </div>
                    </div>
                </div> 
                <!-- Gallery Item 2 -->
               <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="https://wallpaperaccess.com/full/1346596.jpg" loading="lazy" class="card-img-top" alt="CSS Tutorial">
                        <div class="card-body"> 
                            <!-- <h5 class="card-title">CSS Tutorial</h5>
                            <p class="card-text">Explore styling and layout techniques using CSS.</p> -->
                         </div>
                    </div>
                </div> 
                <!-- Gallery Item 3 -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="https://images.squarespace-cdn.com/content/v1/508e7487e4b047ba54daaef2/1648467721123-44E9JHIXR47S55IC6M3R/Vinyl+Collector+by+Sarah+Jarrettsm.jpg" loading="lazy class="card-img-top" alt="JavaScript Tutorial">
                        <div class="card-body"> 
                      <!-- <h5 class="card-title">JavaScript Tutorial</h5>
                            <p class="card-text">Dive into JavaScript to create interactive websites.</p> --> 
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
                        <img src="https://wallpaperaccess.com/full/1346596.jpg" loading="lazy" class="card-img-top" alt="HTML Tutorial">
                        <div class="card-body"> 
                         <!-- <h5 class="card-title">HTML Tutorial</h5>
                            <p class="card-text">Learn the basics of HTML and how to build a webpage.</p> -->
                        </div>
                    </div>
                </div> 
                <!-- Gallery Item 5 -->
                 <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="https://images.squarespace-cdn.com/content/v1/508e7487e4b047ba54daaef2/1648467721123-44E9JHIXR47S55IC6M3R/Vinyl+Collector+by+Sarah+Jarrettsm.jpg" class="card-img-top" alt="CSS Tutorial">
                        <div class="card-body">
                             <!-- <h5 class="card-title">CSS Tutorial</h5>
                            <p class="card-text">Explore styling and layout techniques using CSS.</p>  -->
                        </div>
                    </div>
                </div>
                 <!-- Gallery Item 6 --> 
                 <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="https://wallpaperaccess.com/full/1346596.jpg" loading="lazy" class="card-img-top" alt="JavaScript Tutorial">
                        <div class="card-body">
                             <!-- <h5 class="card-title">JavaScript Tutorial</h5>
                            <p class="card-text">Dive into JavaScript to create interactive websites.</p>  -->
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
 <!-- -----------------------------------------ASSIGNMENT SECTION------------------------------ --> 
   <!-- Carousel Section -->
<!-- Carousel Section -->
<!-- Carousel Section -->
<!-- <div class="card">
  <div class="card-body">
  style="background: linear-gradient(to right, #6a0dad, #ff7f32, #1e3a8a);
  " -->
<section class="container mt-5">
  <h3 class="text-center pt-5 typing-effect" style="color:#61a0e7">Our Assignments</h3>

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
<!-- </div>
</div> -->

<!-- -------------------------------------GALLERY SECTION-------------------------------------------- -->
<!-- Gallery Section -->
<section class="container py-5 mt-4 bg-light" id="threed" style="border-radius:5%">
  <h3 class="text-center pt-5 typing-effect" style="color:#61a0e7">Animated Photo Gallery</h3>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Show only 6 images initially -->
    <div class="col gallery-item p-4" id="image1" style="border:0;">
      <img src="https://www.pixelstalk.net/wp-content/uploads/2016/07/Desktop-animation-movies-wallpapers-download.jpg" class="gallery-img" alt="Image 1">
    </div>
    <div class="col gallery-item p-4" id="image2" style="border:0;">
      <img src="https://media.timeout.com/images/101507247/image.jpg" class="gallery-img" alt="Image 2">
    </div>
    <div class="col gallery-item p-4" id="image3" style="border:0;">
      <img src="https://damassets.autodesk.net/content/dam/autodesk/www/industry/3d-animation/create-beautiful-3d-animations-thumb-1204x677.jpg" class="gallery-img" alt="Image 3">
    </div>
    <div class="col gallery-item p-4" id="image4" style="border:0;">
      <img src="https://damassets.autodesk.net/content/dam/autodesk/www/industry/3d-animation/create-beautiful-3d-animations-thumb-1204x677.jpg" class="gallery-img" alt="Image 4">
    </div>
    <div class="col gallery-item p-4" id="image5" style="border:0;">
      <img src="https://th.bing.com/th/id/R.5e8b2986e534b6256148b36edc0184d2?rik=RDjNib%2bEoeBcZQ&riu=http%3a%2f%2ffc02.deviantart.net%2ffs71%2ff%2f2011%2f036%2fb%2f7%2fanimation_cel_7_by_nippy13-d38uj80.png&ehk=6LF%2fyTeAKi1PQP3SndbT4tLBLqN8Epg1HuEYJVS%2b068%3d&risl=1&pid=ImgRaw&r=0" class="gallery-img" alt="Image 5">
    </div>
    <div class="col gallery-item p-4" id="image6" style="border:0;">
      <img src="https://th.bing.com/th/id/R.5e91345f89bf20d3d561647ab1e0547e?rik=KbBGOIZq13QK0w&riu=http%3a%2f%2fwww.animationkolkata.com%2fblog%2fwp-content%2fuploads%2f2021%2f11%2fadmec-internal-different-types-of-animation.jpg&ehk=Au7%2b61J5WD6R7I2u9P72xB3D0e9CHuFnUWXaBAlPQHY%3d&risl=&pid=ImgRaw&r=0" class="gallery-img" alt="Image 6">
    </div>

    <!-- Hidden images (7 to 12) initially -->
    <div class="col gallery-item p-4" id="image7" style="display: none;border:0;">
      <img src="https://th.bing.com/th/id/R.5e91345f89bf20d3d561647ab1e0547e?rik=KbBGOIZq13QK0w&riu=http%3a%2f%2fwww.animationkolkata.com%2fblog%2fwp-content%2fuploads%2f2021%2f11%2fadmec-internal-different-types-of-animation.jpg&ehk=Au7%2b61J5WD6R7I2u9P72xB3D0e9CHuFnUWXaBAlPQHY%3d&risl=&pid=ImgRaw&r=0" class="gallery-img" alt="Image 7">
    </div>
    <div class="col gallery-item p-4" id="image8" style="display: none;border:0;">
      <img src="https://th.bing.com/th/id/R.5e91345f89bf20d3d561647ab1e0547e?rik=KbBGOIZq13QK0w&riu=http%3a%2f%2fwww.animationkolkata.com%2fblog%2fwp-content%2fuploads%2f2021%2f11%2fadmec-internal-different-types-of-animation.jpg&ehk=Au7%2b61J5WD6R7I2u9P72xB3D0e9CHuFnUWXaBAlPQHY%3d&risl=&pid=ImgRaw&r=0" class="gallery-img" alt="Image 8" loading="lazy">
    </div>
    <div class="col gallery-item p-4" id="image9" style="display: none;border:0;">
      <img src="https://th.bing.com/th/id/R.5e91345f89bf20d3d561647ab1e0547e?rik=KbBGOIZq13QK0w&riu=http%3a%2f%2fwww.animationkolkata.com%2fblog%2fwp-content%2fuploads%2f2021%2f11%2fadmec-internal-different-types-of-animation.jpg&ehk=Au7%2b61J5WD6R7I2u9P72xB3D0e9CHuFnUWXaBAlPQHY%3d&risl=&pid=ImgRaw&r=0" class="gallery-img" alt="Image 9" loading="lazy">
    </div>
    <div class="col gallery-item p-4" id="image10" style="display: none;border:0;">
      <img src="https://via.placeholder.com/400x300?text=Image+10" class="gallery-img" alt="Image 10" loading="lazy">
    </div>
    <div class="col gallery-item p-4" id="image11" style="display: none;border:0;">
      <img src="https://via.placeholder.com/400x300?text=Image+11" class="gallery-img" alt="Image 11" loading="lazy">
    </div>
    <div class="col gallery-item p-4" id="image12" style="display: none;border:0;">
      <img src="https://via.placeholder.com/400x300?text=Image+12" class="gallery-img" alt="Image 12"  loading="lazy">
    </div>
  </div>

  <!-- Show More and Show Less Buttons -->
  <div class="text-center mt-4">
    <button id="showMoreBtn" class="btn btn-light" onclick="showMore()">Show More</button>
    <button id="showLessBtn" class="btn btn-light" onclick="showLess()" style="display: none;">Show Less</button>
  </div>
</section>

<!-- ----------------------------------------    TEACHER SECTION -------------------------------------------- -->
<!-- Profile Cards Section -->
<div class="bg-image" style="background: linear-gradient(to right, #6a0dad, #ff7f32, #1e3a8a); height: 700px; background-size: cover;">
  <h3 class="text-center pt-4 typing-effect" style="color:#ffffff">Meet Our Teachers</h3>
<section id="teachers" class="p-0">

    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-4">
            <div class="card text-white py-5" style="background-color: #6f42c1;">
              <div class="card-body">
                <!-- Apply AOS to the image directly -->
                <img class="rounded-circle shadow-2-strong mb-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg" alt="avatar" style="width: 100px;" data-aos="fade-up" data-aos-delay="100">
                <h5 class="mb-4">Sonal</h5>
                <p class="mb-4">Backend Developer</p>
                <ul class="list-unstyled mb-0">
                  <a href="#!" class="px-1">
                    <i class="fab fa-github text-white"></i>
                  </a>
                  <a href="#!" class="px-1">
                    <i class="fab fa-twitter text-white"></i>
                  </a>
                  <a href="#!" class="px-1">
                    <i class="fab fa-linkedin-in text-white"></i>
                  </a>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card text-white py-5" style="background-color: #6f42c1;">
              <div class="card-body">
                <!-- Apply AOS to the image directly -->
                <img class="rounded-circle shadow-2-strong mb-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" alt="avatar" style="width: 100px;" data-aos="fade-up" data-aos-delay="200" loading="lazy">
                <h5 class="mb-4">Shubham</h5>
                <p class="mb-4">Digital Marketing Analyst</p>
                <ul class="list-unstyled mb-0">
                  <a href="#!" class="px-1">
                    <i class="fab fa-facebook-f text-white"></i>
                  </a>
                  <a href="#!" class="px-1">
                    <i class="fab fa-twitter text-white"></i>
                  </a>
                  <a href="#!" class="px-1">
                    <i class="fab fa-linkedin-in text-white"></i>
                  </a>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-0">
            <div class="card text-white py-5" style="background-color: #6f42c1;">
              <div class="card-body">
                <!-- Apply AOS to the image directly -->
                <img class="rounded-circle shadow-2-strong mb-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" alt="avatar" style="width: 100px;" data-aos="fade-up" data-aos-delay="300">
                <h5 class="mb-4">Uday</h5>
                <p class="mb-4">Web Designer</p>
                <ul class="list-unstyled mb-0">
                  <a href="#!" class="px-1">
                    <i class="fab fa-dribbble text-white"></i>
                  </a>
                  <a href="#!" class="px-1">
                    <i class="fab fa-linkedin-in text-white"></i>
                  </a>
                  <a href="#!" class="px-1">
                    <i class="fab fa-instagram text-white"></i>
                  </a>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

</section>
</div>
</div>
<!-- ---------------------------------------------------ACTIVITIES SECTION ------------------------------------ -->
<!-- Gallery Section -->

<section class="container py-5 mt-4 bg-light" id="activities" style="border-radius:5%">


  <h3 class="text-center pt-5 typing-effect" style="color:purple" >Student Activites</h3>
  <div class="row g-4">
    <div class="col-md-4" data-aos="fade-up">
      <div class="gallery-item">
        <img src="https://mikesreda.com/wp-content/uploads/2017/09/Gallery_16.jpg" class="img-fluid" alt="Image 1" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="gallery-item">
        <img src="https://www.gamedesigning.org/wp-content/uploads/2015/10/the-best-animation-companies.jpg" class="img-fluid" alt="Image 2" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <div class="gallery-item">
        <img src="https://www.gamedesigning.org/wp-content/uploads/2015/10/the-best-animation-companies.jpg" class="img-fluid" alt="Image 3" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <div class="gallery-item">
        <img src="https://www.gamedesigning.org/wp-content/uploads/2015/10/the-best-animation-companies.jpg" class="img-fluid" alt="Image 4" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
      <div class="gallery-item">
        <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Image 5" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
      <div class="gallery-item">
        <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Image 6" loading="lazy">
      </div>
    </div>
  </div>

    </section>
 

<!-- ----------------------------------------------------- EVENTS --------------------------------------- -->
<!-- Gallery Section -->
<!-- <div class="card">
  <div class="card-body"  style="background: linear-gradient(to right, #6a0dad, #ff7f32, #1e3a8a);
  "> -->
<section class="container my-5" id="eventsgallery">
  <h3 class="text-center pt-5 typing-effect" style="color:#ffffff">Student Events</h3>
  <div class="row g-4">
    <div class="col-md-4" data-aos="fade-up">
      <div class="gallery-item">
        <img src="https://www.gamedesigning.org/wp-content/uploads/2015/10/the-best-animation-companies.jpg" class="img-fluid" alt="Image 1" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="gallery-item">
        <img src="https://www.gamedesigning.org/wp-content/uploads/2015/10/the-best-animation-companies.jpg" class="img-fluid" alt="Image 2" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <div class="gallery-item">
        <img src="https://www.gamedesigning.org/wp-content/uploads/2015/10/the-best-animation-companies.jpg" class="img-fluid" alt="Image 3" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <div class="gallery-item">
        <img src="https://www.gamedesigning.org/wp-content/uploads/2015/10/the-best-animation-companies.jpg" class="img-fluid" alt="Image 4" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
      <div class="gallery-item">
        <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Image 5" loading="lazy">
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
      <div class="gallery-item">
        <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Image 6" loading="lazy">
      </div>
    </div>
  </div>
<!-- </div>
</div> -->
</section>

  <!-- VFX Section -->
  <section class="vfx-background">
    <h3 class="text-center pt-5 typing-effect" style="color:#ffffff">VFX</h3>
  
    <!-- Background Video -->
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <video class="d-block w-100" autoplay muted loop preload="auto" loading="lazy">
        <source src="https://www.animaker.com/Animaker-Home/new-assets/newhome-loop-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="position-relative overflow-hidden pt-4" style="height: 100vh;">
      <!-- Video Container -->
      <div class="d-flex justify-content-center align-items-center h-100 w-100">
        <video class="w-75" autoplay muted loop>
          <source src="https://www.animaker.com/Animaker-Home/new-assets/newhome-loop-video.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    <div class="container" id="vfxanimation">
      <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-12 text-center">
          <!-- Floating Text -->
          <!-- <h1 class="floating-text" data-aos="fade-up">Welcome to the VFX World</h1> -->
  
          <!-- Description Text -->
          <p class="fade-in mt-4" data-aos="fade-up" data-aos-delay="400">
            <!-- Explore the power of animations and visual effects. In this section, you'll see different dynamic and engaging elements that react to user interactions. -->
          </p>
  
          <!-- Call to Action Button -->
          <a href="#gallery" class="btn btn-lg btn-danger mt-4" data-aos="fade-up" data-aos-delay="600">
            Explore Gallery
          </a>
        </div>
      </div>
  </div>
      <!-- Hover Effect Image Gallery -->
      <div class="row justify-content-center mt-5">
        <div class="col-md-3 col-6 hover-effect" data-aos="fade-up" data-aos-delay="800" loading="lazy">
          <img src="https://via.placeholder.com/400x300" class="img-fluid border-animate" alt="Sample Image 1" loading="lazy">
        </div>
        <div class="col-md-3 col-6 hover-effect" data-aos="fade-up" data-aos-delay="1000">
          <img src="https://via.placeholder.com/400x300" class="img-fluid border-animate" alt="Sample Image 2" loading="lazy">
        </div>
        <div class="col-md-3 col-6 hover-effect" data-aos="fade-up" data-aos-delay="1200">
          <img src="https://via.placeholder.com/400x300" class="img-fluid border-animate" alt="Sample Image 3" loading="lazy">
        </div>
        <div class="col-md-3 col-6 hover-effect" data-aos="fade-up" data-aos-delay="1400">
          <img src="https://via.placeholder.com/400x300" class="img-fluid border-animate" alt="Sample Image 4" loading="lazy">
        </div>
      </div>
  
      <!-- Animated Circles -->
      <div class="circle circle-1"></div>
      <div class="circle circle-2"></div>
      <div class="circle circle-3"></div>
  
      <!-- Progress Bar -->
      <div class="progress mt-5">
        <div class="progress-bar" role="progressbar"></div>
      </div>
    </div>
  </section>
  

  <!-- -----------------------------------GAME ANIMATION SERVIVICES---------------------------- -->
    
  <!-- ----------------------------------------GAMING SECTION------------------------------------- -->
 <!-- Background Video Section -->
 <div class="position-relative overflow-hidden pt-4" style="height: 100vh;">
  <!-- Video Container -->
  <div class="d-flex justify-content-center align-items-center h-100 w-100">
    <video class="w-75" autoplay muted loop preload="auto" loading="lazy">
      <source src="https://video-previews.elements.envatousercontent.com/h264-video-previews/ca600258-de54-4b57-9bd3-6293035af54f/38356188.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <!-- Text Overlay -->
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
    <h1 class="display-3 fw-bold text-shadow">Welcome to the Gaming World</h1>
    <p class="lead text-shadow">Explore the best gaming videos and tutorials</p>
    <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal" onclick="setVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
      Watch Video
    </button>
  </div>
</div>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Gaming Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe class="w-100" height="400" src="https://video-previews.elements.envatousercontent.com/h264-video-previews/ca600258-de54-4b57-9bd3-6293035af54f/38356188.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  function setVideo(url) {
    // This will set the video URL dynamically for the modal.
    const iframe = document.querySelector('#videoModal iframe');
    iframe.src = url;
  }
</script> -->
  <!-- ----------------------------------------MULTIMEDIA ANIMATION ----------------------------- -->
  <!-- Header Section with Animated Text -->
   <!-- <div class="card">
<div class="card-body"  style="background: linear-gradient(to right, #6a0dad, #ff7f32, #1e3a8a);
"> -->
  <div class="container text-center py-5">
    <h3 class="animated-text typing-effect" style="color:#ffffff">Welcome to the Multimedia World</h3>
    <p class="lead animated-text">Experience stunning animations, images, and videos with a purple-themed design!</p>
  </div>

  <!-- Multimedia Section -->
  <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <!-- Image 1 with Hover Animation -->
      <div class="col">
        <div class="card image-container">
          <img src="https://motiongility.com/wp-content/uploads/2023/08/Role-of-animation-in-boosting-us-1-768x432.png" loading="lazy" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Image 1</h5>
            <p class="card-text">A beautiful visual representation of multimedia.</p>
          </div>
        </div>
      </div>

      <!-- Image 2 with Hover Animation -->
      <div class="col">
        <div class="card image-container">
          <img src="https://motiongility.com/wp-content/uploads/2023/08/Multimedia-Animation-01-1-1-1.png" loading="lazy" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">Image 2</h5>
            <p class="card-text">Another stunning multimedia graphic for your experience.</p>
          </div>
        </div>
      </div>

      <!-- Video with Animation -->
      <div class="col">
        <div class="card">
          <div class="video-embed">
            <iframe src="https://videos.pexels.com/video-files/2759477/2759477-uhd_2560_1440_30fps.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" loading="lazy" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Video 1</h5>
            <p class="card-text">Watch this amazing gaming video right now!</p>
          </div>
        </div>
      <!-- </div> -->

    </div>
  </div>
</div>
<?php $this->load->view("includes/footer") ?>
</div>
  <!-- Bootstrap JS & Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  <script>
    function setVideo(url) {
      const iframe = document.querySelector('.modal-body iframe');
      iframe.src = url;
    }

    self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open('video-cache').then((cache) => {
            return cache.addAll([
                '/videos/video1.mp4',
                '/videos/video2.mp4'
            ]);
        })
    );
});

self.addEventListener('fetch', (event) => {
    if (event.request.url.includes('.mp4')) {
        event.respondWith(
            caches.match(event.request).then((cachedResponse) => {
                return cachedResponse || fetch(event.request);
            })
        );
    }
});

  </script>
<!-- -------------------------------------------------------END------------------------------------------------ -->
 
  <!-- AOS JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1200, // Duration of animation in milliseconds
      once: true, // Animation happens once when scrolling into view
    });
  </script>

  <!-- AOS JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1200, // Duration of animation in milliseconds
      once: true, // Animation happens once when scrolling into view
    });
  </script>

<!-- AOS JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // Duration of animation in milliseconds
    once: true, // Animation only triggers once when scrolling
  });
</script>

<!-- ------------------------------heading animations--------------------------- -->
<script>
  // Function to trigger the typing effect
  function triggerTypingEffect(element) {
    const text = element.getAttribute('data-text'); // Get the original text from the data-text attribute
    let index = 0;
    let content = '';

    // Function to add one character at a time
    function typeLetter() {
      if (index < text.length) {
        content += text.charAt(index);  // Add one character at a time
        element.innerHTML = `<span class="typing-container">${content}<span class="cursor"></span></span>`; // Add cursor
        index++;
        setTimeout(typeLetter, 150);  // Adjust the speed here
      } else {
        element.innerHTML = `<span class="typing-container">${content}</span>`;  // Remove cursor when typing is done
      }
    }

    // Start typing effect
    typeLetter();
  }

  document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.typing-effect'); // Get all elements with 'typing-effect' class

    // Store the original text in a custom data attribute (data-text) to avoid losing it
    elements.forEach(function(element) {
      element.setAttribute('data-text', element.textContent.trim()); // Store original text
      element.textContent = '';  // Clear text content for typing effect
    });

    // Set up Intersection Observer to trigger typing when the element is in view
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Reset the text content to start typing effect again
          entry.target.textContent = ''; // Clear content to reset typing
          triggerTypingEffect(entry.target); // Trigger the typing effect
        }
      });
    }, { threshold: 0.5 }); // Trigger when 50% of the element is in view

    // Start observing each element with the typing effect class
    elements.forEach(element => {
      observer.observe(element);
    });
  });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9.1.0/swiper-bundle.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showMore() {
      // Show the hidden images
      for (let i = 7; i <= 12; i++) {
        let img = document.getElementById("image" + i);
        img.style.display = "block";
      }

      // Hide the "Show More" button and show the "Show Less" button
      document.getElementById("showMoreBtn").style.display = "none";
      document.getElementById("showLessBtn").style.display = "inline-block";
    }

    function showLess() {
      // Hide images 7 to 12
      for (let i = 7; i <= 12; i++) {
        let img = document.getElementById("image" + i);
        img.style.display = "none";
      }

      // Show the "Show More" button and hide the "Show Less" button
      document.getElementById("showMoreBtn").style.display = "inline-block";
      document.getElementById("showLessBtn").style.display = "none";
    }
</script>
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