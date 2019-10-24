<?php
class  CourseModel extends  CI_Model
{

    public function get_data($limit, $count)
    {
        return $this->db->order_by("id", "DESC")->limit($limit, $count)->get("courses")->result_array();
    }

    public function get_data_single($where)
    {
        return $this->db->where($where)->get("courses")->row_array();
    }


    public function get_recent_data()
    {
        return $this->db->limit(5)->order_by("id", "DESC")->get("courses")->result_array();
    }


    public function get_courses_counts()
    {
        return $this->db->count_all('courses');
    }

    public function get_recent_data_for_teacher($where)
    {
        return $this->db->where($where)->limit(5)->order_by("id", "DESC")->get("courses")->result_array();

    }






    public function get_courses_for_home()
    {
        return $this->db->order_by("id", "DESC")->get("courses")->result_array();
    }


}
