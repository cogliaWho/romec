<?php
class Costruzione extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $site_lang = $this->session->userdata('site_lang');
        $this->lang->load('Message', $site_lang);
    }

    public function index()
	{
        if ( ! file_exists(APPPATH.'/views/pages/costruzione.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $data['lang_code'] = $this->session->userdata('site_lang');
        $data['hasSlide'] = FALSE;
        $data['title'] = ucfirst(lang('msg_costruzione_title')); // Capitalize the first letter
        $data['text'] = lang('msg_costruzione_text');
        
        //$this->load->model('slideshows_model');
        //$data['slides'] = $this->slideshows_model->get_slides('hp');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/costruzione', $data);
        $this->load->view('templates/footer', $data);
	}
}