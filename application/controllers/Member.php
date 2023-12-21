<?php

use FontLib\Table\Type\name;

defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_already_login();
        $this->load->model('member_m');
    }

    public function index()
    {
        $data['row'] = $this->member_m->get();
        $this->template->load('template', 'member/member_data', $data);
    }

    // function get_json()
    // {
    //     $this->load->library('datatables');
    //     $this->datatables->add_column('no', 'ID-$1', 'member_id');
    //     $this->datatables->select('member_id, name, gender, phone, address');
    //     $this->datatables->add_column('action', anchor('index.php/member/edit/$1', 'Update', array('class' => 'btn btn-primary btn-xs')) . " " .
    //         anchor('index.php/member/del/$1', 'Delete', array('class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm(\'Yakin Hapus Data?\')')), 'member_id');
    //     $this->datatables->from('member');
    //     return print_r($this->datatables->generate());
    // }

    public function add()
    {
        $member = new stdClass();
        $member->member_id = null;
        $member->name = null;
        $member->gender = null;
        $member->phone = null;
        $member->address = null;
        $data = array(
            'page' => 'add',
            'row' => $member
        );
        $this->template->load('template', 'member/member_form', $data);
    }

    public function edit($id)
    {
        $query = $this->member_m->get($id);
        if ($query->num_rows() > 0) {
            $member = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $member
            );
            $this->template->load('template', 'member/member_form', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location = '" . site_url('member/') . "';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->member_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->member_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Disimpan');</script>";
        }
        echo "<script>window.location = '" . site_url('member/') . "';</script>";
    }

    public function del($id)
    {
        $this->member_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location = '" . site_url('member/') . "';</script>";
    }
}
