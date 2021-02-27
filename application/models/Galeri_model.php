<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model

{
    private $_table2 = "galeri";
    public $id_galeri;
    public $id;
    public $gambar;
    public function rules()
    {
        return [
            [
                'field' => 'gambar',
                'label' => 'Gambar',
                'rules' => 'required'
            ],
        ];
    }

    public function getall()
    {
        $this->db->select('produk.*, COUNT(galeri.id) as total_gambar');
        $this->db->from('produk');
        $this->db->join('galeri', 'galeri.id=produk.id', 'left');
        $this->db->group_by('produk.id');
        $this->db->order_by('produk.id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    public function getgambarById($id)
    {
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where(['id' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function cekData()
    {
        $this->db->limit(1);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('galeri')->row_array();
    }

    public function save($insert, $data)
    {
        $this->db->insert_batch('galeri', $insert);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table2, ["id_galeri" => $id])->row();
    }
    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table2, array("id_galeri" => $id));
    }
    private function _deleteImage($id)
    {
        $gambar = $this->getById($id);
        if ($gambar->gambar != "default.jpg") {
            $filename = explode(".", $gambar->gambar)[0];
            return array_map('unlink', glob(FCPATH . "./gambar/produk/isi/$filename.*"));
        }
    }
}
