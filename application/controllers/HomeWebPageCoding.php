<?php
 class HomeWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "home";


        $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);

     }

     public function index()
     {
         //telebe kurs sayisi counteri ucun
         $data["info"]=$this->Core->get_where_row(["id"=>1],"info");
         //telebe kurs sayisi counteri ucun
         $data["courses"] = $this->Core->get_desc("course");
         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
     }


 }