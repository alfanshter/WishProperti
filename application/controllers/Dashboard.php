<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Login();

        $this->load->library('form_validation');
        is_logged_in();
        // $cek_session = $this->session->userdata('Login');
        // if (empty($cek_session)) {
        //     redirect(site_url('login/index'));
        // }

        // $this->load->model("admin_model");
        // if ($this->admin_model->isNotLogin()) redirect(site_url('login/index'));
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('_layout/footer');
    }
}
