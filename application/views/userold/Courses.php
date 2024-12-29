<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Class</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css js/model.css'; ?>">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background: linear-gradient(135deg, #4e54c8, #8f94fb); */
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

        /* Style for the p tag */
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

        /* navbar logo image */
        .nav-logo-img {
            filter: drop-shadow(1px 4px 2px rgba(255, 255, 255, 0.3));
            /* display: inline-block; */
        }

        /* navbar logo image */
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


        /* Jump Up and Down Keyframe Animation */
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
            /* background: #8e44ad; */
            transition: all 0.4s;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        .animated-button:hover {
            color: #fff;
            background: rgb(142, 68, 173);

            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(142, 68, 173, 1);
        }

        .animated-button:hover::before {
            width: 0;
            height: 0;
        }

        .animated-button span {
            position: relative;
            z-index: 1;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 10px #8e44ad, 0 0 20px #8e44ad, 0 0 30px #8e44ad, 0 0 40px #8e44ad;
            }

            100% {
                text-shadow: 0 0 15px #ff00ff, 0 0 25px #ff00ff, 0 0 35px #ff00ff, 0 0 50px #ff00ff;
            }
        }

        .pinac {
            background: linear-gradient(90deg, #4e54c8, #8f94fb);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
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
    </style>
</head>

<body>

    <?php $this->load->view("includes/navbar"); ?>
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 90vh;
        }

        .card-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            max-width: 80%;
            height: 80%;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            /* Sharp border */
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.3);
            /* Transparent dark background */
            backdrop-filter: blur(15px);
            /* Blur effect */
            color: white;
            /* White text for dark theme */
            text-align: center;
        }

        .carousel-item video {
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }

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

    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <!-- First Video with Blurred Card -->
            <div class="carousel-item active">
                <div class="video-container">
                    <video autoplay muted loop>
                        <source src="<?php echo base_url('assets/images/courses/vfx.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-overlay">
                        <div class="glitch-container">
                            <h1 class="glitch-text fs-1" data-text="VFX">VFX</h1>
                        </div>
                        <!-- <p class="card-title fs-1">
                            VFX
                        </p> -->
                        <p class="card-text fs-4">The Visual Effects (VFX) course trains individuals to create stunning visuals for films, games, and media. It focuses on blending real-world elements with computer-generated imagery. Students learn skills like compositing, particle effects, and CG integration. The course emphasizes hands-on training with industry-standard tools. Graduates are prepared for careers in entertainment and media production.</p>
                        <!-- <ul class="mx-5 fs-5">
                            <li class="text-start">Covers digital design, compositing, CG integration, and advanced particle effects.</li>
                            <li class="text-start">Includes practical projects to develop industry-relevant skills and a professional portfolio</li>
                            <li class="text-start">Training on tools like Adobe After Effects, Autodesk Maya, and Foundry Nuke</li>
                        </ul> -->
                        <hr>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- Second Video with Blurred Card -->
            <div class="carousel-item">
                <div class="video-container">
                    <video autoplay muted loop>
                        <source src="<?php echo base_url('assets/images/courses/3danimation.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-overlay">
                        <div class="glitch-container">
                            <h1 class="glitch-text fs-1" data-text="3D Animation">3D Animation</h1>
                        </div>
                        <p class="card-text fs-4">The 3D animation course is designed to teach the fundamentals of creating dynamic, lifelike animations using cutting-edge tools and techniques. It equips learners with practical skills and prepares them for industry demands.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores error aperiam odio perferendis quia molestiae in, sunt quisquam accusamus, qui reprehenderit neque eos, esse voluptas!
                        </p>
                        <!-- <ul class="mx-5 fs-5">
                            <li class="text-start">Gain expertise in 3D modeling, rigging, texturing, animation, and rendering, covering all essential aspects.</li>
                            <li class="text-start">Work on real-world projects to build a strong portfolio and enhance your practical skills</li>
                            <li class="text-start">Learn industry-standard software like Maya, Blender, and Unreal Engine for professional animation creation</li>
                        </ul> -->
                        <hr>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>

                    </div>
                </div>
            </div>

            <!-- Third Video with Blurred Card -->
            <div class="carousel-item">
                <div class="video-container">
                    <video autoplay muted loop>
                        <source src="<?php echo base_url('assets/images/courses/gaming.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-overlay">
                        <div class="glitch-container">
                            <h1 class="glitch-text fs-1" data-text="Gaming">Gaming</h1>
                        </div>
                        <p class="card-text fs-4">The 3D animation course is designed to teach the fundamentals of creating dynamic, lifelike animations using cutting-edge tools and techniques. It equips learners with practical skills and prepares them for industry demands.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum culpa fugit, veniam cum inventore veritatis ipsam id eligendi, nesciunt porro impedit quod quos nihil dolorum.
                        </p>
                        <!-- <ul class="mx-5 fs-5">
                            <li class="text-start">Gain expertise in 3D modeling, rigging, texturing, animation, and rendering, covering all essential aspects.</li>
                            <li class="text-start">Work on real-world projects to build a strong portfolio and enhance your practical skills</li>
                            <li class="text-start">Learn industry-standard software like Maya, Blender, and Unreal Engine for professional animation creation</li>
                        </ul> -->
                        <hr>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>


            <!-- Second Video with Blurred Card -->
            <div class="carousel-item">
                <div class="video-container">
                    <video autoplay muted loop>
                        <source src="<?php echo base_url('assets/images/courses/vfx.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-overlay">
                        <div class="glitch-container">
                            <h1 class="glitch-text fs-1" data-text="Graphics Designing">Graphics Designing</h1>
                        </div>
                        <p class="card-text fs-4">The 3D animation course is designed to teach the fundamentals of creating dynamic, lifelike animations using cutting-edge tools and techniques. It equips learners with practical skills and prepares them for industry demands.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores error aperiam odio perferendis quia molestiae in, sunt quisquam accusamus, qui reprehenderit neque eos, esse voluptas!
                        </p>
                        <!-- <ul class="mx-5 fs-5">
                            <li class="text-start">Gain expertise in 3D modeling, rigging, texturing, animation, and rendering, covering all essential aspects.</li>
                            <li class="text-start">Work on real-world projects to build a strong portfolio and enhance your practical skills</li>
                            <li class="text-start">Learn industry-standard software like Maya, Blender, and Unreal Engine for professional animation creation</li>
                        </ul> -->
                        <hr>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>

                    </div>
                </div>
            </div>


            <!-- Second Video with Blurred Card -->
            <div class="carousel-item">
                <div class="video-container">
                    <video autoplay muted loop>
                        <source src="<?php echo base_url('assets/images/courses/3danimation.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-overlay">
                        <div class="glitch-container">
                            <h1 class="glitch-text fs-1" data-text="Video Editing and Motion Graphics">Video Editing and Motion Graphics</h1>
                        </div>
                        <p class="card-text fs-4">The 3D animation course is designed to teach the fundamentals of creating dynamic, lifelike animations using cutting-edge tools and techniques. It equips learners with practical skills and prepares them for industry demands.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores error aperiam odio perferendis quia molestiae in, sunt quisquam accusamus, qui reprehenderit neque eos, esse voluptas!
                        </p>
                        <!-- <ul class="mx-5 fs-5">
                            <li class="text-start">Gain expertise in 3D modeling, rigging, texturing, animation, and rendering, covering all essential aspects.</li>
                            <li class="text-start">Work on real-world projects to build a strong portfolio and enhance your practical skills</li>
                            <li class="text-start">Learn industry-standard software like Maya, Blender, and Unreal Engine for professional animation creation</li>
                        </ul> -->
                        <hr>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>

                    </div>
                </div>
            </div>


            <!-- Second Video with Blurred Card -->
            <div class="carousel-item">
                <div class="video-container">
                    <video autoplay muted loop>
                        <source src="<?php echo base_url('assets/images/courses/gaming.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-overlay">
                        <div class="glitch-container">
                            <h1 class="glitch-text fs-1" data-text="Portfolio Development Program">Portfolio Development Program</h1>
                        </div>
                        <p class="card-text fs-4">The 3D animation course is designed to teach the fundamentals of creating dynamic, lifelike animations using cutting-edge tools and techniques. It equips learners with practical skills and prepares them for industry demands.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores error aperiam odio perferendis quia molestiae in, sunt quisquam accusamus, qui reprehenderit neque eos, esse voluptas!
                        </p>
                        <!-- <ul class="mx-5 fs-5">
                            <li class="text-start">Gain expertise in 3D modeling, rigging, texturing, animation, and rendering, covering all essential aspects.</li>
                            <li class="text-start">Work on real-world projects to build a strong portfolio and enhance your practical skills</li>
                            <li class="text-start">Learn industry-standard software like Maya, Blender, and Unreal Engine for professional animation creation</li>
                        </ul> -->
                        <hr>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <style>
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 60vh;
            overflow: hidden;
        }

        .card {
            position: relative;
            width: 600px;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text-container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 600px;
            height: 400px;
            /* background: rgba(0, 0, 0, 0.7); */
            /* color: white; */
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.5s ease;
            z-index: 1;
        }

        .text-container h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .text-container p {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .text-container button {
            background-color: #17a2b8;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .text-container button:hover {
            background-color: #138496;
        }

        .card-container:hover .card {
            transform: translateX(-50%);
        }

        .card-container:hover .text-container {
            opacity: 1;
            transform: translateX(0%);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card-container {
                flex-direction: column;
                height: auto;
            }

            .card,
            .text-container {
                position: relative;
                width: 100%;
                height: auto;
                transform: none;
                opacity: 1;
                margin-bottom: 20px;
            }

            .text-container {
                transform: translateX(-50%);
                /* background: rgba(0, 0, 0, 0.8); */
                color: white;
                padding: 20px;
            }

            .card-container:hover .card {
                transform: none;
            }

            .card-container:hover .text-container {
                transform: translateX(-50%);
            }
        }
    </style>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Courses</h2>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center" id="courseTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
                    role="tab" aria-controls="tab1" aria-selected="true"><span class="text-primary">3D Animation</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                    role="tab" aria-controls="tab2" aria-selected="false"><span class="text-primary">VFX</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                    role="tab" aria-controls="tab3" aria-selected="false"><span class="text-primary">Gaming</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button"
                    role="tab" aria-controls="tab4" aria-selected="true"><span class="text-primary">Graphics Designing</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button"
                    role="tab" aria-controls="tab5" aria-selected="false"><span class="text-primary">Motion Graphics</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button"
                    role="tab" aria-controls="tab6" aria-selected="false"><span class="text-primary">Portfolio Development</span></button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content mt-3" id="courseTabsContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="card-container">
                    <div class="card">
                        <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="3D Animation">
                    </div>
                    <div class="text-container text-dark p-2">
                        <p class="fs-2 fw-bold">3D Animation Course</p>
                        <p class="pb-4  border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima? Eos eveniet velit dignissimos neque numquam, aut, vel natus non labore mollitia reprehenderit praesentium minima.</p>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="card-container">
                    <div class="card">
                        <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="VFX">
                    </div>
                    <div class="text-container text-dark p-2">
                        <p class="fs-2 fw-bold">VFX</p>
                        <p class="pb-4  border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima? Eos eveniet velit dignissimos neque numquam, aut, vel natus non labore mollitia reprehenderit praesentium minima.</p>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>
            <!-- Tab 3 -->
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <div class="card-container">
                    <div class="card">
                        <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="Gaming">
                    </div>
                    <div class="text-container text-dark p-2">
                        <p class="fs-2 fw-bold">Gaming</p>
                        <p class="pb-4  border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima? Eos eveniet velit dignissimos neque numquam, aut, vel natus non labore mollitia reprehenderit praesentium minima.</p>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <div class="card-container">
                    <div class="card">
                        <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="3D Animation">
                    </div>
                    <div class="text-container text-dark p-2">
                        <p class="fs-2 fw-bold">Graphics Designing</p>
                        <p class="pb-4  border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima? Eos eveniet velit dignissimos neque numquam, aut, vel natus non labore mollitia reprehenderit praesentium minima.</p>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                <div class="card-container">
                    <div class="card">
                        <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="3D Animation">
                    </div>
                    <div class="text-container text-dark p-2">
                        <p class="fs-2 fw-bold">Motion Graphics</p>
                        <p class="pb-4  border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima? Eos eveniet velit dignissimos neque numquam, aut, vel natus non labore mollitia reprehenderit praesentium minima.</p>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                <div class="card-container">
                    <div class="card">
                        <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="3D Animation">
                    </div>
                    <div class="text-container text-dark p-2">
                        <p class="fs-2 fw-bold">Portfolio Development</p>
                        <p class="pb-4  border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima? Eos eveniet velit dignissimos neque numquam, aut, vel natus non labore mollitia reprehenderit praesentium minima.</p>
                        <dl>
                            <dt>Course Duration</dt>
                            <dd>6 months</dd>
                            <dt>Course Fees</dt>
                            <dd>50000/-</dd>
                        </dl>
                        <a href="" class="button-85" role="button">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-image-div {
            width: 100%;
            height: auto;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo base_url() . 'assets/images/courses/vfx.jpg'; ?>");
        }

        .card-overlay2 {
            /* position: absolute; */
            /* top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); */
            /* z-index: 2; */
            width: 80%;
            max-width: 80%;
            height: 80%;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(15px);
            color: white;
            text-align: center;
        }
    </style>

    <div class="bg-image-div">
        <div class="container mt-5">
            <div class="d-flex justify-content-center align-items-center" style="height: 90vh;">
                <div class="card-overlay2">
                    <div class="glitch-container">
                        <h1 class="fs-1">Enquire Now</h1>
                    </div>
                    <form>
                        <div class="row mb-3">
                            <!-- Name -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            </div>
                            <!-- Contact Number -->
                            <div class="col-md-6">
                                <label for="contact" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="contact" placeholder="Enter your contact number" required>
                            </div>
                        </div>
                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
                        </div>
                        <!-- Course Name -->
                        <div class="mb-3">
                            <label for="course" class="form-label">Select Course</label>
                            <select class="form-select" id="course" required>
                                <option value="" selected disabled>Select a course</option>
                                <option value="3D Animation">3D Animation</option>
                                <option value="VFX">VFX</option>
                                <option value="Gaming">Gaming</option>
                                <option value="cyber-security">Cyber Security</option>
                            </select>
                        </div>
                        <!-- Submit Button -->
                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary">Submit Enquiry</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php $this->load->view("includes/footer") ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() . 'assets/css js/model.js'; ?>"></script>

</body>

</html>