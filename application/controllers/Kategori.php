<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_already_login();
        $this->load->model('kategori_m');
    }

    public function index()
    {
        $data['row'] = $this->kategori_m->get();
        $this->template->load('template', 'produk/kategori/kategori_data', $data);
    }

    public function add()
    {
        $kategori = new stdClass();
        $kategori->kategori_id = null;
        $kategori->name = null;
        $data = array(
            'page' => 'add',
            'row' => $kategori
        );
        $this->template->load('template', 'produk/kategori/kategori_form', $data);
    }

    public function edit($id)
    {
        $query = $this->kategori_m->get($id);
        if ($query->num_rows() > 0) {
            $kategori = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $kategori
            );
            $this->template->load('template', 'produk/kategori/kategori_form', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('kategori/') . "';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->kategori_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->kategori_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        }
        redirect('index.php/kategori/');
    }

    public function del($id)
    {
        $this->kategori_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        }
        redirect('kategori/');
    }
}
