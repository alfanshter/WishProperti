<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("layanan_model");
        $this->load->library('form_validation');
        is_logged_in();
        // $this->load->model("admin_model");
        // if ($this->admin_model->isNotLogin()) redirect(site_url('login/index'));
    }

    public function index()
    {
        $data['title'] = 'Layanan';
        $data["layanan"] = $this->layanan_model->getall();

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('layanan/index', $data);
        $this->load->view('_layout/footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Layanan';
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('layanan/form_tambah');
        $this->load->view('_layout/footer');

        $layanan = $this->layanan_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($layanan->rules());

        if ($validasi->run()) {
            $layanan->save();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('layanan/'));
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->layanan_model->delete($id)) {
            redirect(site_url('layanan/'));
        }
    }

    public function view($id = null)
    {
        $data['title'] = 'Deatil Layanan';

        if (!isset($id)) redirect('layanan/');
        $layanan = $this->layanan_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($layanan->rules());

        $data["layanan"] = $layanan->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('layanan/view', $data);
        $this->load->view('_layout/footer');
    }

    public function edit($id = null)
    {
        $data['title'] = 'Edit Layanan';

        if (!isset($id)) redirect('layanan/');
        $layanan = $this->layanan_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($layanan->rules());

        $data["layanan"] = $layanan->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('layanan/form_edit', $data);
        $this->load->view('_layout/footer');
        if ($validasi->run()) {
            $layanan->update();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('layanan/'));
        }
    }
}
