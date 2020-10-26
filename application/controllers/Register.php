<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_register', 'Alumni');
    }
    
    public function index()
    {
        $this->load->view('bootstap');
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer1');
    }

    public function Register()
    {
        $data = array(
            
            'username'=> $this->input->post("username"),
            'password'=> $this->input->post("password"),
            'email'=> $this->input->post("email"),
            'firstname'=> $this->input->post("firstname"),
            'lastname'=> $this->input->post("lastname"),
            'codestu'=> $this->input->post("codestu"),
            'sex'=> $this->input->post("sex"),
            'addres'=> $this->input->post("addres"),
            'tell'=> $this->input->post("tell"),
            'facebook'=> $this->input->post("facebook"),
            'position'=> $this->input->post("position"),
            'addressjob'=> $this->input->post("addressjob"),
            'birthdate'=> $this->input->post("birthdate")
        );

        $this->Alumni->regis($data);
        $this->load->view('bootstap');
        $this->load->view('header');
        $this->load->view('home_page');
        $this->load->view('footer1');
    }


};