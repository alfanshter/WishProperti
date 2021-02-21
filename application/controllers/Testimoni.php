<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("testimoni_model");
        $this->load->library('form_validation');
        is_logged_in();
        // $this->load->model("admin_model");
        // if ($this->admin_model->isNotLogin()) redirect(site_url('login/index'));
    }

    public function index()
    {
        $data['title'] = 'Testimoni';
        $data["testimoni"] = $this->testimoni_model->getall();

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('testimoni/index', $data);
        $this->load->view('_layout/footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Testimoni';
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('testimoni/form_tambah');
        $this->load->view('_layout/footer');

        $testimoni = $this->testimoni_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($testimoni->rules());

        if ($validasi->run()) {
            $testimoni->save();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('testimoni/'));
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->testimoni_model->delete($id)) {
            redirect(site_url('layanan/'));
        }
    }
    public function view($id = null)
    {
        $data['title'] = 'Deatil Testimoni';

        if (!isset($id)) redirect('testimoni/');
        $testimoni = $this->testimoni_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($testimoni->rules());

        $data["testimoni"] = $testimoni->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('testimoni/view', $data);
        $this->load->view('_layout/footer');
    }

    public function edit($id = null)
    {
        $data['title'] = 'Edit Testimoni';

        if (!isset($id)) redirect('testimoni/');
        $testimoni = $this->testimoni_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($testimoni->rules());

        $data["testimoni"] = $testimoni->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('testimoni/form_edit', $data);
        $this->load->view('_layout/footer');
        if ($validasi->run()) {
            $testimoni->update();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('testimoni/'));
        }
    }
}
