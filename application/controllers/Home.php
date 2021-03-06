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
        $data['query'] = $this->template_model->readprivilege();
        $this->load->view('jquery');
        $this->load->view('css');
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('home_view', $data);
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function design($p_id)
    {
        $data['fontoption'] = $this->template_model->readfont();
        $data['p_id'] = $p_id;
        $this->load->view('jquery');
        $this->load->view('css');
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('create_view', $data);
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function uploadfont()
    {
        $data['fontoption'] = $this->template_model->readfont(); //query member
        $this->load->view('jquery');
        $this->load->view('css');
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('uploadfont_view', $data);
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function showmember()
    {
        $data['member'] = $this->member_model->readmember(); //query member
        $this->load->view('jquery');
        $this->load->view('css');
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('member_view', $data); // show member in talble
        $this->load->view('js');
        $this->load->view('footer');
    }
    
}