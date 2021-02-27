<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("banner_model");
        $this->load->library('form_validation');
        is_logged_in();
        // $this->load->model("admin_model");
        // if ($this->admin_model->isNotLogin()) redirect(site_url('login/index'));

    }
    public function index()
    {
        $data['title'] = 'Banner';
        $data["banner"] = $this->banner_model->getall();

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('banner/index', $data);
        $this->load->view('_layout/footer');
    }
    public function add()
    {
        $data['title'] = 'Banner';
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('banner/form_tambah');
        $this->load->view('_layout/footer');
        $banner = $this->banner_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($banner->rules());

        if ($validasi->run()) {
            $banner->save();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('banner/'));
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->banner_model->delete($id)) {
            redirect(site_url('banner/'));
        }
    }
}
