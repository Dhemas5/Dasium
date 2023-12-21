<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('member');
        if ($id != null) {
            $this->db->where('member_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['member_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
        ];
        $this->db->insert('member', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['member_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('member_id', $post['id']);
        $this->db->update('member', $params);
    }

    public function del($id)
    {
        $this->db->where('member_id', $id);
        $this->db->delete('member');
    }
}
