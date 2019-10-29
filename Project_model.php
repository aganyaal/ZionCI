<?php
class Project_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_projects($slug = false, $limit = false, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        if ($slug === false) {
            $this->db->order_by('projects.id', 'DESC');
            $this->db->join('categories', 'categories.id = projects.category_id');
            $query = $this->db->get('projects');
            return $query->result_array();
        }

        $query = $this->db->get_where('projects', array('slug' => $slug));
        return $query->row_array();
    }

    public function create_project($project_image)
    {

        $username = $this->session->userdata('username');
        if ($this->session->userdata('administrator')) {
            $id = $this->admin_model->get_userid($username)->id;
        } else {
            $id = $this->membership_model->get_userid($username)->id;
        }
        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'category_id' => $this->input->post('category_id'),
            'user_id' => $id,
            'project_image' => $project_image,
            'start' => $this->input->post('from'),
            'end' => $this->input->post('to')
        );

        return $this->db->insert('projects', $data);
    }

    public function delete_project($id)
    {
        $image_file_name = $this->db->select('project_image')->get_where('projects', array('id' => $id))->row()->project_image;
        $cwd = getcwd(); // save the current working directory
        $image_file_path = $cwd . "\\public\\images\\projects\\";
        chdir($image_file_path);
        unlink($image_file_name);
        chdir($cwd); // Restore the previous working directory
        $this->db->where('id', $id);
        $this->db->delete('projects');
        return true;
    }

    public function update_project()
    {
        $slug = url_title($this->input->project('title'));

        $data = array(
            'title' => $this->input->project('title'),
            'slug' => $slug,
            'body' => $this->input->project('body'),
            'category_id' => $this->input->project('category_id'),
        );

        $this->db->where('id', $this->input->project('id'));
        return $this->db->update('projects', $data);
    }

    public function get_categories()
    {
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }

    public function get_projects_by_category($category_id)
    {
        $this->db->order_by('projects.id', 'DESC');
        $this->db->join('categories', 'categories.id = projects.category_id');
        $query = $this->db->get_where('projects', array('category_id' => $category_id));
        return $query->result_array();
    }
}
