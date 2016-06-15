<?php
/**
 * Created by PhpStorm.
 * User: Sam Salvail
 * Date: 2016-02-11
 * Time: 3:12 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Application {

    public function index()
    {
        if ($this->session->userdata('logged_in') == null){
            redirect('login');
        }
        else{
            $transactions_list = array();

            $this->load->model('Transactions');
            $this->load->model('Players');

            $transactions_list = $this->Transactions->get_all();
            $players_list = $this->Players->get_all();

            $this->data['title'] = 'Portfolio';
            $this->data['pagebody'] = 'portfolio_body';
            $this->data['transactions_list'] = $transactions_list;
            $this->data['players_list'] = $players_list;
            $this->data['menu'] = $this->parser->parse('menu/loggedin', $this->data, true);


            $this->render();
        }
    }

    public function getPlayer($player)
    {
        $this->load->model('Transactions');
        $this->load->model('Players');

        $transactions_list = $this->Transactions->get_player_history($player);
        $players_list = $this->Players->get_all();
        $player_stock_list = $this->Transactions->get_player_stock($player);

        $this->data['title'] = 'Portfolio';
        $this->data['pagebody'] = 'portfolioPlayer_body';
        $this->data['name'] = $player;
        $this->data['transactions_list'] = $transactions_list;
        $this->data['players_list'] = $players_list;
        $this->data['player_stock_list'] = $player_stock_list;

        $this->render();
    }
}