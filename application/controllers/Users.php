<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_Model');
	}

	// User
	public function user()
	{
		$this->load->view('include/header');
		$this->load->view('register_user');
	}

	public function regUser()
	{
		if ($this->session->userdata('logged_in')) {
			$this->load->view('include/header');
			redirect('menu');
			$this->load->view('include/footer');
		}

		/* Validation rule */
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_checkemail');
		$this->form_validation->set_rules('preference', 'Preference', "required");
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('repassword', 'Confirm Password', "required|matches[password]");

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('include/header');
			$this->load->view('register_user');
		} else {
			$user = $this->User_Model->regUser();

			if ($user) {
				$this->session->set_userdata($user);
				$this->session->set_flashdata('registered', 'You have been successfully registered');

				redirect('menu');
			} else {
				$this->session->set_flashdata('register_error', 'Please enter valid credentials');
				redirect('login');
			}
		}
	}


	// Restaurant
	public function restaurant()
	{
		$this->load->view('include/header');
		$this->load->view('register_restaurant');
	}

	public function regRestaurant()
	{
		if ($this->session->userdata('logged_in')) {
			redirect('menu');
		}

		/* Validation rule */
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_checkemail');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
		$this->form_validation->set_rules('repassword', 'Confirm Password', "required|matches[password]");

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('include/header');
			$this->load->view('register_restaurant');
		} else {
			$user = $this->User_Model->regRestaurant();

			if ($user) {
				$this->session->set_userdata($user);
				$this->session->set_flashdata('registered', 'You have been successfully registered');

				redirect('menu');
			} else {
				$this->session->set_flashdata('register_error', 'Please enter valid credentials');
				redirect('register-restaurant');
			}
		}
	}

	// To Check Existing Email in the DB
	public function checkemail($email)
	{
		$query = $this->db->where('email', $email)->get("users");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('checkemail', 'The ' . $email . ' belongs to an existing account');
			return FALSE;
		} else
			return TRUE;
	}

	// Login
	public function login()
	{
		$this->load->view('include/header');
		$this->load->view('login');
	}

	public function signin()
	{
		if ($this->session->userdata('logged_in')) {
			redirect('menu');
		}

		$this->form_validation->set_rules('email', 'Email', "required|trim|strip_tags|valid_email");
		$this->form_validation->set_rules('password', 'Password', "required");

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('include/header');
			$this->load->view('login');
		} else {
			$email = $this->input->post('email');
			$hash_password = md5($this->input->post('password'));
			$user_data = $this->User_Model->loginUser($email, $hash_password);

			if ($user_data) {
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('user_loggedin', 'You have been successfully logged in');

				redirect('menu');
			} else {
				$this->session->set_flashdata('login_error', 'Please enter valid credentials');
				redirect('login');
			}
		}
	}

	// Logout
	public function logout()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		}

		//Unset session
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('preference');

		$this->session->set_flashdata('user_loggedout', 'You have been successfully logged out');

		redirect('menu');
	}
}
