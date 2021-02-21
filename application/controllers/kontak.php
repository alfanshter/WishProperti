<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
 public function __construct()
    {
        parent::__construct();
        // $this->load->model("banner_model");
        // $this->load->model("produk_model");
        // $this->load->model("testimoni_model");

    }

    public function index()
    {
        // $data['title'] = 'Kontak';
        // $data["banner"] = $this->banner_model->getall();
        // $data["produk"] = $this->produk_model->getall();
        // $data["testimoni"] = $this->testimoni_model->getall();
    
        $this->load->view('home/header');
        $this->load->view('home/contact');
        $this->load->view('home/footer');
    }

    public function email(){
  $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'nasruddinmuhammad16@gmail.com',  // Email gmail
            'smtp_pass'   => 'FCinter1908',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@masrud.com', 'MasRud.com');

        // Email penerima
        $this->email->to('alfanno8@gmail.com'); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}
