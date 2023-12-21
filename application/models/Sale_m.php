<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sale_m extends CI_Model
{

    public function invoice_no()
    {
        // Mengambil tanggal dalam format yymmdd
        $date = date('ymd');

        // Membuat query SQL untuk mencari invoice terbaru
        $sql = "SELECT MAX(MID(invoice, 9, 4)) AS invoice_no FROM t_sale WHERE MID(invoice, 3, 6) = ?";
        $query = $this->db->query($sql, [$date]);

        // Memeriksa apakah query berhasil dieksekusi
        if ($query === false) {
            // Handle kesalahan query
            return "Error: " . $this->db->error(); // Gantilah dengan cara penanganan kesalahan yang sesuai
        }

        // Memeriksa apakah ada hasil dari query
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->invoice_no) + 1;
            $no = sprintf("%04d", $n); // Memastikan nomor faktur selalu 4 digit
        } else {
            $no = "0001";
        }

        // Membuat nomor faktur baru
        $invoice = "KT" . $date . $no;

        return $invoice;
    }

    public function get_cart($params = null)
    {
        $this->db->select('*, p_item.name as item_name, t_cart.price as cart_price');
        $this->db->from('t_cart');
        $this->db->join('p_item', 't_cart.item_id = p_item.item_id');
        if ($params != null) {
            $this->db->where($params);
        }
        $this->db->where('user_id', $this->session->userdata('userid'));
        $query = $this->db->get();
        return $query;
    }

    public function add_cart($post)
    {
        $query = $this->db->query("SELECT MAX(cart_id) AS cart_no FROM t_cart");
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $car_no = ((int)$row->cart_no) + 1;
        } else {
            $car_no = "1";
        }

        $params = array(
            'cart_id' => $car_no,
            'item_id' => $post['item_id'],
            'price' => $post['price'],
            'qty' => $post['qty'],
            'total' => ($post['price'] * $post['qty']),
            'user_id' => $this->session->userdata('userid')
        );
        $this->db->insert('t_cart', $params);
    }

    function update_cart_qty($post)
    {
        $sql = "UPDATE t_cart SET price = '$post[price]',
                qty = qty + '$post[qty]',
                total = '$post[price]' * qty
                WHERE item_id = '$post[item_id]'";
        $this->db->query($sql);
    }

    public function del_cart($params = null)
    {
        if ($params != null) {
            $this->db->where($params);
        }
        $this->db->delete('t_cart');
    }

    public function edit_cart($post)
    {
        $params = array(
            'price' => $post['price'],
            'qty' => $post['qty'],
            'discount_item' => $post['discount'],
            'total' => $post['total'],
        );
        $this->db->where('cart_id', $post['cart_id']);
        $this->db->update('t_cart', $params);
    }

    public function add_sale($post)
    {
        $params = array(
            'invoice' => $this->invoice_no(),
            'member_id' => $post['member_id'] == "" ? null : $post['member_id'],
            'total_price' => $post['subtotal'],
            'discount' => $post['discount'],
            'final_price' => $post['grandtotal'],
            'cash' => $post['cash'],
            'remaining' => $post['change'],
            'note' => $post['note'],
            'date' => $post['date'],
            'user_id' => $this->session->userdata('userid')
        );
        $this->db->insert('t_sale', $params);
        return $this->db->insert_id();
    }
    function add_sale_detail($params)
    {
        $this->db->insert_batch('t_sale_detail', $params);
    }

    public function get_sale($id = null)
    {
        $this->db->select('*, member.name as member_name, user.username as user_name, t_sale.created as sale_created');
        $this->db->from('t_sale');
        $this->db->join('member', 't_sale.member_id = member.member_id', 'left');
        $this->db->join('user', 't_sale.user_id = user.user_id');
        if ($id != null) {
            $this->db->where('sale_id', $id);
        }
        $this->db->order_by('date', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function get_sale_pagination($limit = null, $start = null)
    {
        $post = $this->session->userdata('search');
        $this->db->select('*, member.name as member_name, user.username as user_name, 
                        t_sale.created as sale_created');
        $this->db->from('t_sale');
        $this->db->join('member', 't_sale.member_id = member.member_id', 'left');
        $this->db->join('user', 't_sale.user_id = user.user_id');
        if (!empty($post['date1']) && !empty($post['date2'])) {
            $this->db->where("t_sale.date BETWEEN '$post[date1]' AND '$post[date2]'");
        }
        if (!empty($post['member'])) {
            if ($post['member'] == 'null') {
                $this->db->where("t_sale.member_id IS NULL");
            } else {
                $this->db->where("t_sale.member_id", $post['member']);
            }
        }
        if (!empty($post['invoice'])) {
            $this->db->like("invoice", $post['invoice']);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function get_sale_detail($sale_id = null)
    {
        $this->db->select('*, t_sale_detail.price as detail_price');
        $this->db->from('t_sale_detail');
        $this->db->join('p_item', 't_sale_detail.item_id = p_item.item_id');
        if ($sale_id != null) {
            $this->db->where('t_sale_detail.sale_id', $sale_id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del_sale($id)
    {
        $this->db->where('sale_id', $id);
        $this->db->delete('t_sale');
    }
}
