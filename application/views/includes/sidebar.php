<style>
    .sidebarlist {
        list-style-type: none;
        text-align: left;
        padding-left: 50px;
    }

    .sidebarlist li {
        margin-top: 50px;
        margin-bottom: 50px;
        cursor: pointer;
    }

    .sidebarlist a {
        /* margin: 10px 0 10px 0; */
        text-decoration: none;
        color: rgba(255, 255, 255, 0.5);
        font-weight: 200;
        font-size: 30px;
        border-bottom: 1px rgba(255, 255, 255, 0.5) solid;
        transition: 0.3s;
    }

    .sidebarlist a:hover {
        color: rgba(255, 255, 255, 0.8);
        border-bottom: 1px rgba(255, 255, 255, 0.8) solid;
        transition: 0.3s;
    }
</style>

<ul class="sidebarlist">
    <li>
        <a onclick="show('hero', this)" data-video-src="<?php echo base_url(); ?>assets/images/courses/gaming.mp4">Home</a>
    </li>
    <li>
        <a onclick="show('courses', this)" data-video-src="<?php echo base_url() ; ?>assets/images/courses/3danimation.mp4">Courses</a>
    </li>
    <li>
        <a onclick="show('studentgallery', this)" data-video-src="<?php echo base_url(); ?>assets/images/courses/gaming.mp4">Student Gallery</a>
    </li>
    <li>
        <a onclick="show('konwus', this)" data-video-src="<?php echo base_url(); ?>assets/images/courses/3danimation.mp4">Know Us</a>
    </li>
    <li>
        <a onclick="show('contactus', this)" data-video-src="<?php echo base_url(); ?>assets/images/courses/VFX.mp4">Contact Us</a>
    </li>
</ul>