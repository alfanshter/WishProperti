<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("tim_model");

    }
    public function index()
    {
        $data['title'] = 'About';
        $data["tim"] = $this->tim_model->getall();
    
        $this->load->view('home/header', $data);
        $this->load->view('home/about', $data);
        $this->load->view('home/footer', $data);
    }
}
