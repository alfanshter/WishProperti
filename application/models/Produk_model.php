<?php defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "produk";
    // private $_table1 = "properti_jenis";
    // private $_table2 = "prperti_status";


    public $id;
    public $nama;
    public $harga;
    public $gambar = "default.jpg";
    public $deskripsi;
    public $tanggal_upload;
    public $alamat;
    public $luas;
    public $kamar_tidur;
    public $kamar_mandi;
    public $garasi;
    public $id_status;
    public $id_jenis;
    public $kota;

    public $sertifikat;
    public $luas_bangunan;
    public $dimensi;
    public $orientasi;
    public $listrik;
    public $air;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'harga',
                'label' => 'Harga',
                'rules' => 'required'
            ],

            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'luas',
                'label' => 'Luas',
                'rules' => 'required'
            ],
            [
                'field' => 'kamar_tidur',
                'label' => 'Kamar_tidur',
                'rules' => 'required'
            ],
            [
                'field' => 'kamar_mandi',
                'label' => 'Kamar_mandi',
                'rules' => 'required'
            ],
            [
                'field' => 'garasi',
                'label' => 'Garasi',
                'rules' => 'required'
            ],
            [
                'field' => 'kota',
                'label' => 'Kota',
                'rules' => 'required'
            ],
            [
                'field' => 'sertifikat',
                'label' => 'Sertifikat',
                'rules' => 'required'
            ],
            [
                'field' => 'luas_bangunan',
                'label' => 'Luas_bangunan',
                'rules' => 'required'
            ],
            [
                'field' => 'dimensi',
                'label' => 'Dimensi',
                'rules' => 'required'
            ],
            [
                'field' => 'orientasi',
                'label' => 'Orientasi',
                'rules' => 'required'
            ],
            [
                'field' => 'listrik',
                'label' => 'Listrik',
                'rules' => 'required'
            ],
            [
                'field' => 'air',
                'label' => 'Air',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        // return $this->db->get($this->_table)->result();
        $this->db->select('produk.*, properti_status.status, properti_jenis.jenis');
        $this->db->from('produk');
        $this->db->join('properti_jenis', 'properti_jenis.id_jenis=produk.id_jenis');
        $this->db->join('properti_status', 'properti_status.id_status=produk.id_status');
        $query = $this->db->get();
        return $query->result();
    }

    public function getdijual()
    {
        $this->db->select('*');
        $this->db->where('id_jenis', 1);

        $query = $this->db->get('produk');
        return $query->result();


    }

    public function getdisewa()
    {
        $this->db->select('*');
        $this->db->where('id_jenis', 2);

        $query = $this->db->get('produk');
        return $query->result();


    }

    public function getbanner()
    {
        $this->db->select('*');
        $this->db->where('id_banner', 2);
        $this->db->join('properti_jenis', 'properti_jenis.id_jenis=produk.id_jenis');
        $this->db->join('properti_status', 'properti_status.id_status=produk.id_status');

        $query = $this->db->get('produk');
        return $query->result();

    }

    public function getprodukbaru()
    {
        $this->db->select('*');
        $this->db->where('id_produkbaru', 2);
        $this->db->join('properti_jenis', 'properti_jenis.id_jenis=produk.id_jenis');
        $this->db->join('properti_status', 'properti_status.id_status=produk.id_status');

        $query = $this->db->get('produk');
        return $query->result();

    }

    public function getbannerdijual()
    {
        $this->db->select('*');
        $this->db->where('id_jenis', 1);
        $this->db->join('properti_status', 'properti_status.id_status=produk.id_status');

        $query = $this->db->get('produk');
        return $query->result();

    }

    public function getbannerdisewakan()
    {
        $this->db->select('*');
        $this->db->where('id_jenis', 2);
        $this->db->join('properti_status', 'properti_status.id_status=produk.id_status');

        $query = $this->db->get('produk');
        return $query->result();

    }

    public function getstatus()
    {
        $this->db->select('*');
        $this->db->where('id_status', 1);
        $this->db->join('properti_jenis', 'properti_jenis.id_jenis=produk.id_jenis');

        $query = $this->db->get('produk');
        return $query->result();

    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->kota = $post["kota"];
        $this->id_status = '1';
        $this->luas = $post["luas"];
        $this->kamar_tidur = $post["kamar_tidur"];
        $this->kamar_mandi = $post["kamar_mandi"];
        $this->garasi = $post["garasi"];
        $this->id_jenis = $post["id_jenis"];

        $this->sertifikat = $post["sertifikat"];
        $this->luas_bangunan = $post["luas_bangunan"];
        $this->dimensi = $post["dimensi"];
        $this->orientasi = $post["orientasi"];
        $this->listrik = $post["listrik"];
        $this->air = $post["air"];
        
        $this->gambar = $this->_uploadImage();
        $this->tanggal_upload = date("Y-m-d");
        $this->id_banner =1;
        $this->id_produkbaru =1;
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->id_status = $post["id_status"];
        $this->luas = $post["luas"];
        $this->kamar_tidur = $post["kamar_tidur"];
        $this->kamar_mandi = $post["kamar_mandi"];
        $this->garasi = $post["garasi"];
        $this->id_jenis = $post["id_jenis"];
        $this->kota = $post["kota"];

        $this->tanggal_upload = date("Y-m-d");

        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array(
            'id' => $post['id'],
            'id_status' => $post['id_status']
        ));
    }

    public function update_status($id)
    {
        if ($this->uri->segment(4) == '2') {
            $data = array('id_status' => '1');
        } else {
            $data = array('id_status' => '2');
        }
        $where = array('id' => $this->uri->segment(3));

        return $this->db->update($this->_table, $data, $where);
    }
    
    public function update_status2($id)
    {
        if ($this->uri->segment(4) == '1') {
            $data = array('id_status' => '2');
        } else {
            $data = array('id_status' => '1');
        }
        $where = array('id' => $this->uri->segment(3));

        return $this->db->update($this->_table, $data, $where);
    }

    public function update_banner($id)
    {
        if ($this->uri->segment(4) == '2') {
            $data = array('id_banner' => '1');
        } else {
            $data = array('id_banner' => '2');
        }
        $where = array('id' => $this->uri->segment(3));

        return $this->db->update($this->_table, $data, $where);
    }

  

    public function update_banner2($id)
    {
        if ($this->uri->segment(4) == '1') {
            $data = array('id_banner' => '2');
        } else {
            $data = array('id_banner' => '1');
        }
        $where = array('id' => $this->uri->segment(3));

        return $this->db->update($this->_table, $data, $where);
    }

    public function update_produkbaru($id)
    {
        if ($this->uri->segment(4) == '2') {
            $data = array('id_produkbaru' => '1');
        } else {
            $data = array('id_produkbaru' => '2');
        }
        $where = array('id' => $this->uri->segment(3));

        return $this->db->update($this->_table, $data, $where);
    }

    public function update_produkbaru2($id)
    {
        if ($this->uri->segment(4) == '1') {
            $data = array('id_produkbaru' => '2');
        } else {
            $data = array('id_produkbaru' => '1');
        }
        $where = array('id' => $this->uri->segment(3));

        return $this->db->update($this->_table, $data, $where);
    }


    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $namagambar = "gambar" . time();
        $config['upload_path']  = './gambar/produk/';
        $config['allowed_types']  = 'jpg|jpeg|png';
        $config['file_name']  = $namagambar;
        $config['max_size'] = '3072';
        $config['overwrite']  = 'true';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    }

    private function _deleteImage($id)
    {
        $produk = $this->getById($id);
        if ($produk->gambar != "default.jpg") {
            $filename = explode(".", $produk->gambar)[0];
            return array_map('unlink', glob(FCPATH . "./gambar/produk/$filename.*"));
        }
    }

    function data($number,$offset){
        $this->db->where('id_jenis', 2);
		return $query = $this->db->get('produk',$number,$offset)->result();		
	}

    function datadijual($number,$offset){
        $this->db->where('id_jenis', 1);
		return $query = $this->db->get('produk',$number,$offset)->result();		
	}

    function dataprodukbaru($number,$offset){
        $this->db->where('id_produkbaru', 2);
		return $query = $this->db->get('produk',$number,$offset)->result();		
	}

 
	function jumlah_data(){
		return $this->db->get('produk')->num_rows();
	}
    function jumlah_datadijual(){
		return $this->db->get('produk')->num_rows();
	}
    function jumlah_dataprodukbaru(){
		return $this->db->get('produk')->num_rows();
	}
}
