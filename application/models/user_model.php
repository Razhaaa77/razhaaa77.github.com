<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	public function simpan(){
        $data = array(
            'username'	=> $this->input->post('username'),
            'password'	=> md5($this->input->post('password')),
            'nama'		=> $this->input->post('nama'),
            'level'		=> $this->input->post('level'),
        );
    $this->db->insert('user',$data);
    }
}
