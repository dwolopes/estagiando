<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 *
 * @extends CI_Model
 */
class Hour_marker_model extends CI_Model {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

	/**
	 * include_registration function.
	 *
	 * @access public
	 * @param mixed $user_id
	 * @param mixed $data_local
	 * @param mixed $hora_local 
	 * @param mixed $tipo_marcação
	 * @return bool true on success, false on failure
	 */
	public function include_registration($user_id, $data_local, $hora_local, $tipo_marcacao) {

		$data = array(
			'id_usuario' => $user_id,
			'data' => $data_local,
			'hora' => $hora_local,
			'tipo_marcacao' => $tipo_marcacao,
		);

		return $this->db->insert('registros', $data);

	}

}
