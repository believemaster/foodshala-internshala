<?php
class Orders extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Menu_Model');
		$this->load->model('Order_Model');
	}

	public function index($m_id = NULL)
	{
		if (!$this->session->userdata('logged_in') || ($this->session->userdata('role') === 'res') || $m_id === NULL) {
			show_404();
		}

		//Get the details of the menu item ordered
		$data['menuItem'] = $this->Menu_Model->get_items($m_id);

		$this->load->view('include/header');
		$this->load->view('checkout', $data);
	}

	public function placeOrder()
	{
		if (!$this->session->userdata('logged_in') || ($this->session->userdata('role') === "res") || $this->input->method(TRUE) != "POST") {
			show_404();
		}

		$this->form_validation->set_rules('address', 'Address', 'required|trim|xss_clean|strip_tags');
		$this->form_validation->set_rules('restaurant', 'Restaurant', 'required|trim|xss_clean|strip_tags');
		$this->form_validation->set_rules('m_id', 'Menu Id number', 'required|trim|xss_clean|strip_tags');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required|trim|xss_clean|strip_tags');
		$this->form_validation->set_rules('amount', 'Amount', 'required|trim|xss_clean|strip_tags');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('checkout');
		} else {
			$this->Order_Model->create();

			$this->session->set_flashdata("order_placed", "Order Placed");
			return redirect('orders');
		}
	}

	public function ordered()
	{
		if (!$this->session->userdata('logged_in') || ($this->session->userdata('role') === "Restaurant")) {
			show_404();
		}

		$data['ordered'] = $this->Order_Model->ordered();

		$this->load->view('include/header');
		$this->load->view('orders', $data);
		$this->load->view('include/footer');
	}

	public function allOrders()
	{
		if (!$this->session->userdata('logged_in') || ($this->session->userdata('role') === "User")) {
			show_404();
		}

		$data['orders'] = $this->Order_Model->takeOrders();

		$this->load->view('include/header');
		$this->load->view('allorders', $data);
		$this->load->view('include/footer');
	}

	public function confirm($id)
	{
		if (!$this->session->userdata('logged_in') || ($this->session->userdata('role') === "User")) {
			show_404();
		}

		$this->Order_Model->confirmOrders($id);

		$this->session->set_flashdata("status_confirmed", "Status COnfirmed");
		return redirect('all-orders');
	}

	public function cancel($id)
	{
		if (!$this->session->userdata('logged_in') || ($this->session->userdata('role') === "User")) {
			show_404();
		}

		$this->Order_Model->cancelOrders($id);

		$this->session->set_flashdata("status_confirmed", "Status COnfirmed");
		return redirect('orders');
	}
}
