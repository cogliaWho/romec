<?php
class Progettazione extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $site_lang = $this->session->userdata('site_lang');
        $this->lang->load('Message', $site_lang);
    }

    public function index()
	{
        if ( ! file_exists(APPPATH.'/views/pages/progettazione.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['lang_code'] = $this->session->userdata('site_lang');
        $data['title'] = ucfirst(lang('msg_progettazione_title')); // Capitalize the first letter
        $data['text'] = lang('msg_progettazione_text');

        
        $data['hasSlide'] = TRUE;
        $data['autoplay'] = "false";
        $this->load->model('slideshows_model');
        $data['slides'] = $this->slideshows_model->get_slides('progettazione');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/progettazione', $data);
        $this->load->view('templates/footer', $data);
	}
}