<?php
class Users extends CI_Controller{
    public function register(){
        if($this->Users_model->register()){
            redirect('dashboard');
        } else {
            redirect('login');
        }
    }

    public function login(){
        if($this->Users_model->login()){
            redirect('dashboard');
        } else {
            redirect('login');
        }
    }
}