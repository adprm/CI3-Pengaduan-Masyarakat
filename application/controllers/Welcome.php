<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('report_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->view('welcome_message');
	}

	public function add() {
		$report = $this->report_model;
		$validation = $this->form_validation;
		$validation->set_rules($report->rules());

		if ($validation->run()) {
			$report->save();
			$this->session->set_flashdata('warning', 'Data successfully reported');
		}

		redirect(base_url());
	}
}
