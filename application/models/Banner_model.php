<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner_model extends CI_Model
{
    public function read()
    {
        $query = "SELECT * FROM banner";
        return $this->db->query($query)->result_array();
        echo json_encode($query);
    }
}
