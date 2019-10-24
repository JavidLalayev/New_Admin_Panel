<?php
class  EventModel extends  CI_Model{

    public function get_data($limit, $count)
    {
        return $this->db->order_by("id", "DESC")->limit($limit, $count)->get("events")->result_array();
    }

    public function get_data_single($where)
    {
        return $this->db->where($where)->get("events")->row_array();
    }


    public function get_recent_data()
    {
        return $this->db->limit(5)->order_by("id", "DESC")->get("events")->result_array();
    }


    public function get_events_counts()
    {
        return $this->db->count_all('events');
    }



}