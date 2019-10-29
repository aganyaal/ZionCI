<?php
class Membership_model extends CI_Model
{
    public function validate()
    {

        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');
        $totalfound = $query->num_rows();
        echo $totalfound;
        if ($totalfound == 1) {
            return true;
        }
    }
    
    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('membership', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    // Check email exists
    public function check_email_exists($email)
    {
        $query = $this->db->get_where('membership', array('email' => $email));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    public function create_member()
    {
        $new_member_insert_data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_address' => $this->input->post('email_address'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
        );

        $insert = $this->db->insert('membership', $new_member_insert_data);
        return $insert;
    }

    public function get_userid($username)
    {
        $query = $this->db->get_where('membership', array('username' => $username));
        return $query->row();
    }
}
