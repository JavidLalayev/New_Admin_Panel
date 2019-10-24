<?php
 class  ContactModel extends  CI_Model{

     public function get_data()
     {
      return   $this->db->get("contact")->row_array();
     }




 }