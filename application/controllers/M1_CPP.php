<?php
    class M1_CPP extends CI_controller {
        public function __construct() {
            parent:: __construct();
            $this->load->helper('url');
            $this->load->helper('form');
        }

        public function index() {
            #This is the base view to test the Career Path Planning.
            $data['title'] = 'Base View for testing';
            $this->load->view('include/header',$data);
            $this->load->view('include/navbar');
            $this->load->view('features/m1_cpp_0'); //This calls the career path prospect selection fragment for the CPP form
            $this->load->view('include/footer');
        }

        public function m1_cpp_1() {
            $career_prospects = $this->input->post('Career_prospects');
            // echo $career_prospects;
            $data['title'] = 'This is the second form';
            $data['career_prospect'] = $career_prospects;
            $this->load->view('include/header',$data);
            $this->load->view('include/navbar');
            $this->load->view('features/m1_cpp_1', $data); //This calls the career path prospect selection fragment for the CPP form
            $this->load->view('include/footer');
        }

        public function m1_cpp_2(){
            $career_prospects = $this->input->post('Career_prospects');
            $ssc1 = $this->input->post('ssc1');
            $ssc2 = $this->input->post('ssc2');
            $ssc3 = $this->input->post('ssc3');
            $ssc4 = $this->input->post('ssc4');
            $ssc5 = $this->input->post('ssc5');
            $ave = $ssc1 + $ssc2 + $ssc3 + $ssc4 + $ssc5;
            $data['title'] = 'This is the second form';
            $data['ssc_ave'] = $ave; 
            $data['career_prospect'] = $career_prospects;
            $this->load->view('include/header',$data);
            $this->load->view('include/navbar');
            $this->load->view('features/m1_cpp_2', $data); //This calls the career path prospect selection fragment for the CPP form
            $this->load->view('include/footer');
        }

        public function m1_cpp_3() {
            $tsc1 = $this->input->post('tsc1');
            $tsc2 = $this->input->post('tsc2');
            $tsc3 = $this->input->post('tsc3');
            $tsc4 = $this->input->post('tsc4');
            $tsc5 = $this->input->post('tsc5');
            $career_prospects = $this->input->post('Career_prospects');
            $ssc_ave = $this->input->post('ssc_ave');
            $tsc_ave = $tsc1 + $tsc2 + $tsc3 + $tsc4 + $tsc5;
            $data['title'] = 'Career Path Plan Results';
            $data['tsc_ave'] = $tsc_ave; 
            $data['ssc_ave'] = $ssc_ave; 
            $data['career_prospect'] = $career_prospects; 
            $this->load->view('include/header',$data);
            $this->load->view('include/navbar');
            $this->load->view('features/m1_cpp_3', $data); //This calls the career path prospect selection fragment for the CPP form
            $this->load->view('include/footer');
        }
    }
?>