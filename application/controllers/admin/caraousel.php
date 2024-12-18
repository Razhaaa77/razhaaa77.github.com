<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caraousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->db->from('caraousel');
        $carousel = $this->db->get()->result_array();


        $data = array(
            'judul_halaman' => 'Halaman Carousel',
            'carousel' => $carousel
        );
        $this->template->load('template_admin', 'admin/caraousel_index', $data);
    }

    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg' ;

        $config['upload_path'] = 'assets/flat_able/upload/caraousel/';
        $config['max_size'] = 500 * 1024;
        $config['file_name'] = $namafoto;
        $config['allowed_types'] = '*';

        $this->load->library('upload', $config);

        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/carousel');
        } elseif ($this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

    
        $data = array(
            'judul' => $this->input->post('judul'),
            'foto' => $namafoto
        );
        $this->db->insert('caraousel', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary" role="alert">
        Berhasil menambahkan
        </div>');

        redirect('admin/caraousel');
    }

    public function delete_data($id)
    {
        $filename=FCPATH.'assets/flat_able/upload/caraousel/'.$id;
        if (file_exists($filename)){
        unlink(".assets/flat_able/upload/caraousel/".$id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('caraousel', $where);
        $this->session->set_flashdata(
            'alert',
            '
        	<div class="alert alert-primary" role="alert">
			Berhasil menghapus
		    </div>'
        );
        redirect('admin/caraousel');
    }
}