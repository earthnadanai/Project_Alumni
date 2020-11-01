<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
    {
        $this->load->view('bootstap');
        $this->load->view('header');
        $this->load->view('home_page');
        $this->load->view('footer1');
	}
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
	public function page_register()
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
	/*function __construct()
    {
        parent::__construct();
        $this->load->model('Model_register', 'Alumni');
    }*/
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

    public function search()
    {
        $search =   $this->input->post('search');
        $data['xx'] = $this->Alumni->show_search($search);
        $this->load->view('view_search', $data);
    }
}
