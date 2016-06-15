<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends Application {

    public function index()
    {
        if ($this->session->userdata('logged_in') == null){
            redirect('login');
        }
        else {
            $this->data['title']    = 'Process';
            $this->data['pagebody'] = 'process_body';
            $this->data['menu']     = $this->parser->parse('menu/loggedin', $this->data, true);
            $this->data['left']     = '';
            $this->data['right']    = '';

            $this->render();
        }
    }
}