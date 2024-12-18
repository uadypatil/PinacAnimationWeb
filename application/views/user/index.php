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
            overflow: hidden;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid #fff;
            width: fit-content;
            animation: typing 3s steps(40, end), blink 0.5s step-end infinite alternate;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink {
            from {
                border-color: transparent;
            }

            to {
                border-color: #fff;
            }
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
        }

        .hero button {
            background: #ffd700;
            color: #4e54c8;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
        }

        .hero button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            transform: skewX(-45deg);
            transition: 0.5s;
        }

        .hero button:hover::before {
            left: 100%;
        }

        .btnhoverfilter {
            background: #ffd700;
            color: #4e54c8;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
            transition: color 0.3s ease;
            /* Optional: Smooth color change */
        }

        .btnhoverfilter::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            transform: skewX(-45deg);
            transition: left 0.5s ease;
            /* Smooth transition for the left property */
        }

        .btnhoverfilter:hover::before {
            left: 100%;
        }

        .btnhoverfilter:hover {
            color: #fff;
            /* Optional: Change text color on hover */
        }

        .star {
            position: absolute;
            background: #fff;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            animation: float 5s linear infinite;
        }

        @keyframes float {
            from {
                transform: translateY(100vh);
            }

            to {
                transform: translateY(-10vh);
            }
        }

        .gallery img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        footer {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 5px 0;
        }

        footer .social-icons a {
            color: #ffd700;
            text-decoration: none;
            margin: 0 10px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PINAC Animations</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active"><a class="nav-link" href="#about">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery">Testinomials</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">About Us</a></li>
                        <li class="nav-item"><a class="btn btn-warning text-dark-emphasis" href="#contact">Connect With US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="hero">
        <h2>Welcome to the World of Animation</h2>
        <p>Join our animation classes and bring your imagination to life.</p>
        <button class="btn btn-warning">Enroll Now</button>
        <!-- Stars Animation -->
        <div class="stars"></div>
    </div>
    <section id="about" class="section py-5 text-center">
        <div class="container">
            <h3>About Us</h3>
            <p>We are dedicated to teaching the art of animation to passionate learners.</p>
        </div>
    </section>
    <section id="courses" class="section py-5 text-center bg-light text-dark">
        <div class="container">
            <h3>Courses Offered</h3>
            <p>From beginner to advanced levels, we offer a variety of courses to suit your needs.</p>
        </div>
    </section>
    <section id="gallery" class="section py-5 text-center">
        <div class="container">
            <h3>Student Gallery</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="image1.webp" alt="Student Work 1" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="image1.webp" alt="Student Work 2" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="image1.webp" alt="Student Work 3" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <footer id="contact">
        <div class="container">
            <p>Contact Us</p>
            <p>Email: info@animationclass.com</p>
            <p>Phone: +123 456 7890</p>
            <div class="social-icons">
                <a href="#">&#x1F4F1;</a>
                <a href="#">&#x1F4AC;</a>
                <a href="#">&#x1F4E7;</a>
            </div>
        </div>
    </footer>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Animation JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const starContainer = document.querySelector('.hero');
            for (let i = 0; i < 100; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                star.style.left = Math.random() * 100 + 'vw';
                star.style.animationDelay = Math.random() * 5 + 's';
                star.style.animationDuration = 2 + Math.random() * 3 + 's';
                starContainer.appendChild(star);
            }

            const images = document.querySelectorAll('.gallery img');
            images.forEach((img) => {
                img.style.transition = 'transform 0.5s';
                img.addEventListener('mouseover', () => {
                    img.style.transform = 'scale(1.1)';
                });
                img.addEventListener('mouseout', () => {
                    img.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>

</html>