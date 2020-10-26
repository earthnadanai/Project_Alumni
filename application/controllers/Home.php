<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('bootstap');
        $this->load->view('header');
        $this->load->view('home_page');
        $this->load->view('footer1');
    }
};
