<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		//$this->load->model('hour_marker_model');

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

		$tipo_marcarcao = $this->input->post('mark_type');

		echo $tipo_marcarcao;

	}

}
