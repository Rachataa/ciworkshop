<?php
class Template_model extends CI_Model
{
    public function addstyle($data)
    {
        return $this->db->insert('tb_template', $data); //insert เข้า DB ชื่อ Talble , ตัวแปรที่เก็บข้อมูลส่งไป
    }

    public function editstyle($data, $privilege)
    {
        $this->db->where('privilege', $privilege);
        $this->db->update('tb_template', $data);
    }

    public function readstyle($id)
    {
        $this->db->select('*');
        $this->db->from('tb_member');
        $this->db->join('tb_template', 'tb_template.privilege = tb_member.privilege_id');
        $this->db->where('m_id', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function checkduplicateprivilege($privilege)
    {
        $this->db->where('privilege', $privilege);
        $query = $this->db->get('tb_template');
        if ($query->num_rows() > 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkprivilegetoedit($privilege)
    {
        $this->db->where('privilege', $privilege);
        $query = $this->db->get('tb_template');
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function addfont($data)
    {
        return $this->db->insert('tb_font', $data); //insert เข้า DB ชื่อ Talble , ตัวแปรที่เก็บข้อมูลส่งไป
    }
    public function readfont()
    {
        $fontoption = $this->db->get('tb_font');

        return $fontoption->result();
    }
}
