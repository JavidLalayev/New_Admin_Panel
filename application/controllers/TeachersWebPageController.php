<?php class TeachersWebPageController extends CI_Controller
{


    public $parent_folder = "";
    public $sub_folder = "";

    public function __construct(){

        parent::__construct();

        $this->parent_folder = "front";
        $this->sub_folder = "teachers";




        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("dil", $dil);


        $this->load->model("CourseModel");
        $this->load->model("TeacherModel");

    }

    public function index()
    {

        //--------------pagination start------------
        $this->load->library('pagination');

        $config["base_url"]    = base_url($this->uri->segment(1) . "/Teachers");
        $config["total_rows"]  = $this->TeacherModel->get_counts();
        $config["uri_segment"] = 3;
        $config["per_page"]    = 16;

        $config["num_links"] = 4;
        $config['full_tag_open']    = "<ul class='pagination'>";
        $config['full_tag_close']   = "</ul>";


        $config['first_link'] = '&lt;&lt;';
        $config['first_tag_open'] = '<li class="prev">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '&gt;&gt;';
        $config['last_tag_open'] = '<li >';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = ' &gt; ';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = ' &lt; ';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['teachers']= $this->TeacherModel->get_data($config["per_page"], $page);


        $data['links']  = $this->pagination->create_links();
        //--------------pagination end------------


        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
    }


    public function single_page($lang, $id)
    {
        /*             for courses*/

        $where2 = [
            'teacher_id' => $id
        ];
        $course= $this->TeacherModel->get_teacher_id($where2);

        $where = [
            'id' => $course['course_id'],
        ];

        $data['course']= $this->CourseModel->get_data_single($where);


        $data['courses']= $this->CourseModel->get_recent_data();


        /*            for teacher*/


        $where3 = [
            'id' => $id,
        ];
        $data['teacher']= $this->TeacherModel->get_teacher($where3);




        $this->load->view("$this->parent_folder/$this->sub_folder/single_page",$data);
    }




}