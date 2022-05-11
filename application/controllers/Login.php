<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

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

	public function index()
	{
		$this->load->view('login_form');
	}

	public function register()
	{
		$this->load->view('register_form');
	}

	public function save()
	{
		if (isset($_POST['submit_form'])) {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'birth' => $this->input->post('birth')

			);

			$register = $this->curl->simple_post($this->api . '/register', $data, array(CURLOPT_BUFFERSIZE => 10));
			print_r($register);
			die;
			if ($register) {
				echo '<script>alert("Register success!");history.go(-1);</script>';
			} else {
				echo '<script>alert("Register failed!");history.go(-1);</script>';
			}
		}
	}


	public function logout()
	{
		session_start();
		session_destroy();
		echo '<script>alert("Logout success");window.location="../"</script>';
	}
}
