<?php
class Render_model extends CI_Model{
    public function view($page){
        $this->load->view('template/header');
        $this->load->view($page);
        $this->load->view('template/footer');
    }

    public function protected_view($page){
        if($this->session->id)
        {
            $this->view($page);

        } else {
            redirect('login');
        }
    }
}