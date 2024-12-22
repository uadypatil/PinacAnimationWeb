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
        <a href="#costumModal12" role="button" class="animated-button" data-toggle="modal">
            Enquire Now
        </a>
    </nav>
</header>