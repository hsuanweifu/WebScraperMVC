<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deploy extends Application {

    public function index()
    {
        if ($this->session->userdata('logged_in') == null){
            redirect('login');
        }
        else {
            $this->data['title']    = 'Deploy';
            $this->data['pagebody'] = 'deploy_body';
            $this->data['menu']     = $this->parser->parse('menu/loggedin', $this->data, true);
            $this->data['left']     = '';
            $this->data['right']    = '';

            $this->render();
        }
    }
}