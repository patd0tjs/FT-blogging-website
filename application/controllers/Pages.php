<?php
class Pages extends CI_Controller{
    public function register(){
        $this->Render_model->view('register');
    }

    public function login(){
        $this->Render_model->view('login');
    }

    public function dashboard(){
        $this->Render_model->protected_view('dashboard');
    }

    public function add_blog(){
        $this->Render_model->protected_view('add_blog');
    }
}