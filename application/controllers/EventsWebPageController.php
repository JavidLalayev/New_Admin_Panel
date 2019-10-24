<?php class EventsWebPageController extends CI_Controller
{


    public $parent_folder = "";
    public $sub_folder = "";

    public function __construct(){

        parent::__construct();

        $this->parent_folder = "front";
        $this->sub_folder = "events";




        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("dil", $dil);


        $this->load->model("EventModel");

    }

    public function index()
    {

        //--------------pagination start------------
        $this->load->library('pagination');

        $config["base_url"]    = base_url($this->uri->segment(1) . "/Events");
        $config["total_rows"]  = $this->EventModel->get_events_counts();
        $config["uri_segment"] = 3;
        $config["per_page"]    = 8;

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

        $data['events']= $this->EventModel->get_data($config["per_page"], $page);


        $data['links']  = $this->pagination->create_links();
    //--------------pagination end------------


        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
    }


    public function single_page($lang, $id)
    {
            $where = [
                'id' => $id
            ];

        $data['event']= $this->EventModel->get_data_single($where);

        $data['events']= $this->EventModel->get_recent_data();



        $this->load->view("$this->parent_folder/$this->sub_folder/single_page",$data);
    }




}