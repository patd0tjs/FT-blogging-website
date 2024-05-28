<?php
class Blogs extends CI_Controller{
    public function add(){
        $this->Blogs_model->add();
        redirect('dashboard');
    }
}