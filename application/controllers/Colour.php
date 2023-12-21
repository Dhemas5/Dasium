<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Colour extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_already_login();
        $this->load->model('colour_m');
    }

    public function index()
    {
        $data['row'] = $this->colour_m->get();
        $this->template->load('template', 'produk/colour/colour_data', $data);
    }

    public function add()
    {
        $colour = new stdClass();
        $colour->colour_id = null;
        $colour->name = null;
        $data = array(
            'page' => 'add',
            'row' => $colour
        );
        $this->template->load('template', 'produk/colour/colour_form', $data);
    }

    public function edit($id)
    {
        $query = $this->colour_m->get($id);
        if ($query->num_rows() > 0) {
            $colour = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $colour
            );
            $this->template->load('template', 'produk/colour/colour_form', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('colour/') . "';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->colour_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->colour_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        }
        redirect('index.php/colour/');
    }

    public function del($id)
    {
        $this->colour_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        }
        redirect('colour/');
    }
}
