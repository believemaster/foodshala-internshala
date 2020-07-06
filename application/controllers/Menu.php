<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Menu_Model');
	}

	public function index()
	{
		$data['menu_items'] = $this->Menu_Model->get_items(NULL);

		$this->load->view('include/header');
		$this->load->view('menu', $data);
		$this->load->view('include/footer');
	}


	public function create()
	{
		if (!$this->session->userdata('logged_in') || $this->session->userdata('role') != "res") {
			show_404();
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean|strip_tags');
		$this->form_validation->set_rules('description', 'Description', 'required|trim|xss_clean|strip_tags');
		$this->form_validation->set_rules('type', 'Type', 'required|trim|xss_clean|strip_tags');
		$this->form_validation->set_rules('price', 'Price', 'required|trim|xss_clean|strip_tags');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('include/header');
			$this->load->view('create');
			$this->load->view('include/footer');
		} else {
			//Image handling configs
			$config['upload_path'] = './assets/uploaded_images/food_items';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '3000';
			$config['max_height'] = '3000';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
				$errors = array('error' => $this->upload->display_errors());
				$item_image = 'nophoto.png';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$item_image = $_FILES['image']['name'];
			}

			$this->Menu_Model->createItem($item_image);

			$this->session->set_flashdata('item_created', 'New food item has been successfully added');

			redirect('menu');
		}
	}

	public function view($id = NULL)
	{
		$data['item'] = $this->Menu_Model->get_items($id);

		if (empty($data['item'])) {
			show_404();
		}

		$this->load->view('include/header');
		$this->load->view('view', $data);
	}
}
