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
    }   // function ends

    function Home(){
        $this->load->view("user/index");
    }

    // function to load courses page
    public function Courses(){
        $this->load->view("user/Courses");
    }   // function ends

    // function to load student gallery page
    public function StudentGallery(){
        $this->load->view("user/StudentGallery");
    }   // function ends

    // function to load about us page
    public function AboutUs(){
        $this->load->view("user/AboutUs");
    }   // function ends

    // function to load contact us page
    public function ContactUs(){
        $this->load->view("user/ContactUs");
    }   // function ends
}
?>