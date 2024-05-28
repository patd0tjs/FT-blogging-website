<?php
class Users_model extends CI_Model{
    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function register(){
        $data  = [
            'email' => $this->input->post('email'),
            'pw' => $this->input->post('pw'),
            'name' => $this->input->post('name'),
            'birth_date' => $this->input->post('bday')
        ];

        $this->db->insert('users', $data);

        if($this->db->affected_rows() > 0){
            $this->session->set_userdata(['id' => $this->db->insert_id()]);
            return true;
        } else {
            $this->session->set_flashdata('error', 'There was an error creating your account');
            return false;
        }
    }

    public function login(){
        $email = $this->input->post('email');
        $pw = $this->input->post('pw');

        if($sess = $this->check_account()){
            $this->session->set_userdata(['id' => $sess]);
            return true;
        } else {
            return false;
        }
    }

    private function check_account($email, $pw){
        $this->db->select('id')
                 ->where('email', $email)
                 ->where('pw', $pw)
                 ->get('users');

        if($this->db->num_rows() > 0){
            return $this->db->row_array()['id'];

        } else {
            return false;
        }
    }
}