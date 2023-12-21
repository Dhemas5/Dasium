<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_already_login();
        $this->load->model('sale_m');
    }

    public function sale()
    {
        $this->load->model('member_m');
        if (isset($_POST['reset'])) {
            $this->session->unset_userdata('search');
        }
        if (isset($_POST['filter'])) {
            $post = $this->input->post(null, TRUE);
            $this->session->set_userdata('search', $post);
        } else {
            $post = $this->session->userdata('search');
        }

        // $this->load->library('pagination');
        // $config['base_url'] = site_url('index.php/report/sale');
        // $config['total_rows'] = $this->sale_m->get_sale_pagination()->num_rows();
        // $config['per_page'] = 3;
        // $config['uri_segment'] = 3;
        // $config['first_link'] = 'First';
        // $config['last_link'] = 'Last';
        // $config['next_link'] = 'Next';
        // $config['prev_link'] = 'Prev';
        // $config['num_tag_open'] = '<li>';
        // $config['num_tag_close'] = '</li>';
        // $config['cur_tag_open'] = '<li class="active"><a>';
        // $config['cur_tag_close'] = '</a></li>';
        // $config['next_tag_open'] = '<li>';
        // $config['next_tag_close'] = '</li>';
        // $config['prev_tag_open'] = '<li>';
        // $config['prev_tag_close'] = '</li>';
        // $config['first_tag_open'] = '<li>';
        // $config['first_tag_close'] = '</li>';
        // $config['last_tag_open'] = '<li>';
        // $config['last_tag_close'] = '</li>';

        // $this->pagination->initialize($config); // Corrected method name

        // $data['pagination'] = $this->pagination->create_links();
        $data['member'] = $this->member_m->get()->result();
        // $data['row'] = $this->sale_m->get_sale_pagination($config['per_page'], $this->uri->segment(3));
        $data['row'] = $this->sale_m->get_sale_pagination();
        $data['post'] = $post;
        $this->template->load('template', 'report/sale_report', $data);
    }

    public function sale_product($sale_id = null)
    {
        $detail = $this->sale_m->get_sale_detail($sale_id)->result();
        echo json_encode($detail);
    }
}
