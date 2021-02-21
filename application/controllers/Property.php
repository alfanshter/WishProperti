<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");

    }

    public function index()
    {
        $jumlah_data = $this->produk_model->jumlah_datadijual();
        $this->load->library('pagination');
		$config['base_url'] = site_url('property/index/');
        
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
        $data['produk'] = $this->produk_model->datadijual($config['per_page'],$from);
        // $data["produk"] = $this->produk_model->getbannerdisewakan();
        $data['title'] = 'Property';
        $this->load->view('home/header', $data);
        $this->load->view('home/property-grid', $data);
        $this->load->view('home/footer', $data);
    }


}

