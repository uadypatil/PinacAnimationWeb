<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Background with Text and Gradient Overlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBqQ1BwwGo/IyQer5mawrnbkmg0hNDUFD0Ly9Vq2T9w/giWgHtoYer5mawrnbkmg0hNDUFD0Ly9Vq2T9w/giWgHtoY0cGZ7T6Npx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            overflow: hidden;
            font-family: 'Montserrat';
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            pointer-events: none;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 100vw;
            display: flex;
        }

        .flex-30 {
            flex: 0 0 25%;
        }

        .flex-70 {
            flex: 0 0 75%;
        }

        .welcome-text{
            /* font-family: 'Roboto'; */
        }



        .navbar-main {
            width: 100%;
            background: none;
            position: absolute;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            align-items: center;
        }

        .nav-image {
            min-width: 80px;
            width: 200px;
            max-width: 200px;
            height: auto;
        }

        .nav-image-div {
            margin-left: 1rem;
        }

        .navbar-enquiry_btn {
            margin-right: 4rem;
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
            text-decoration: none;
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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-main">
        <div class="nav-image-div">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url() . 'assets/images/logomain.png'; ?>" alt="Logo" class="nav-image">
            </a>
        </div>

        <div class="navbar-enquiry_btn">
            <a href="" class="button-85">Enquire Now</a>
        </div>
    </nav>

    <div class="video-container">
        <video id="myVideo" autoplay muted loop>
            <source src="your-video-path1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="gradient-overlay"></div>

        <!-- main code starts here -->
        <div class="wrapper text-overlay">
            <div class="sidebar-wrapper flex-30">
                <?php $this->load->view("includes/sidebar"); ?>
            </div>

            <style>
                .welcome-text h1{
                    color: rgba(255,255,255, 0.9);
                }
                .welcome-text p{
                    color: rgba(255,255,255, 0.7);
                }
            </style>
            <div class="main-wrapper flex-70">
                <div class="welcome-text">
                    <h1>PINAC</h1>
                    <p>INSTITUTE OF ANIMATION</p>
                </div>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4pbjFJzerYROTxYSrc" crossorigin="anonymous"></script>

</body>

</html>