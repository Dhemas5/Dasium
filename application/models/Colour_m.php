<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Colour_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('p_colour');
        if ($id != null) {
            $this->db->where('colour_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['colour_name'],
        ];
        $this->db->insert('p_colour', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['colour_name'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('colour_id', $post['id']);
        $this->db->update('p_colour', $params);
    }

    public function del($id)
    {
        $this->db->where('colour_id', $id);
        $this->db->delete('p_colour');
    }
}
