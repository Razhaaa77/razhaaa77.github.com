<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){	

		$this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $carousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
        
        $data = array(
            'judul'     => "Beranda | CMS",
            'konfig'    => $konfig,
            'kategori'    => $kategori,
            'carousel'    => $carousel,
            'konten'    => $konten,
            'galeri'    => $galeri,
        );
        $this->load->view('beranda',$data);
        }
        public function galeri(){	

            $this->db->from('konfigurasi');
            $konfig = $this->db->get()->row();
    
            $this->db->from('caraousel');
            $carousel = $this->db->get()->result_array();
    
            $this->db->from('kategori');
            $kategori = $this->db->get()->result_array();
            
            $this->db->from('galeri');
            $galeri = $this->db->get()->result_array();
            
            $data = array(
                'judul'     => "Beranda | CMS",
                'konfig'    => $konfig,
                'kategori'    => $kategori,
                'carousel'    => $carousel,
                'galeri'    => $galeri,
            );
            $this->load->view('galeri',$data);
            }
    }
