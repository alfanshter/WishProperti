<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("blog_model");
        $this->load->library('form_validation');
        is_logged_in();
        // $this->load->model("admin_model");
        // if ($this->admin_model->isNotLogin()) redirect(site_url('login/index'));
    }

    public function index()
    {
        $data['title'] = 'Blog';
        $data["blog"] = $this->blog_model->getall();

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('_layout/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Berita';
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('blog/form_tambah');
        $this->load->view('_layout/footer');

        $blog = $this->blog_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($blog->rules());

        if ($validasi->run()) {
            $blog->save();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('blog/'));
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->blog_model->delete($id)) {
            redirect(site_url('blog/'));
        }
    }

    public function edit($id = null)
    {
        $data['title'] = 'Edit Blog';

        if (!isset($id)) redirect('blog/');
        $blog = $this->blog_model;
        $validasi = $this->form_validation;
        $validasi->set_rules($blog->rules());

        $data["blog"] = $blog->getById($id);
        if (!isset($id)) show_404();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('blog/form_edit', $data);
        $this->load->view('_layout/footer');
        if ($validasi->run()) {
            $blog->update();
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('blog/'));
        }
    }
}
