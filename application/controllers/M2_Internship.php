<?php
    class M2_Internship extends CI_controller{
        public function __construct()
        {
            parent:: __construct();
            $this->load->helper('url');
            $this->load->helper('form');
        }
        public function index(){
            $data['title'] = 'This is the starting page for Internship';
            $this->load->view('include/header',$data);
            $this->load->view('include/navbar');
            $this->load->view('features/module2/m2_Internship_0'); //This calls the career path prospect selection fragment for the CPP form
            $this->load->view('include/footer');  
        }
        public function internship_form(){
            $data['title'] = 'This is the starting page for Internship';
            $this->load->view('include/header',$data);
            $this->load->view('include/navbar');
            $this->load->view('features/module2/m2_Internship_1'); //This calls the career path prospect selection fragment for the CPP form
            $this->load->view('include/footer');  
        }
    }
?>