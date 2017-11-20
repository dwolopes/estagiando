<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @extends CI_Controller
 */
class User extends CI_Controller {

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
		$this->load->model('user_model');

	}

	public function index() {

	}

	/**
	 * register function.
	 *
	 * @access public
	 * @return void
	 */
	public function register() {

		// create the data object
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('security');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// set validation rules
		$this->form_validation->set_rules('name', 'Nome', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('username', 'Nome de usuário', 'trim|alpha|min_length[4]|is_unique[users.username]', array('is_unique' => 'Este nome de usuário já existe =( Escolha outro.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirme sua senha', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === false) {

			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/register/register', $data);
			$this->load->view('footer');

		} else {

			// set variables from the form
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->user_model->create_user($name, $username, $email, $password)) {

				// user creation ok
				$this->load->view('header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('footer');

			} else {

				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';

				// send error to the view
				$this->load->view('header');
				$this->load->view('user/register/register', $data);
				$this->load->view('footer');

			}

		}

	}

	/**
	 * login function.
	 *
	 * @access public
	 * @return void
	 */
	public function login() {

		// create the data object
		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');

		// set validation rules
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Senha', 'required');

		if ($this->form_validation->run() == false) {

			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/login/login');
			$this->load->view('footer');

		} else {

			// set variables from the form
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->user_model->resolve_user_login($email, $password)) {

				$user_id = $this->user_model->get_user_id_from_username($email);
				$user = $this->user_model->get_user($user_id);

				// set session user datas
				$_SESSION['user_id'] = (int) $user->id;
				$_SESSION['name'] = (string) $user->name;
				$_SESSION['username'] = (string) $user->username;
				$_SESSION['logged_in'] = (bool) true;
				$_SESSION['is_confirmed'] = (bool) $user->is_confirmed;
				$_SESSION['is_admin'] = (bool) $user->is_admin;

				// user login ok
				$this->load->view('header');
				$this->load->view('user/login/login_success', $data);
				$this->load->view('footer');

			} else {

				// login failed
				$data->error = 'Wrong username or password.';

				// send error to the view
				$this->load->view('header');
				$this->load->view('user/login/login', $data);
				$this->load->view('footer');

			}

		}

	}

	/**
	 * logout function.
	 *
	 * @access public
	 * @return void
	 */
	public function logout() {

		// create the data object
		$data = new stdClass();

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			// user logout ok
			$this->load->view('header');
			$this->load->view('user/logout/logout_success', $data);
			$this->load->view('footer');

		} else {

			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');

		}

	}

	/**
	 * Redirect to Initial page.
	 *
	 * @access public
	 * @return void
	 */
	public function initial_page() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){

			// user redirect ok
			$this->load->view('header');
			$this->load->view('user/login/login_success');
			$this->load->view('footer');
		}

	}

}
