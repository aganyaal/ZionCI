<?php
class Frequent_questions_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_questions($id = false, $limit = false, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        if ($id === false) {
            $this->db->order_by('questions.id', 'DESC');
            $query = $this->db->get('questions');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('questions', array('id' => $id));
            return $query->row_array();
        }
    }

    public function add_question()
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'telephone' => $this->input->post('telephone'),
            'email' => $this->input->post('email'),
            'question'=>$this->input->post('question')
        );
        return $this->db->insert('questions',$data);
    }

    public function delete_question($id){
        $this->db->where('id',$id);
        $this->db->delete('questions');
        return true;
    }


}
