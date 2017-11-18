<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/Sao_Paulo');

/**
 * User class.
 *
 * @extends CI_Controller
 */
class Hour_marker extends CI_Controller {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('hour_marker_model');

	}

	public function index() {

	}

	/**
	 * register hour function.
	 *
	 * @access public
	 * @return void
	 */

	public function register_hour() {
		// create the data object
		$data = new stdClass();

		$this->load->helper('form');
		$this->load->library('form_validation');

		$user_id = $_SESSION['user_id'];
		$dataLocal = date('d-m-Y', time());
		$horaLocal = date('H:i:s', time());
		$tipo_marcarcao = $this->input->post('mark_type');

		if ($this->hour_marker_model->include_registration($user_id, $dataLocal, $horaLocal, $tipo_marcarcao)) {

				// insert registration ok
				$this->load->view('header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('footer');

		} else echo "Erro";

	}

}
