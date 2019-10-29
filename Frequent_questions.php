<?php
class Frequent_questions extends CI_Controller
{
    public function index($offset = 0)
    {
        // Pagination Config
        $config['base_url'] = base_url() . 'frequent_questions/index';
        $config['total_rows'] = $this->db->count_all('questions');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');

        // Init Pagination
        $this->pagination->initialize($config);

        $data['questions'] = $this->frequent_questions_model->get_questions(false, $config['per_page'], $offset);

        $this->load->view('templates/header');
        $this->load->view('faq/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = null)
    {
        $data['question'] = $this->frequent_questions_model->get_questions($id);
        $question_id = $data['question']['id'];
        $data['answers'] = $this->answer_model->get_answers($question_id);

        if (empty($data['question'])) {
            show_404();
        }

        $data['title'] = 'Question '.$question_id;

        $this->load->view('templates/header');
        $this->load->view('faq/view', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->frequent_questions_model->add_question();
        redirect(welcome);
    }

    public function delete($id)
    {
        $this->frequent_questions_model->delete_question($id);
        redirect('frequent_questions');
    }
}
