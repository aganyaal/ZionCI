<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header');
        // $this->load->view('home');
        $this->load->view('admin/footer');
    }
    // Register admin
    public function register()
    {
        $data['title'] = 'Add Administrator';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === false) {
            $this->load->view('admin/header');
            $this->load->view('admin/register', $data);
            $this->load->view('admin/footer');
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->admin_model->register($enc_password);

            // Set message
            $this->session->set_flashdata('admin_registered', 'You are now registered and can log in');

            redirect('admin');
        }
    }

    // Log in admin
    public function login()
    {
        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('admin/login', $data);
            $this->load->view('templates/footer');
        } else {

            // Get username
            $username = $this->input->post('username');
            // Get and encrypt the password
            $password = md5($this->input->post('password'));

            // Login admin
            $user_id = $this->admin_model->login($username, $password);

            if ($user_id) {
                // Create session
                $user_data = array(
                    'username' => $username,
                    'logged_in' => true,
                    'administrator' => true
                );

                $this->session->set_userdata($user_data);

                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');

                redirect('projects/create');
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');

                redirect('admin/login');
            }
        }
    }

    // Log admin out
    public function logout()
    {
        // Unset admin data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('administrator');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');

        redirect('admin/login');
    }

    // Check if username exists
    public function check_username_exists($username)
    {
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if ($this->admin_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    }

    // Check if email exists
    public function check_email_exists($email)
    {
        $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
        if ($this->admin_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }
}
