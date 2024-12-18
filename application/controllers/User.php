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

    function theme1(){
        $this->load->view("theme/theme1");
    }

    function theme2(){
        $this->load->view("theme/theme1");
    }
}
?>