<?php
class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $site_lang = $this->session->userdata('site_lang');
        $this->lang->load('Message', $site_lang);
        
        $this->load->model('contact_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ( ! file_exists(APPPATH.'/views/pages/contact.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['error'] = '';
        $data['hasSlide'] = FALSE;
        $data['lang_code'] = $this->session->userdata('site_lang');
        $data['title'] = ucfirst(lang('msg_contatti_title')); // Capitalize the first letter
        $data['text'] = lang('msg_contatti_text');
        
        $this->form_validation->set_rules('name', 'Nome', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Oggetto', 'trim|required');
        $this->form_validation->set_rules('message', 'Messaggio', 'trim|required');

        $this->form_validation->set_error_delimiters('<li class="error">', '</li>');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pages/contact', $data);
            $this->load->view('templates/footer', $data);
        } else {
            /*Send email*/
            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to('coglia@gmail.com');
            $this->email->cc('lorenzo.cogliati@gmail.com'); 
            $this->email->subject($this->input->post('subject'));
            $this->email->message($this->input->post('message'));

            if ($this->email->send()){
                $this->contact_model->set_message();
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('pages/success', $data);
                $this->load->view('templates/footer', $data);
            }
            else{
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('pages/error', $data);
                $this->load->view('templates/footer', $data);
            }
        }
    }
}