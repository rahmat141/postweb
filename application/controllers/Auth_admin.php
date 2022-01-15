<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Auth_models');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {
            if (isset($this->session->userdata['logged_in'])) {
                redirect('admin');
            } else {
                $this->load->view('admin/auth');
            }
        } else {
            // validate success
            $this->admin_login_process();
        }
    }

    // Check for user login process
    public function admin_login_process()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $result = $this->Auth_models->login($data);
        if ($result == TRUE) {
            $username = $this->input->post('username');
            $result = $this->Auth_models->read_user_information($username);
            if ($result != false) {
                $session_data = array(
                    'username' => $result[0]->username,
                );
                // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);
                redirect('admin');
            }
        } else {
            $data = array(
                'error_message' => 'Invalid Username or Password'
            );
            $this->load->view('admin/auth', $data);
        }
    }
    public function logout()
    {
        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('admin/auth', $data);
    }
}
