<?php defined('BASEPATH') or exit('No direct script access allowed');

class Komentar_model extends CI_Model{
    private $_table = "tb_komentar";

    public $komentar_id;
    public $komentar_status;
    public $komentar_nama;
    public $komentar_email;
    public $komentar_isi;
    public $komentar_content_id;
    public $komentar_tanggal;

    public function rules()
    {
        return [
            [
                'field' => 'komentar_status',
                'label' => 'Komentar_status',
                'rules' => 'required'
            ],

            [
                'field' => 'komentar_nama',
                'label' => 'Komentar_Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'komentar_email',
                'label' => 'Komentar_Email',
                'rules' => 'required'
            ],
            [
                'field' => 'komentar_isi',
                'label' => 'Komentar_Isi',
                'rules' => 'required'
            ],  
            [
                'field' => 'komentar_content_id',
                'label' => 'Komentar_content_id',
                'rules' => 'required'
            ],
            [
                'field' => 'komentar_tanggal',
                'label' => 'Komentar_tanggal',
                'rules' => 'required'
            ]
        ];
    }

    public function kirim()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->komentar_id = uniqid();
        $this->komentar_status = '0';
        $this->komentar_nama = $post["nama"];
        $this->komentar_email = $post["email"];
        $this->komentar_isi = $post["isi"];
        $this->komentar_content_id = $post["id"];
        $this->komentar_tanggal = date('Y-m-d H:i:s');
        $this->db->insert($this->_table,$this);
    }

}


