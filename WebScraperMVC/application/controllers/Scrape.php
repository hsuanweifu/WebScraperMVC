<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scrape extends Application {

    public function index($site)
    {
        if ($this->session->userdata('logged_in') == null){
            redirect('login');
        }
        else{
            $this->data['title'] = 'Scrape ' . $site;
            $this->data['pagebody'] = 'scrape_body';
            $this->data['menu'] = $this->parser->parse('menu/loggedin', $this->data, true);
            $this->data['left']         = $this->parser->parse('menu/left', $this->data, true);
            $this->data['right']        = '';


            $this->render();
        }
    }
}