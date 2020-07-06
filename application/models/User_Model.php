<?php

class User_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function regUser()
	{
		$data = array(
			'name' 			=> $this->input->post('name'),
			'email' 		=> $this->input->post('email'),
			'preference' 	=> $this->input->post('preference'),
			'password' 		=> md5($this->input->post('password')),
			'role' 			=> 'user'
		);
		$user = $this->db->insert('users', $data);

		return $user;
	}

	public function regRestaurant()
	{

		$data = array(
			'name' 			=> $this->input->post('name'),
			'email' 		=> $this->input->post('email'),
			'password' 		=> md5($this->input->post('password')),
			'role' 			=> 'res'
		);
		$user = $this->db->insert('users', $data);

		return $user;
	}

	public function loginUser($email, $hash_password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $hash_password);

		$result = $this->db->get('users');

		if ($result->num_rows() === 1) {
			$user_data = array(
				"id"    	 => $result->row(0)->id,
				"name"       => $result->row(0)->name,
				"email"      => $result->row(0)->email,
				"role"       => $result->row(0)->role,
				"preference" => $result->row(0)->preference,
				"logged_in"  => true
			);
			return $user_data;
		} else {
			return FALSE;
		}
	}
}
