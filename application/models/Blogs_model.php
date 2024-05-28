<?php
class Blogs_model extends CI_Model{
    public function add(){
        $data = [
            'user_id'     => $this->session->id,
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'content'     => $this->input->post('content')
        ];

        $this->db->insert('posts', $data);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
}