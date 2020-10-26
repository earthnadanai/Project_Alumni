<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_register extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function regis($data)
    {
        $this->db->insert('user',$data);
    }
    function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('user');
        $message = '';
        if ($result->num_rows() > 0) {
            $message = true;

            // $this->load->view('list');

        } else {
            $message = false;
        }
        $data = array(
            "message" => $message, "data" => $result->result()

        );
        return $data;
    }
    
    function showuser()
    {
        $query = $this->db->get('user');
        return $query->result();
        /* $query = $this->db->get('user')->result();
        $query1 = $this->db->get('professor')->result();
        $query2 = $this->db->get('seniors')->result();
        return array_merge($query,$query1,$query2); */   
    }
    function showprofessor()
    {
        $query = $this->db->get('professor');
        return $query->result();
        /* $query = $this->db->get('user')->result();
        $query1 = $this->db->get('professor')->result();
        $query2 = $this->db->get('seniors')->result();
        return array_merge($query,$query1,$query2); */   
    }
    function showseniors()
    {
        $query = $this->db->get('seniors');
        return $query->result();
        /* $query = $this->db->get('user')->result();
        $query1 = $this->db->get('professor')->result();
        $query2 = $this->db->get('seniors')->result();
        return array_merge($query,$query1,$query2); */   
    }
    function showprofile($a)
    {
        
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
        

    }
    function showinfo($a)
    {
        $this->db->where('id',$a);
        $query = $this->db->get('user');
        return $query->result();
    }
    function showinfo1($a)
    {
        $this->db->where('S_id',$a);
        $query = $this->db->get('seniors');
        return $query->result();
    }
    function update($data)
    {
        $id =  $this->session->userdata('id');
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}