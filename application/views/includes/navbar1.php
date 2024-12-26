<style>
    /* For WebKit-based browsers (Chrome, Safari, Edge) */
    ::-webkit-scrollbar {
        width: 12px;
        /* Width of the scrollbar */
        height: 12px;
        /* Height of the scrollbar (for horizontal scrollbar) */
    }

    ::-webkit-scrollbar-track {
        background: rgb(40, 19, 48);
        /* Background of the scrollbar track */
        /* border-radius: 10px; */
        /* Rounded corners for the track */
    }

    ::-webkit-scrollbar-thumb {
        background: purple;
        /* Purple color for the scrollbar thumb */
        border-radius: 10px;
        /* Rounded corners for the thumb */
    }

    ::-webkit-scrollbar-thumb:hover {
        background: rgb(142, 68, 173);
        /* Darker purple when hovered */
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
</style>

<header>
    <nav>
        <p>
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url() . 'assets/images/logomain.png'; ?>" alt="Logo" style="height: 90px; width: auto" class="nav-logo-img">
            </a>
        </p>
        <ul>
            <li class="menu-item">
                <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url() . 'courses'; ?>">Courses</a>
                <!-- <ul class="submenu">
                    <li>3D Animation</li>
                    <li>VFX</li>
                    <li>Gaming</li>
                    <li>Graphics Designing</li>
                    <li>Video Editing and Motion Graphics</li>
                    <li>Portfolio Development</li>
                </ul>
            </li> -->
            <li class="menu-item">
                <a href="<?php echo base_url() . 'studentgallery'; ?>">Student Gallery</a>
                <!-- <ul class="submenu">
                    <li>Activities</li>
                    <li>Events</li>
                    <li>Testinomials</li>
                </ul> -->
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url() . 'aboutus'; ?>">About Us</a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url() . 'contactus'; ?>">Contact Us</a>
            </li>
        </ul>
        <!-- <button class=""></button> -->
        <!-- <a href="#costumModal12" role="button" class="animated-button" data-toggle="modal">
            Enquire Now
        </a> -->

        <a href="" class="button-85" role="button">Enquire Now</a>
    </nav>
</header>