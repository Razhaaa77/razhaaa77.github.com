<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		if($this->session->userdata('level')<>'admin'){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('user');
		$this->db->order_by('nama','ASC');
		$user = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Data Pengguna' ,
			'user'			=> $user
		);
		$this->template->load('template_admin','admin/User_index',$data);
	}
	public function simpan(){
		$this->db->from('user');
		$this->db->where('username',$this->input->post('username'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
				Username Sudah digunakan
			</div>
			');
			redirect('admin/User');	
		}
		$this->user_model->simpan();
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary" role="alert">
			Berhasil disimpan
		</div>
		');
		redirect('admin/User');
    }
	public function delete($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary" role="alert">
			Berhasil dihapus
		</div>
		');   
        redirect('admin/user');
	}
	public function update(){
		$where = array(
			'id_user' => $this->input->post('id_user')
		);
		$data = array(
			'nama'	=> $this->input->post('nama')
		);
		$this->db->update('user', $data, $where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary" role="alert">
			Berhasil memperbarui
		</div>
		');
		redirect('admin/user');
	}
}
