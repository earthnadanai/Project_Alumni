<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model_register', 'Alumni');
        
    }
    public function login_x()

    {

        if ($this->input->post('login')) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $check = $this->Alumni->login($email, $password);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $data['query'] = $this->Alumni->showuser();
                $this->load->view('show',$data);


            } else {



                // echo '<script>alert("Region already added");</script>'
                redirect('home_page');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata($data);
        $this->load->view('bootstap');
        redirect($this->load->view('header'), 'refresh');
        $this->load->view('home_page');
        $this->load->view('footer1');
    }
}

