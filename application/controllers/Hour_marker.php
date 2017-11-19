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


		$this->form_validation->set_rules('mark_type', 'Tipo Marcação', 'callback_mark_type_check');


		if ($this->form_validation->run() == FALSE){

			$this->load->view('header');
			$this->load->view('errors/registration/error_registration');
			$this->load->view('footer');
            
        }else{
            $this->hour_marker_model->include_registration($user_id, $dataLocal, $horaLocal, $tipo_marcarcao);
            $this->load->view('header');
			$this->load->view('user/register/register_success', $data);
			$this->load->view('footer');
        }

	}

	public function mark_type_check($str)
    {

		$user_id = $_SESSION['user_id'];
		$dataLocal = date('d-m-Y', time());

    	$registration = $this->hour_marker_model->check_mark_type($user_id,$dataLocal,$str);
            
        if ($registration > 0){

           $this->form_validation->set_message('check_mark_type', 'Já houve essa marcação hoje, verifique qual marcação deve ser registrada agora - {field}');
           return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}
