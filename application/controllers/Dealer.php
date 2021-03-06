<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dealer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('template_model'); //โหลด model ทุกครั้งที่รัน controller
    }

    public function index()
    {
    }

    public function savetemplate()
    {
        $privilege = $this->input->post('privilege');
        $checkprivilege = $this->template_model->checkduplicateprivilege($privilege);
        if ($checkprivilege == FALSE) {
            echo $statusfile = json_encode(array(
                'status' => '0',
                'message' => 'Cannot Save Data Is Already'
            ));
        } else {
            $config['upload_path'] = './img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['maxsize'] = '5';
            $config['max_width'] = '1200';
            $config['max_height'] = '1200';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo $statusfile = json_encode(array(
                    'status' => '0',
                    'message' => $this->upload->display_errors()
                ));
            } else {
                $pic = $this->upload->data();
                $img = $pic['file_name'];
                $data = array(  //encode ทีละตัว ไม่งั้นจะเป็น Array ซ้อน array ไม่สามารถ add เข้า database ได้
                    't_fname' => $this->input->post('firstname'),
                    't_lname' => $this->input->post('lastname'),
                    't_nname' => $this->input->post('nname'),
                    't_tel' => $this->input->post('tel'),
                    't_line' => $this->input->post('line'),
                    't_qrline' => $this->input->post('qrline'),
                    't_fb' => $this->input->post('fb'),
                    't_ig' => $this->input->post('ig'),
                    't_profilepic' => $this->input->post('profilepic'),
                    'p_id' => $this->input->post('privilege'),
                    't_address' => $this->input->post('address'),
                    't_containment' => $this->input->post('containment'),
                    't_background' => $img
                );
                $this->template_model->addstyle($data); //ส่งค่าไป model
                echo $statusfile = json_encode(array(
                    'status' => '1',
                    'message' => 'Success !'
                ));
            }
        }
    }

    public function readtemplate($memberid)
    {
        $data['fontoption'] = $this->template_model->readfont();
        $data['style'] = $this->template_model->readstyle($memberid);
        if ($data['style'] === '0') {
            echo "<script type='text/javascript'>alert('No Template !');</script>";
            redirect('home/showmember', 'refresh');
        } else {
            $this->load->view('jquery');
            $this->load->view('css');
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('template_view', $data);
            $this->load->view('js');
            $this->load->view('footer');
        }
    }

    public function edittemplate()
    {
        $privilege = $this->input->post('privilege');
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['maxsize'] = '5';
        $config['max_width'] = '1200';
        $config['max_height'] = '1200';
        $this->load->library('upload', $config);

        $data = array(  //encode ทีละตัว ไม่งั้นจะเป็น Array ซ้อน array ไม่สามารถ add เข้า database ได้
            't_fname' => $this->input->post('firstname'),
            't_lname' => $this->input->post('lastname'),
            't_nname' => $this->input->post('nname'),
            't_tel' => $this->input->post('tel'),
            't_line' => $this->input->post('line'),
            't_qrline' => $this->input->post('qrline'),
            't_fb' => $this->input->post('fb'),
            't_ig' => $this->input->post('ig'),
            't_profilepic' => $this->input->post('profilepic'),
            't_address' => $this->input->post('address'),
            't_containment' => $this->input->post('containment'),
        );

        if ($this->upload->do_upload('file')) {
            $pic = $this->upload->data();
            $img = $pic['file_name'];
            $data['t_background'] = $img;
        }
        
        $this->template_model->editstyle($data, $privilege); //ส่งค่าไป model
        echo $statusfile = json_encode(array(
            'status' => '1',
            'message' => 'Edit Success !'
        ));
    }

    public function uploadfontstyle()
    {
        $config['upload_path'] = './font/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('font')) {
            echo $this->upload->display_errors();
        } else {
            $name = $this->upload->data();
            $font = $name['file_name'];
            $data = array(
                'fontname' => $this->input->post('fontname'),
                'font' => $font
            );
            $this->template_model->addfont($data);
        }
    }

    public function deletetemplate($p_id)
    {
        $this->template_model->deltemplate($p_id);
        redirect('', 'refresh');
    }

    public function deletefont($id)
    {
        $this->template_model->delfont($id);
        redirect('home/uploadfont', 'refresh');
    }

    public function getedit($p_id)
    {
        $data['fontoption'] = $this->template_model->readfont();
        $data['id'] = $p_id;
        $data['style'] = $this->template_model->readtoedit($p_id);
        $this->load->view('jquery');
        $this->load->view('css');
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('edit_view', $data);
        $this->load->view('js');
        $this->load->view('footer');
    }
}
