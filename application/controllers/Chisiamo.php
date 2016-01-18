<?php
class Chisiamo extends CI_Controller {

    public function index()
	{
        if ( ! file_exists(APPPATH.'/views/pages/chisiamo.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst('chi siamo'); // Capitalize the first letter
        $data['hasSlide'] = FALSE;
        //$site_lang = $this->session->userdata('site_lang');
        //$this->lang->load($data['title'], $site_lang);
        //$data['language_msg'] = lang('msg_last_name');
        
        //$this->load->model('slideshows_model');
        //$data['slides'] = $this->slideshows_model->get_slides('hp');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/chisiamo', $data);
        $this->load->view('templates/footer', $data);
	}
}