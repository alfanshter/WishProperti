<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galeri_model');
        $this->load->model('produk_model');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Galeri';
        $data["galeri"] = $this->galeri_model->getall();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('gambar_produk/index', $data);
        $this->load->view('_layout/footer');
    }

    public function add($id)
    {
        $data['title'] = 'Add Gambar';
        $data["produk"] = $this->produk_model->getById($id);
        $data["galeri"] = $this->galeri_model->getgambarById($id);

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('gambar_produk/form_tambah');
        $this->load->view('_layout/footer');


        // $upload = $_FILES['gambar']['name'];
        if (!empty($_FILES['gambar']['name'])) {
            $numberofFilie = sizeof($_FILES['gambar']['name']);
            $files = $_FILES['gambar'];
            $namagambar = "isi" . time();
            $config['upload_path']  = './gambar/produk/isi';
            $config['allowed_types']  = 'jpg|jpeg|png';
            $config['file_name']  = $namagambar;
            $config['max_size'] = '3072';
            // $config['overwrite']  = 'true';
            $this->load->library('upload', $config);

            for ($i = 0; $i < $numberofFilie; $i++) {
                $_FILES['gambar']['name'] = $files['name'][$i];
                $_FILES['gambar']['type'] = $files['type'][$i];
                $_FILES['gambar']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['gambar']['error'] = $files['error'][$i];
                $_FILES['gambar']['size'] = $files['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {
                    $data = $this->upload->data();
                    $image = $data['file_name'];
                    $cek = $this->galeri_model->cekData();
                    if ($cek) {
                        $idgambar = $id;
                    }
                    $insert[$i]['gambar'] = $image;
                    $insert[$i]['id'] = $idgambar;
                }
            }
            $this->galeri_model->save($insert, $data['file_name']);
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('galeri'));
        }
    }
    public function detail($id)
    {
        $data['title'] = 'Add Gambar';
        $data["produk"] = $this->produk_model->getById($id);
        $data["galeri"] = $this->galeri_model->getgambarById($id);

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('gambar_produk/detail');
        $this->load->view('_layout/footer');
    }

    public function delete($id = null)
    {
        $data["galeri"] = $this->galeri_model->getgambarById($id);

        if (!isset($id)) show_404();

        if ($this->galeri_model->delete($id)) {
            redirect(site_url('galeri'));
        }
    }
}
