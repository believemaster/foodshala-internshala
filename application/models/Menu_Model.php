<?php

class Menu_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_items($id = NULL)
	{

		$this->db->order_by('menu.m_id', 'DESC');

		$this->db->join('users', 'users.id = menu.res_id');

		if ($id == NULL) {
			$query = $this->db->get('menu');
			return $query->result_array();
		}

		$query = $this->db->get_where('menu', array('menu.m_id' => $id));
		return $query->row_array();
	}


	public function createItem($item_image)
	{
		$slug = url_title($this->input->post('name'));

		$data = array(
			'item_name'      => $this->input->post('name'),
			'description'    => $this->input->post('description'),
			'res_id'  		 => $this->session->userdata('id'),
			'type'           => $this->input->post('type'),
			'price'          => $this->input->post('price'),
			'slug'           => $slug,
			'image'          => $item_image
		);

		return $this->db->insert('menu', $data);
	}
}
