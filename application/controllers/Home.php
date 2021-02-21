<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
 public function __construct()
    {
        parent::__construct();
        $this->load->model("banner_model");
        $this->load->model("produk_model");
        $this->load->model("jenis_model");
        $this->load->model("testimoni_model");
        $this->load->model("tim_model");
        $this->load->model('galeri_model');

    }

    public function index()
    {       
        
        $jumlah_data = $this->produk_model->jumlah_data();
        $this->load->library('pagination');
		$config['base_url'] = site_url('disewakan/index/');
        
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;

        $from = $this->uri->segment(3);
		$this->pagination->initialize($config);	
        $data['disewa'] = $this->produk_model->data($config['per_page'],$from);
        $data['dijual'] = $this->produk_model->datadijual($config['per_page'],$from);


        $data['title'] = 'Home';
        $data["produk"] = $this->produk_model->getstatus();

        $data["testimoni"] = $this->testimoni_model->getall();
        $data['banner'] = $this->produk_model->getbanner();

        $this->load->view('home/header', $data);
        $this->load->view('home/slider', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/footer', $data);
    }


    public function detail($id = null)
    {
        $data['title'] = 'Detail Properti';
        $data["tim"] = $this->tim_model->getall();
        if (!isset($id)) redirect('home/');
        $produk = $this->produk_model;

        $data["produk"] = $produk->getById($id);
        $data["galeri"] = $this->galeri_model->getgambarById($id);
        
        if (!isset($id)) show_404();
        $this->load->view('home/header', $data);
        $this->load->view('home/property-single', $data);
        $this->load->view('home/footer', $data);

    }
}
