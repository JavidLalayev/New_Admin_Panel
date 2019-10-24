<?php class AboutWebPageController extends CI_Controller
{


    public $parent_folder = "";
    public $sub_folder = "";

    public function __construct(){

        parent::__construct();

        $this->parent_folder = "front";
        $this->sub_folder = "about";




        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("dil", $dil);


        $this->load->model("AboutModel");

    }

    public function index()
    {
        $data['about']= $this->AboutModel->get_data();

        $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
    }







}