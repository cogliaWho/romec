<?php
class Chisiamo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $site_lang = $this->session->userdata('site_lang');
        $this->lang->load('Message', $site_lang);
    }

    public function index()
	{
        if ( ! file_exists(APPPATH.'/views/pages/chisiamo.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['hasSlide'] = FALSE;
        $data['lang_code'] = $this->session->userdata('site_lang');
        $data['title'] = ucfirst(lang('msg_chisiamo_title')); // Capitalize the first letter
        $data['text'] = lang('msg_chisiamo_text');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/chisiamo', $data);
        $this->load->view('templates/footer', $data);
	}
}