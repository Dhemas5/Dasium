<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{
    public function index()
    {
        $this->load->view('landing_page/home.php');
    }

    public function about()
    {
        $this->load->view('landing_page/about.php');
    }

    public function contact()
    {
        $this->load->view('landing_page/contact.php');
    }

    public function products()
    {
        $this->load->view('landing_page/products.php');
    }

    public function coba()
    {
        $this->load->view('landing_page/coba.php');
    }
}
