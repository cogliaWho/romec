<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $site_lang = $this->session->userdata('site_lang');
        $this->lang->load('Message', $site_lang);
    }

    public function index()
	{
        if ( ! file_exists(APPPATH.'/views/pages/home.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['lang_code'] = $this->session->userdata('site_lang');
        $data['title'] = ucfirst(lang('msg_home_title')); // Capitalize the first letter
        
        $data['hasSlide'] = FALSE;
        /*$data['autoplay'] = "true";
        $this->load->model('slideshows_model');
        $data['slides'] = $this->slideshows_model->get_slides('hp');*/

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer', $data);
	}
}