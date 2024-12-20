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
        .all-courses {
            height: auto;
            width: 100%;
            position: sticky;
        }

        .course {
            position: relative;
            width: 100%;
            height: 800px;
            margin: auto;
            box-shadow: 0px 0px 4px 2px rgba(255, 255, 255, 0.6);
            transition: transform 0.5s;

        }

        .bg-course {
            width: 100%;
            height: 800px;
            /* width: 100%;
        height: 350px; */
            background-size: cover;
            filter: brightness(0.6);
        }

        .course:hover .content {
            /* background-color: rgba(255, 226, 141, 0.3); */
            background-color: rgba(255, 255, 255, 0.1);

        }

        .course:hover {
            transform: translate(0px, -5px);
        }

        .content {
            position: absolute;
            top: 0px;
            color: rgba(255, 110, 20, 1);
            padding: 10px;
            text-align: justify;
            /* margin: 5px; */
            height: 100%;
            transition: background-color 0.6s;

        }

        .content h5,
        .head-h3 {
            /* font-size: 12px; */

            font-family: "Cinzel Decorative", serif;
            font-weight: 600;
            font-style: normal;
        }

        .courseimg {
            width: 70%;
            height: 200px;
            display: block;
            margin: auto;
        }

        .content p,
        .head-p {
            font-family: "Bellefair", serif;
            font-weight: 400;
            font-style: normal;
            text-align: center;
        }

        .course:hover .content {
            /* background-color: rgba(255, 226, 141, 0.3); */
            background-color: rgba(255, 255, 255, 0.1);

        }

        .course:hover {
            transform: translate(0px, -5px);
        }

        .content a {
            background-color: rgb(255, 110, 20);
            color: black;
            border: 2px solid transparent;
            font-family: "Bellefair", serif;
            font-weight: 400;
            font-style: normal;
        }

        .content a:hover {
            background-color: transparent;
            color: rgba(255, 226, 141);
            border: 2px solid rgba(255, 226, 141);
            font-family: "Bellefair", serif;
            font-weight: 400;
            font-style: normal;
        }

        .video {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
    </style>
    <style>
        /* Video Background Styling */
        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            filter: blur(10px);
        }

        /* Section Content Styling */
        .container-fluid {
            position: relative;
            z-index: 2;
            color: #fff;
            padding: 50px 15px;
            /* Optional padding for better layout */
        }

        /* Overlay to improve readability */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            /* Dark overlay */
            z-index: 1;
        }
    </style>

    <section class="text-center py-5" style="position: relative; overflow: hidden;">
        <!-- Video Background -->
        <video class="background-video" autoplay muted loop>
            <source src="WhatsApp Video 2024-12-17 at 3.35.45 PM.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Dark Overlay -->
        <div class="overlay"></div>

        <!-- Content Section -->
        <div class="container-fluid">
            <h3>Our Courses</h3>

            <div class="all-courses">
                <div class="row">
                    <div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- first card for first course -->
                        <div class="course my-lg-4 my-md-3 my-sm-2 my-2">
                            <div class="bg-course mx-auto" style=" background-image: url('<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>');"></div>
                            <div class="content">
                                <h5 class="mt-5 text-center">Course Name</h5>
                                <!-- <div class="courseimgdiv">
                                    <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="" class="courseimg mb-2">
                                </div> -->
                                <p style="font-size: 18px;">
                                    <?php // echo substr($course['course'], 0, 135)  
                                    ?>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate explicabo quae deleniti ullam! Amet perspiciatis fugit tempore! Nulla quis amet tempore voluptatem facilis, unde delectus optio doloribus non expedita repellendus?
                                </p>
                                <div class="card-list mx-lg-5 mx-md-5 mx-1 my-lg-2 my-md-2 my-1 ">
                                    <ul>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                    </ul>
                                </div>
                                <center>
                                    <a class="btn fw-bold " href="">Enroll Now</a>
                                </center>
                            </div>
                        </div>

                        <div class="course my-lg-4 my-md-3 my-sm-2 my-2">
                            <div class="bg-course mx-auto" style=" background-image: url('<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>');"></div>
                            <div class="content">
                                <h5 class="mt-5 text-center">Course Name</h5>
                                <!-- <div class="courseimgdiv">
                                    <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="" class="courseimg mb-2">
                                </div> -->
                                <p style="font-size: 18px;">
                                    <?php // echo substr($course['course'], 0, 135)  
                                    ?>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate explicabo quae deleniti ullam! Amet perspiciatis fugit tempore! Nulla quis amet tempore voluptatem facilis, unde delectus optio doloribus non expedita repellendus?
                                </p>
                                <div class="card-list mx-lg-5 mx-md-5 mx-1 my-lg-2 my-md-2 my-1 ">
                                    <ul>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                    </ul>
                                </div>
                                <center>
                                    <a class="btn fw-bold " href="">Enroll Now</a>
                                </center>
                            </div>
                        </div>

                        <div class="course my-lg-4 my-md-3 my-sm-2 my-2">
                            <div class="bg-course mx-auto" style=" background-image: url('<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>');"></div>
                            <div class="content">
                                <h5 class="mt-5 text-center">Course Name</h5>
                                <!-- <div class="courseimgdiv">
                                    <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="" class="courseimg mb-2">
                                </div> -->
                                <p style="font-size: 18px;">
                                    <?php // echo substr($course['course'], 0, 135)  
                                    ?>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate explicabo quae deleniti ullam! Amet perspiciatis fugit tempore! Nulla quis amet tempore voluptatem facilis, unde delectus optio doloribus non expedita repellendus?
                                </p>
                                <div class="card-list mx-lg-5 mx-md-5 mx-1 my-lg-2 my-md-2 my-1 ">
                                    <ul>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                    </ul>
                                </div>
                                <center>
                                    <a class="btn fw-bold " href="">Enroll Now</a>
                                </center>
                            </div>
                        </div>




                    </div>

                    <div class="col-xlg-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- card for second course -->
                        <div class=" my-lg-4 my-md-3 my-sm-2 my-2">
                            <div class="course w-100 " style="height: 300px;">
                                <div class="bg-course mx-auto" style=" background-image: url('<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>'); height: 300px"></div>
                                <div class="content">
                                    <h5 class="mt-5 text-center">Course Name</h5>
                                    <p style="font-size: 18px;">
                                        <?php // echo substr($course['course'], 0, 135)  
                                        ?>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate explicabo quae deleniti ullam! Amet perspiciatis fugit tempore! Nulla quis amet tempore voluptatem facilis, unde delectus optio doloribus non expedita repellendus?
                                    </p>
                                    <center>
                                        <a class="btn fw-bold " href="">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>


                        <div class="course my-lg-4 my-md-3 my-sm-2 my-2">
                            <div class="bg-course mx-auto" style=" background-image: url('<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>');"></div>
                            <div class="content">
                                <h5 class="mt-5 text-center">Course Name</h5>
                                <!-- <div class="courseimgdiv">
                                    <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="" class="courseimg mb-2">
                                </div> -->
                                <p style="font-size: 18px;">
                                    <?php // echo substr($course['course'], 0, 135)  
                                    ?>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate explicabo quae deleniti ullam! Amet perspiciatis fugit tempore! Nulla quis amet tempore voluptatem facilis, unde delectus optio doloribus non expedita repellendus?
                                </p>
                                <div class="card-list mx-lg-5 mx-md-5 mx-1 my-lg-2 my-md-2 my-1 ">
                                    <ul>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                    </ul>
                                </div>
                                <center>
                                    <a class="btn fw-bold " href="">Enroll Now</a>
                                </center>
                            </div>
                        </div>

                        <div class="course my-lg-4 my-md-3 my-sm-2 my-2">
                            <div class="bg-course mx-auto" style=" background-image: url('<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>');"></div>
                            <div class="content">
                                <h5 class="mt-5 text-center">Course Name</h5>
                                <!-- <div class="courseimgdiv">
                                    <img src="<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>" alt="" class="courseimg mb-2">
                                </div> -->
                                <p style="font-size: 18px;">
                                    <?php // echo substr($course['course'], 0, 135)  
                                    ?>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate explicabo quae deleniti ullam! Amet perspiciatis fugit tempore! Nulla quis amet tempore voluptatem facilis, unde delectus optio doloribus non expedita repellendus?
                                </p>
                                <div class="card-list mx-lg-5 mx-md-5 mx-1 my-lg-2 my-md-2 my-1 ">
                                    <ul>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                        <li>
                                            <p class="text-start">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, ratione nesciunt voluptatum sequi libero doloremque.</p>
                                        </li>
                                    </ul>
                                </div>
                                <center>
                                    <a class="btn fw-bold " href="">Enroll Now</a>
                                </center>
                            </div>
                        </div>


                        <div class=" my-lg-4 my-md-3 my-sm-2 my-2">
                            <div class="course w-100 " style="height: 300px;">
                                <div class="bg-course mx-auto" style=" background-image: url('<?php echo base_url() . 'assets/images/courses/3danimation.jpg'; ?>'); height: 300px"></div>
                                <div class="content">
                                    <h5 class="mt-5 text-center">Course Name</h5>
                                    <p style="font-size: 18px;">
                                        <?php // echo substr($course['course'], 0, 135)  
                                        ?>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate explicabo quae deleniti ullam! Amet perspiciatis fugit tempore! Nulla quis amet tempore voluptatem facilis, unde delectus optio doloribus non expedita repellendus?
                                    </p>
                                    <center>
                                        <a class="btn fw-bold " href="">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- Footer -->
    <?php $this->load->view("includes/footer") ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() . 'assets/css js/model.js'; ?>"></script>

</body>

</html>