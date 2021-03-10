<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model'); //โหลด model ทุกครั้งที่รัน controller
    }

    public function index()
    {
        $this->load->view('css');
        $this->load->view('form_login'); //เรียกหน้า 
        $this->load->view('js');
    }

    public function adddata()
    {
        $config['upload_path'] = './imgmember/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['maxsize'] = '2000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $status = 0;
        $status2 = 0;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('m_qr')) {
            $p_img1 = '';
            echo $this->upload->display_errors();
        } else {
            $status = 1;
            $fileData1 = $this->upload->data();
            $p_img1 = $data['p_img1'] = $fileData1['file_name'];
        }
        if (!$this->upload->do_upload('m_pic')) {
            $p_img2 = '';
            echo $this->upload->display_errors();
        } else {
            $status2 = 1;
            $fileData2 = $this->upload->data();
            $p_img2 = $data['p_img2'] = $fileData2['file_name'];
        }
        if ($status === $status2) {
            $data = array(
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname'),
                'm_nname' => $this->input->post('m_nname'),
                'm_tel' => $this->input->post('m_tel'),
                'm_line' => $this->input->post('m_line'),
                'm_fb' => $this->input->post('m_fb'),
                'm_ig' => $this->input->post('m_ig'),
                'm_address' => $this->input->post('m_address'),
                'privilege_id' => $this->input->post('privilege_id'),
                'm_qr' => $p_img1,
                'm_pic' => $p_img2
            );
            $this->member_model->addmember($data); //เรียกใช้ model ฟังก์ชัน addmember
            echo "<script type='text/javascript'>alert('Success !');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Unsuccessful !');</script>";
        }
    }

    public function deletedata($m_id)
    {
        $this->member_model->deletemember($m_id); //เรียกใช้ model ฟังก์ชัน delete ส่งค่า m_id ไปเพื่อเทียบในการลบข้อมูล
    }

    public function readdata()
    {
        $data['query'] = $this->member_model->readmember(); //รับค่าจาก query ที่ได้จากการ query ใน model ใน func ที่กำหนด
        $this->load->view('css');
        $this->load->view('table_showmember', $data);
        $this->load->view('js');
    }

    public function updatedata()
    {
        $this->member_model->updatemember(); //เรียกใช้ model ฟังก์ชัน addmember
    }
}
