<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_user extends CI_Controller
{
 public function __construct()
    {
        parent::__construct();
        $this->load->model("blog_model");
        $this->load->model("komentar_model");
        // $this->load->model("jenis_model");
        // $this->load->model("testimoni_model");
        // $this->load->model("tim_model");
        // $this->load->model('galeri_model');

    }

    public function index()
    {
        $jumlah_data = $this->blog_model->jumlah_data();
        $this->load->library('pagination');
		$config['base_url'] = site_url('berita_user/index/');
        
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 9;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = '  <span class="ion-ios-arrow-forward"></span>';
        $config['prev_link']        = '  <span class="ion-ios-arrow-back"></span> ';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $from = $this->uri->segment(3);
		$this->pagination->initialize($config);	
        $data['berita'] = $this->blog_model->data($config['per_page'],$from);
        
        $data['title'] = 'Berita_user';
        // $data["dijual"] = $this->produk_model->getdijual();

        // $data["disewa"] = $this->produk_model->getdisewa();
        // $data["testimoni"] = $this->testimoni_model->getall();
        // $data['banner'] = $this->produk_model->getbanner();

        $this->load->view('home/header', $data);
        $this->load->view('home/berita', $data);
        $this->load->view('home/footer', $data);
    }


    

    public function detail()
    {
        $id         = $this->uri->segment('3');
        $content    = $this->db->query("SELECT * FROM berita WHERE id_berita='$id'")->row_array();

        $data['id_berita'] = $content['id_berita'];
        $berita = $this->blog_model;
        $data["berita"] = $berita->getById($id);
        
        if (!isset($id)) show_404();
        $this->load->view('home/header', $data);
        $this->load->view('home/berita_detail', $data);
        $this->load->view('home/footer', $data);

    }

    
    public function kirim()
    {
        
        // $blog = $this->komentar_model;
        // $validasi = $this->form_validation;
        // $validasi->set_rules($blog->rules());

        // if ($validasi->run()) {
        //     $blog->save();
        //     $this->session->set_flashdata('succes', 'Komentar berhasil ditambahkan');
        //     redirect(site_url('berita_user/detail/'));
        // }


        date_default_timezone_set('Asia/Jakarta');
        $id                 = $this->input->post('id');
        $nama               = $this->input->post('nama');
        $email              = $this->input->post('email');
        $isi_komentar       = $this->input->post('isi');
        $tanggal            = date('Y-m-d H:i:s');
        $this->db->query("INSERT INTO tb_komentar VALUES('','0','$nama','$email','$isi_komentar','$id','$tanggal')");
        redirect('berita_user/detail/'.$id);

        
    }

    public function balas()
    {
        $komentar_id = $this->input->post('komentar_id');
        $id_berita = $this->input->post('id_berita');
        $nama       = $this->input->post('nama');
        $email       = $this->input->post('email');
        $isi       = $this->input->post('isi');
        $tanggal            = date('Y-m-d H:i:s');
        $this->db->query("INSERT INTO tb_komentar VALUES('','$komentar_id','$nama','$email','$isi','$id_berita','$tanggal')");
        redirect('berita_user/detail/'. $id_berita);
    }

    // public function detail($id = null)
    // {
    //     $data['title'] = 'Detail Berita';
    //     // $data["tim"] = $this->tim_model->getall();
    //     if (!isset($id)) redirect('home/');
    //     $berita = $this->blog_model;

    //     $data["berita"] = $berita->getById($id);
    //     // $data["galeri"] = $this->galeri_model->getgambarById($id);
        
    //     if (!isset($id)) show_404();
    //     $this->load->view('home/header', $data);
    //     $this->load->view('home/berita_detail', $data);
    //     $this->load->view('home/footer', $data);

    // }
}
