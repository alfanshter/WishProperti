<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properti_detail extends CI_Controller
{
 public function __construct()
    {
        parent::__construct();
        // $this->load->model("banner_model");
        // $this->load->model("produk_model");
        // $this->load->model("testimoni_model");
        $this->load->model("tim_model");

    }

    public function index()
    {
        $data['title'] = 'Properti_detail';
        $data["tim"] = $this->tim_model->getall();

        // $data["banner"] = $this->banner_model->getall();
        // $data["produk"] = $this->produk_model->getall();
        // $data["testimoni"] = $this->testimoni_model->getall();
        
        $this->load->view('home/header', $data);
        $this->load->view('home/property-single', $data);
        $this->load->view('home/footer', $data);
    }
}
