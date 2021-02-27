<?php defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_model extends CI_Model
{
    private $_table = "layanan";
    public $id;
    public $logo = "default.jpg";
    public $judul;
    public $deskripsi;

    public function rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'
            ],

            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->judul = $post["judul"];
        $this->deskripsi = $post["deskripsi"];
        $this->logo = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->judul = $post["judul"];
        $this->deskripsi = $post["deskripsi"];
        if (!empty($_FILES["logo"]["name"])) {
            $this->logo = $this->_uploadImage();
        } else {
            $this->logo = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $namagambar = "logo" . time();
        $config['upload_path']  = './gambar/layanan/';
        $config['allowed_types']  = 'jpg|jpeg|png';
        $config['file_name']  = $namagambar;
        $config['max_size'] = '3072';
        $config['overwrite']  = 'true';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('logo')) {
            return $this->upload->data("file_name");
        }

        // return "default.jpg";
    }

    // private function _editImage()
    // {
    //     $editgambar = $_FILES["gambar"]["name"];
    //     if ($editgambar) {
    //         $namagambar = "gambar" . time();
    //         $config['upload_path']  = './gambar/produk/';
    //         $config['allowed_types']  = 'jpg|jpeg|png';
    //         $config['file_name']  = $namagambar;
    //         $config['max_size'] = '3072';
    //         $config['overwrite']  = 'true';

    //         $this->load->library('upload', $config);
    //         if ($this->upload->do_upload('gambar')) {
    //             $old_image = $produk->gambar;
    //             if ($old_image != 'default.jpg') {
    //                 unlink(FCPATH . './gambar/produk/' . $old_image);
    //             }
    //             $new_image = $this->upload->data('file_name');
    //             $this->db->set('gambar', $new_image);


    //             // if (!empty($_FILES["gambar"]["name"])) {
    //             //     $this->gambar = $this->_uploadImage();
    //             // } else {
    //             //     $this->gambar = $post["old_image"];
    //             // }
    //             // return "default.jpg";
    //         } else {
    //             echo $this->upload->dispay_errors();
    //         }
    //     }
    // }

    private function _deleteImage($id)
    {
        $layanan = $this->getById($id);
        if ($layanan->logo != "default.jpg") {
            $filename = explode(".", $layanan->logo)[0];
            return array_map('unlink', glob(FCPATH . "./gambar/logo/$filename.*"));
        }
    }
}
