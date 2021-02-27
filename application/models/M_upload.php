<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_upload extends CI_Model
{
    public function insertUpload($data)
    {
        return $this->db->table('upload')->insert($data);
    }
}
