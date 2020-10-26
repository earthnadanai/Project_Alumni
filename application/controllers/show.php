<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Show extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_register', 'Alumni');
    }
    function profile()
    {  
        $a = $this->session->userdata('id');
        $data['re'] = $this->Alumni->showprofile($a);
        $this->load->view('profile', $data);
    }
    function showall()
    {
        $data['query'] = $this->Alumni->showuser();
        $this->load->view('show',$data);
    }
    function info()
    {  
        $a = $this->input->post('id');
        $data['re'] = $this->Alumni->showinfo($a);
        $this->load->view('show1', $data);
    }
    function info1()
    {  
        $a = $this->input->post('S_id');
        $data['re'] = $this->Alumni->showinfo1($a);
        $this->load->view('show2', $data);
    }
    function showpros()
    {
        $data['query1'] = $this->Alumni->showprofessor();
        $this->load->view('showpros',$data);
    }
    function showSen()
    {
        $data['query2'] = $this->Alumni->showseniors();
        $this->load->view('showSen',$data);
    }
    function showedit()
    {
        $a = $this->session->userdata('id');
        $data['re'] = $this->Alumni->showprofile($a);
        $this->load->view('editprofile',$data);
    }
    function edit()
    {
        $data = array(
            
            'username'=> $this->input->post("txtusername"),
            'password'=> $this->input->post("txtpassword"),
            'email'=> $this->input->post("txtemail"),
            'firstname'=> $this->input->post("txtfirstname"),
            'lastname'=> $this->input->post("txtlastname"),
            'codestu'=> $this->input->post("txtcodestu"),
            'sex'=> $this->input->post("txtsex"),
            'addres'=> $this->input->post("txtaddres"),
            'tell'=> $this->input->post("txttell"),
            'facebook'=> $this->input->post("txtfacebook"),
            'position'=> $this->input->post("txtposition"),
            'addressjob'=> $this->input->post("txtaddressjob"),
            'birthdate'=> $this->input->post("txtbirthdate")
        );
        $this->Alumni->update($data);
        $a = $this->session->userdata('id');
        $data['re'] = $this->Alumni->showprofile($a);
        $this->load->view('profile',$data);
    }
}
