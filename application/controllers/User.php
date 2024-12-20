<?php

defined("BASEPATH") Or ("No Direct Script Access Allowed");
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // index function
    function index(){
        $this->load->view("user/index");
    }

    function StudentGallery(){
        $this->load->view("user/studentgallery");
    }

    function theme2(){
        $this->load->view("theme/theme1");
    }
}
?>