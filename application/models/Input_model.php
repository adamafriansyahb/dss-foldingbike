<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_model extends CI_Model
{
    public function getCriteria()
    {
        $table = 'dss_criteria';
        $query = $this->db->get($table);
        $row_0 = $query->row(0);
        $row_1 = $query->row(1);
        $row_2 = $query->row(2);
        $row_3 = $query->row(3);
        $row_4 = $query->row(4);

        return array($row_0, $row_1, $row_2, $row_3, $row_4);
    }
}
