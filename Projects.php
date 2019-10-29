<?php
class Projects extends CI_Controller
{
    public function index($offset = 0)
    {
        // Pagination Config
        $config['base_url'] = base_url() . 'projects/index/';
        $config['total_rows'] = $this->db->count_all('projects');
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');

        // Init Pagination
        $this->pagination->initialize($config);

        $data['title'] = 'Latest Projects';

        $data['projects'] = $this->project_model->get_projects(false, $config['per_page'], $offset);

        $this->load->view('templates/header');
        $this->load->view('projects/index', $data);
        // $this->load->view('templates/footer');
    }

    public function view($slug = null)
    {
        $data['project'] = $this->project_model->get_projects($slug);
        $project_id = $data['project']['id'];
        // $data['comments'] = $this->comment_model->get_comments($project_id);

        if (empty($data['project'])) {
            show_404();
        }

        $data['title'] = $data['project']['title'];

        $this->load->view('templates/header');
        $this->load->view('projects/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $username = $this->session->userdata('username');
        if ($this->session->userdata('administrator')) {
            $id = $this->admin_model->get_userid($username)->id;
        } else {
            $id = $this->membership_model->get_userid($username)->id;
        }
        // Check login
        if (!$this->session->userdata('username')) {
            redirect('users/login');
        }

        $data['title'] = 'New Project';

        $data['categories'] = $this->project_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('admin/header');
            $this->load->view('admin/create_project', $data);
            $this->load->view('admin/footer');
        } else {
            // Upload Image
            $config['upload_path'] = './public/images/projects';
            $config['allowed_types'] = 'gif|jpg|png|tif';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $project_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $project_image = $_FILES['userfile']['name'];
            }

            $this->project_model->create_project($project_image);

            // Set message
            $this->session->set_flashdata('project_created', 'Your project has been created');

            redirect('projects');
        }
    }

    public function delete($id)
    {
        // Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $this->project_model->delete_project($id);

        // Set message
        $this->session->set_flashdata('project_deleted', 'Your project has been deleted');

        redirect('projects');
    }

    public function edit($slug)
    {
        // Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['project'] = $this->project_model->get_projects($slug);

        // Check user
        if ($this->session->userdata('user_id') != $this->project_model->get_projects($slug)['user_id']) {
            redirect('projects');

        }

        $data['categories'] = $this->project_model->get_categories();

        if (empty($data['project'])) {
            show_404();
        }

        $data['title'] = 'Edit project';

        $this->load->view('templates/header');
        $this->load->view('projects/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        // Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $this->post_model->update_post();

        // Set message
        $this->session->set_flashdata('post_updated', 'Your post has been updated');

        redirect('projects');
    }
}
