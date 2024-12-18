<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrasi extends CI_Controller{
    public function index(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        
        if($this->form_validation->run() == FALSE){
          
            $this->load->view('registrasi');
            
            } else {
                $level = 'user';
                $data = array(
                    'id_user' => '',
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'level' => $level,
                );
                echo "<pre>";
                print_r($data);
                echo "</pre>";
                die;
                die;
                $this->db->insert('user', $data);
                redirect('auth');
            }
    }
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
            Username sudah ada,
        </div>
        ');
        redirect('auth');
        }
        $this->User_model->add_users();
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
            Berhasil menambahkan user,
      </div>
        ');
        redirect('auth');
    }

    public function registrasi()
    {
        $level = 'user';
        $data = array(
            'id_user' => '',
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $level,
        );
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die;
        // die;
        $this->db->insert('user', $data);
        redirect('auth');
    }
}