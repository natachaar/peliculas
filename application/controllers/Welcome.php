<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('front/view_header');
        $this->load->view('front/view_home_page');
        $this->load->view('front/view_footer');
    }

}
