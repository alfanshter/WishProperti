<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tim extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tim_model");
        $this->load->library('form_validation');
        is_logged_in();
        // $this->load->model("admin_model");
        // if ($this->admin_model->isNotLogin()) redirect(site_url('login/index'));
    }

    public function index()
    {
        $data['title'] = 'Team';
        $data["tim"] = $this->tim_model->getall();

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('tim/index', $data);
        $this->load->view('_layout/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Team';
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('tim/form_tambah');
        $this->load->view('_layout/footer');

        $tim = $this->tim_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($tim->rules());

        if ($validasi->run()) {
            $tim->save();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('tim/'));
        }
    }
    public function view($id = null)
    {
        $data['title'] = 'Deatil Tim';

        if (!isset($id)) redirect('tim/');
        $tim = $this->tim_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($tim->rules());

        $data["tim"] = $tim->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('tim/view', $data);
        $this->load->view('_layout/footer');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->tim_model->delete($id)) {
            redirect(site_url('tim/'));
        }
    }

    public function edit($id = null)
    {
        $data['title'] = 'Edit Team';

        if (!isset($id)) redirect('tim/');
        $tim = $this->tim_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($tim->rules());

        $data["tim"] = $tim->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('tim/form_edit', $data);
        $this->load->view('_layout/footer');
        if ($validasi->run()) {
            $tim->update();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('tim/'));
        }
    }
}
