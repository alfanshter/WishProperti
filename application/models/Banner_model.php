<?php defined('BASEPATH') or exit('No direct script access allowed');

class Banner_model extends CI_Model
{
    private $_table = "banner";

    public $id;
    public $deskripsi;
    public $gambar = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ]
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
        $this->deskripsi = $post["deskripsi"];
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }
    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $namagambar = "banner" . time();
        $config['upload_path']  = './gambar/web/';
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
        $banner = $this->getById($id);
        if ($banner->gambar != "default.jpg") {
            $filename = explode(".", $banner->gambar)[0];
            return array_map('unlink', glob(FCPATH . "./gambar/web/$filename.*"));
        }
    }
}
