<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'kategori konten' ,
			'kategori'			=> $kategori
		);
		$this->template->load('template_admin','admin/kategori_index',$data);
	}
	public function simpan(){
		$this->db->from('kategori');
		$this->db->where('nama_kategori',$this->input->post('nama_kategori'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
				kategori konten sudah digunakan
			</div>
			');
			redirect('admin/kategori');	
		}
		$data = array(
			'nama_kategori'	=> $this->input->post('nama_kategori')
		);
		$this->db->insert('kategori',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary" role="alert">
			Berhasil menambahkan kategori
		</div>
		');
		redirect('admin/kategori');
    }
	public function delete($id){
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary" role="alert">
			Berhasil dihapus
		</div>
		');   
        redirect('admin/kategori');
	}
	public function update(){
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		);
		$data = array(
			'nama_kategori'	=> $this->input->post('nama_kategori')
		);
		$this->db->update('kategori', $data, $where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary" role="alert">
			Berhasil memperbarui
		</div>
		');
		redirect('admin/kategori');
	}
}
