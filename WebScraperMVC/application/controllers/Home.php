<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Application {

    public function index()
    {
        if ($this->session->userdata('logged_in') == null){
            redirect('login');
        }
        else {
            $this->data['title']        = 'Home';
            $this->data['pagebody']     = 'home_body';
            $this->data['menu']         = $this->parser->parse('menu/loggedin', $this->data, true);
            $this->data['left']         = $this->parser->parse('menu/left', $this->data, true);
            $this->data['right']        = '';
            $this->data['statistic']    = $this->parser->parse('home/statistic', $this->data, true);
            $this->data['pending']      = $this->parser->parse('home/pending', $this->data, true);
            $this->render();
        }
        /*
        if ($this->session->userdata('logged_in') == null){
            redirect('login');
        }
        else{
            $this->load->model('Stocks');
            $this->load->model('Players');

            $stock_list = $this->Stocks->get_all();
            $player_list = $this->Players->get_all();

            $this->data['title'] = 'Stock Ticker';
            $this->data['pagebody'] = 'home_body';
            $this->data['stock_list'] = $stock_list;
            $this->data['player_list'] = $player_list;
            $this->data['stocks'] = $this->parser->parse('home/stocks', $this->data, true);
            $this->data['players'] = $this->parser->parse('home/players', $this->data, true);
            $this->data['menu'] = $this->parser->parse('menu/loggedin', $this->data, true);
            $this->render();
        }*/
    }
}
