<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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

    var $api = "";
    function __construct()
    {
        parent::__construct();
        $this->api = "https://reqres.in/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }


    public function index()
    {
        if (isset($_POST['submit_form'])) {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),

            );



            $user = $this->curl->simple_post($this->api . '/login', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($user) {
                $this->load->view('beranda');
            } else {
                echo '<script>alert("Wrong email or password!");history.go(-1);</script>';
            }
        }
    }

    public function save()
    {
        if (isset($_POST['submit_form'])) {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'birth' => $this->input->post('birth'),

            );
            $register = $this->curl->simple_post($this->api . '/register', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($register) {
                echo '<script>alert("Register success!");history.go(-1);</script>';
            } else {
                echo '<script>alert("Register failed!");history.go(-1);</script>';
            }
        }
    }
}
