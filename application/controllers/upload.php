<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function tes_upload()
        {
                $config['upload_path']          = './img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 720;
                $config['max_height']           = 1280;

                $this->load->library('upload', $config);

                $this->upload->do_upload('imgurl');
        }
}
?>