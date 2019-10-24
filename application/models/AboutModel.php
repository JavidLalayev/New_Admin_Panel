<?php
class AboutModel extends  CI_Model
{

    public function get_data()
    {
        return $this->db->get("about")->row_array();
    }

}