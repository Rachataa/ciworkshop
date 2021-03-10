<?php
class Member_model extends CI_Model
{
    public function addmember($data)
    {
        return $this->db->insert('tb_member', $data); //insert เข้า DB ชื่อ Talble , ตัวแปรที่เก็บข้อมูลส่งไป
    }

    public function deletemember($m_id)
    {
        $this->db->delete('tb_member', array('m_id' => $m_id)); //รับต่า m_id จาก controller เพื่อนำมาลบตาม m_id
    }

    public function updatemember($m_id)
    {
    }

    public function readmember()
    {
        $query = $this->db->get('tb_member');
        return $query->result();
    }

    public function checkmemberID($m_id)
    {
        $this->db->where('m_id', $m_id);
        $query = $this->db->get('tb_member');
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
