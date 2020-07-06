<?php
class Order_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function create()
	{
		$data = array(
			"u_id" => $this->session->userdata('id'),
			"res_name" => $this->input->post('restaurant'),
			"m_id" => $this->input->post('m_id'),
			"qty" => $this->input->post('quantity'),
			"amt" => $this->input->post('amount'),
			"address" => $this->input->post('address'),
			"status" => 0,
			"pay_id" => "4242424242"
		);

		return $this->db->insert('orders', $data);
	}

	public function ordered()
	{
		$this->db->order_by('orders.o_id', 'DESC');
		$this->db->join('menu', 'menu.m_id = orders.m_id');
		$this->db->where('u_id', $this->session->userdata('id'));

		$query = $this->db->get('orders');
		return $query->result_array();
	}

	public function takeOrders()
	{
		$this->db->order_by('orders.o_id', 'DESC');
		$this->db->join('menu', 'menu.m_id = orders.m_id');
		$this->db->join('users', 'users.id = orders.u_id');
		$this->db->where('res_name', $this->session->userdata('name'));

		$query = $this->db->get('orders');
		return $query->result_array();
	}

	public function confirmOrders($id)
	{
		$this->db->set('status', 1);
		$this->db->where('o_id', $id);
		$this->db->update('orders');
	}

	public function cancelOrders($id)
	{
		$this->db->set('waiting', 0);
		$this->db->where('o_id', $id);
		$this->db->update('orders');
	}
}
