<?php
class  TeacherModel extends  CI_Model
{

    public function get_data($limit, $count)
    {
        return $this->db->order_by("id", "DESC")->limit($limit, $count)->get("teachers")->result_array();
    }

    public function get_data_single($where)
    {
        return $this->db->where($where)->get("teachers")->row_array();
    }


    public function get_recent_data()
    {
        return $this->db->limit(5)->order_by("id", "DESC")->get("courses")->result_array();
    }


    public function get_counts()
    {
        return $this->db->count_all('teachers');
    }


    public function get_teacher_id($where)
    {
        return $this->db->where($where)->get("course_teachers")->row_array();
    }

    public function get_teacher($where)
    {
        return $this->db->where($where)->get("teachers")->row_array();
    }









    public function get_teachers_for_home()
    {
        return $this->db->order_by("id", "DESC")->get("teachers")->result_array();
    }
}
