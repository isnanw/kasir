<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Log_model extends CI_Model
{

    public function save_log($param)
    {
        $sql        = $this->db->insert_string('log_user', $param);
        $ex         = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }
}
