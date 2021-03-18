<?php
class Template_model extends CI_Model
{
    public function addstyle($data)
    {
        return $this->db->insert('tb_template', $data); //insert เข้า DB ชื่อ Talble , ตัวแปรที่เก็บข้อมูลส่งไป
    }

    public function editstyle($data, $privilege)
    {
        $this->db->where('p_id', $privilege);
        $this->db->update('tb_template', $data);
    }

    public function readstyle($id)
    {
        $this->db->where('m_id', $id);
        $member = $this->db->get('tb_member');
        if ($member->num_rows() > 0) {
            $this->db->select('*');
            $this->db->from('tb_member');
            $this->db->join('tb_template', 'tb_template.p_id = tb_member.p_id');
            $this->db->where('m_id', $id);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                $data = $query->row();
                return $data;
            } else {
                return '0';
            }
        } else {
            return '00';
        }
    }

    public function checkduplicateprivilege($privilege)
    {
        $this->db->where('p_id', $privilege);
        $query = $this->db->get('tb_template');
        if ($query->num_rows() > 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkprivilegetoedit($privilege)
    {
        $this->db->where('p_id', $privilege);
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

    public function readprivilege()
    {
        $query = $this->db->get('tb_privilege');

        return $query->result();
    }

    public function checktemplate($id)
    {
        $this->db->where('p_id', $id);
        $query = $this->db->get('tb_template');
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deltemplate($p_id)
    {
        $this->db->delete('tb_template', array('p_id' => $p_id));
    }

    public function delfont($id)
    {
        $this->db->delete('tb_font', array('id' => $id));
    }

    public function readtoedit($p_id)
    {
        $this->db->select('*');
        $this->db->from('tb_template');
        $this->db->where('p_id', $p_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        } else {
            return FALSE;
        }
    }
}
