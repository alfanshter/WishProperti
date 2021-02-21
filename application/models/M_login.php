<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    // private $table = "admin";

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
