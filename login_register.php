<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index($msg = null)
    {
        $data['msg'] = $msg;
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }
    public function validate_credentials()
    {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();
        if ($query) { // if the user's credentials validated...
            $data = array(
                'username' => $this->input->post('username'),
                'logged_in' => true,
                'administrator' => false,
            );
            $this->session->set_userdata($data);
            redirect('login_register/choices');
        } else { // incorrect username or password
            $msg = '<p class=error>Please check your Username or Password</p>';
            $this->index($msg);
        }
    }
    public function choices()
    {
        $data['main_content'] = 'choices';
        $this->load->view('includes/template1', $data);
    }
    public function signup()
    {
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
    }

    public function create_member()
    {
        $this->load->library('form_validation');

        // field name, error message, validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirm', 'trim|required|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
        } else {
            $this->load->model('membership_model');

            if ($query = $this->membership_model->create_member()) {
                $data['main_content'] = 'signup_successful';
                $this->load->view('includes/template', $data);
            } else {
                $data['main_content'] = 'signup_form';
                $this->load->view('includes/template', $data);
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }
}
