<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dss_model extends CI_Model
{
    public function deleteAlternative($alternative_id)
    {
        $this->db->where('id', $alternative_id);
        $this->db->delete('list_alternatives');
    }
}
