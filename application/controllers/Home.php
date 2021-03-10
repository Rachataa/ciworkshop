<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model'); //โหลด model ทุกครั้งที่รัน controller
        $this->load->model('template_model');
    }

    public function index()
    {
        // $data['query'] = $this->member_model->readmember(); //query member
        $data['fontoption'] = $this->template_model->readfont();
        $this->load->view('jquery');
        $this->load->view('css');
        // $this->load->view('table_showmember', $data); // show member in talble
        $this->load->view('dealer_view', $data);
        // $this->load->view('template_view', $data);
        // $this->load->view('uploadfont_view');
        $this->load->view('js');
    }
}
