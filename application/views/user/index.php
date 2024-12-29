<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Background with Text and Gradient Overlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css js/'; ?>style.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-main">
        <div class="nav-image-div">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url() . 'assets/images/logomain.png'; ?>" alt="Logo" class="nav-image">
            </a>
        </div>

        <div class="navbar-enquiry_btn">
            <button type="button" class="button-85" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Enquire Now
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="video-container">
        <video id="myVideo" autoplay muted loop>
            <source src="<?php echo base_url() . 'assets/images/courses/gaming.mp4'; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="gradient-overlay"></div>

        <!-- main code starts here -->
        <div class="wrapper text-overlay">
            <div class="sidebar-wrapper flex-30">
                <?php $this->load->view("includes/sidebar"); ?>
            </div>

            <style>
                .welcome-text h1 {
                    color: rgba(255, 255, 255, 0.9);
                }

                .welcome-text p {
                    color: rgba(255, 255, 255, 0.7);
                }

                .welcome-text-bottom-text {
                    text-decoration: none;
                    color: rgba(255, 255, 255, 0.9);
                    font-weight: 300;
                    font-size: 30px;
                    transition: 0.3s;
                }

                #hero {
                    /* display: none; */
                }

                #other {
                    display: none;
                }

                #courses {
                    display: none;
                }

                #studentgallery {
                    display: none;
                }

                #konwus {
                    display: none;
                }

                #contactus {
                    display: none;
                }
            </style>
            <div class="main-wrapper flex-70">
                <!-- hero section -->
                <div class="welcome-text show-block" id="hero">
                    <p class="" style="font-size: 8rem; font-weight: 600;">PINAC</p>
                    <p class="" style="margin-top: -50px;">INSTITUTE OF ANIMATION</p>
                    <p class="welcome-text-bottom-text">3D ANIMATIONS | VFX | GAMING | GRAPHICS DESIGNING | VIDEO EDITING</p>
                </div>
                <!-- hero section ends -->

                <!-- courses section css -->
                <style>
                    .courses {
                        width: 100%;
                    }

                    .course-card {
                        width: 350px;
                        border-radius: 15px;
                        background: rgba(0, 0, 0, 0.2);
                        background-image: linear-gradient(to bottom right, rgba(255, 130, 92, 0.15), rgba(166, 92, 255, 0.12));
                        backdrop-filter: blur(10px);
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                        border: 1px solid rgba(255, 255, 255, 0.3);
                        color: white;
                        animation: gradientMove 1s linear infinite;
                        /* Applies animation */
                    }

                    @keyframes gradientMove {
                        0% {
                            background-position: 0% 0%;
                        }

                        50% {
                            background-position: 100% 100%;
                        }

                        100% {
                            background-position: 0% 0%;
                        }
                    }

                    .cards {
                        display: flex;
                        gap: 20px;
                        overflow-x: auto;
                        padding: 10px;
                        scroll-behavior: smooth;
                    }
                </style>
                <!-- courses section -->
                <div class="courses show-block" id="courses">
                    <p class="" style="font-size: 4rem; font-weight: 600;">Our Courses</p>
                    <div class="cards">
                        <div class="card course-card p-3" style="font-size: 1.2rem;">
                            <p style="font-size: 2rem;">course 1</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At numquam facilis quas libero nisi adipisci?</p>
                            <dl>
                                <dt>Course Duration</dt>
                                <dd>6 months</dd>
                                <dt>Course Fees</dt>
                                <dd>50000/-</dd>
                            </dl>

                            <p><a href="" class="button-85">Enquire Now</a></p>

                        </div>

                        <div class="card course-card p-3" style="font-size: 1.2rem;">
                            <p style="font-size: 2rem;">course 1</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At numquam facilis quas libero nisi adipisci?</p>
                            <dl>
                                <dt>Course Duration</dt>
                                <dd>6 months</dd>
                                <dt>Course Fees</dt>
                                <dd>50000/-</dd>
                            </dl>

                            <p><a href="" class="button-85">Enquire Now</a></p>

                        </div>

                        <div class="card course-card p-3" style="font-size: 1.2rem;">
                            <p style="font-size: 2rem;">course 1</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At numquam facilis quas libero nisi adipisci?</p>
                            <dl>
                                <dt>Course Duration</dt>
                                <dd>6 months</dd>
                                <dt>Course Fees</dt>
                                <dd>50000/-</dd>
                            </dl>

                            <p><a href="" class="button-85">Enquire Now</a></p>

                        </div>

                        <div class="card course-card p-3" style="font-size: 1.2rem;">
                            <p style="font-size: 2rem;">course 1</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At numquam facilis quas libero nisi adipisci?</p>
                            <dl>
                                <dt>Course Duration</dt>
                                <dd>6 months</dd>
                                <dt>Course Fees</dt>
                                <dd>50000/-</dd>
                            </dl>

                            <p><a href="" class="button-85">Enquire Now</a></p>

                        </div>

                        <div class="card course-card p-3" style="font-size: 1.2rem;">
                            <p style="font-size: 2rem;">course 1</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At numquam facilis quas libero nisi adipisci?</p>
                            <dl>
                                <dt>Course Duration</dt>
                                <dd>6 months</dd>
                                <dt>Course Fees</dt>
                                <dd>50000/-</dd>
                            </dl>

                            <p><a href="" class="button-85">Enquire Now</a></p>

                        </div>

                    </div>
                </div>
                <!-- courses section ends -->

                <!-- student gallery section -->
                <div class="show-block" id="studentgallery">
                    <p class="" style="font-size: 8rem; font-weight: 600;">PINAC</p>
                    <p class="" style="margin-top: -50px;">INSTITUTE OF ANIMATION</p>
                    <p class="welcome-text-bottom-text">3D ANIMATIONS | VFX | GAMING | GRAPHICS DESIGNING | VIDEO EDITING</p>
                </div>
                <!-- student gallery section ends -->

                <!-- know us section -->
                <div class="show-block" id="konwus">
                    <p class="" style="font-size: 3rem; font-weight: 600;">Know About Us</p>
                    <div class="row px-lg-5 px-md-3 px-1    ">
                        <div class="col-xlg-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751194.254360798!2d70.13508957312212!3d20.73887374365861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb2424a3177b%3A0xf03846b585696b8c!2sPINAC%20Institute%20of%20Animation%20and%20Multimedia!5e1!3m2!1sen!2sin!4v1735413879812!5m2!1sen!2sin"
                                    style="width: 100%; height: 350px;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-xlg-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div style="font-size: 1.3rem; font-weight: 500; text-align: justify">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, beatae eum doloribus, neque minima voluptatum totam voluptas expedita repudiandae vitae aliquid vel quod inventore quas.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, beatae eum doloribus, neque minima voluptatum totam voluptas expedita repudiandae vitae aliquid vel quod inventore quas.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, dolorem?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- know us section ends -->

                <!-- contact us css -->
                <style>
                    .contact-form-backdrop {
                        border-radius: 15px;
                        background: rgba(0, 0, 0, 0.2);
                        background-image: linear-gradient(to bottom right, rgba(255, 130, 92, 0.15), rgba(166, 92, 255, 0.12));
                        backdrop-filter: blur(10px);
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                        border: 1px solid rgba(255, 255, 255, 0.3);
                        color: white;
                        animation: gradientMove 1s linear infinite;
                        /* Applies animation */
                    }

                    .social-icons {
                        display: flex;
                        gap: 10px;
                    }

                    .social-icons a {
                        color: #fff;
                        background: #007bff;
                        padding: 10px;
                        border-radius: 50%;
                        text-align: center;
                        display: inline-flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 18px;
                        transition: background 0.3s;
                        width: 40px;
                        height: 40px;
                        text-decoration: none;
                    }

                    .social-icons a:hover {
                        background: #0056b3;
                    }
                </style>
                <!-- contact us section -->
                <div class="show-block" id="contactus">
                    <p class="" style="font-size: 3rem; font-weight: 600;">Contact Us</p>
                    <div class="row mx-xlg-5 mx-lg-5 mx-md-4 mx-sm-2 mx-1 py-2 px-lg-3 px-md-3 px-1 contact-form-backdrop">
                        <div class="col-xlg-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div style="font-size: 1.3rem; ">
                                <form action="">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required><br>

                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required><br>

                                    <label for="subject" class="form-label">Subject:</label>
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"><br>

                                    <label for="message" class="form-label">Message:</label>
                                    <textarea id="message" class="form-control" name="message" rows="3" placeholder="Your Message" required></textarea><br>

                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xlg-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div style="font-size: 1.3rem; font-weight: 500; text-align: justify">
                                <dl>
                                    <dt>Address</dt>
                                    <dd>
                                        <p>Office S1, 3rd Floor, Suyojit Sankul, Sharanpur Rd, above Bafna Jewellers, beside Rajiv Gandhi Bhavan Road, Tilak Wadi, Jejurkar Wadi, Sharanpur, Nashik, Maharashtra 422002</p>
                                    </dd>
                                    <dt>Contact Number</dt>
                                    <dd>9278973988</dd>
                                    <dt>Email</dt>
                                    <dd><a href="">support@pinacanimations.com</a></dd>
                                    <dt>Get map directions</dt>
                                    <dd><a href="https://maps.app.goo.gl/xu74hNKXhAx5oKgf8">Open Google Map</a></dd>
                                </dl>
                                <div class="social-icons justify-content-center mt-3">
                                    <a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.whatsapp.com" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://telegram.org" target="_blank" title="Telegram"><i class="fab fa-telegram-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact us section ends -->
            </div>
        </div>

    </div>


    </div>


    <script>
        changeVideo();

        function changeVideo() {
            var video = document.getElementById("myVideo");
            if (video.src.includes("<?php echo base_url() . 'assets/images/courses/gaming.mp4'; ?>")) {
                video.src = "<?php echo base_url() . 'assets/images/courses/gaming.mp4'; ?>";
            } else {
                video.src = "<?php echo base_url() . 'assets/images/courses/gaming.mp4'; ?>";
            }
            video.load();
        }

        // function to show blocks
        function show(id, button) {
            hideElements = document.getElementsByClassName("show-block");
            Array.from(hideElements).forEach(element => {
                element.style.display = "none";
            });
            document.getElementById(id).style.display = "block";
            // console.log(button.getAttribute("data-video-src"));
            document.getElementById("myVideo").src = button.getAttribute("data-video-src");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>