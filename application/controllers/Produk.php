<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");
        $this->load->model("jenis_model");
        $this->load->library('form_validation');
        is_logged_in();
        // $this->load->model("admin_model");
        // if ($this->admin_model->isNotLogin()) redirect(site_url('login/index'));
    }

    public function index()
    {
        $data['title'] = 'Properti';
        $data["produk"] = $this->produk_model->getall();

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('_layout/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Properti';
        $data["jenis"] = $this->jenis_model->get_all_data();

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('produk/form_tambah');
        $this->load->view('_layout/footer');

        $produk = $this->produk_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($produk->rules());

        if ($validasi->run()) {
            $produk->save();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('produk/'));
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->produk_model->delete($id)) {
            redirect(site_url('produk/'));
        }
    }

    public function detail($id = null)
    {
        $data['title'] = 'Detail Properti';

        if (!isset($id)) redirect('produk/');
        $produk = $this->produk_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($produk->rules());

        $data["produk"] = $produk->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('produk/view', $data);
        $this->load->view('_layout/footer');
    }

    function status1($id)
    {
        if ($this->produk_model->update_status($id)) {
            redirect(site_url('produk/'));
        }
    }
    function status2($id)
    {
        if ($this->produk_model->update_status2($id)) {
            redirect(site_url('produk/'));
        }
    }


    function status_banner($id)
    {
        if ($this->produk_model->update_banner($id)) {
            redirect(site_url('produk/'));
        }
    }

    function status_banner2($id)
    {
        if ($this->produk_model->update_banner2($id)) {
            redirect(site_url('produk/'));
        }
    }
    public function edit($id = null)
    {
        $data['title'] = 'Edit Properti';

        if (!isset($id)) redirect('produk/');
        $produk = $this->produk_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($produk->rules());

        $data["produk"] = $produk->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('produk/form_edit', $data);
        $this->load->view('_layout/footer');
        if ($validasi->run()) {
            $produk->update();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('produk/'));
        }
    }
}
