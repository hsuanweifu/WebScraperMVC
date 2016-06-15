<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 2016-02-12
 * Time: 3:37 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends Application {

    public function index()
    {
        if ($this->session->userdata('logged_in') == null){
            redirect('login');
        }
        else{
            $this->load->model('Stocks');
            $this->load->model('Transactions');
            $this->load->model('Movements');

            $stock_list = $this->Stocks->get_all();
            $transaction_list = $this->Transactions->get_all_stock();
            $movement_list = $this->Movements->get_all();
            $transaction = $this->Stocks->get_transaction();

            $this->data['title'] = 'Trade Market';
            $this->data['pagebody'] = 'stock/trades';
            $this->data['stock_list'] = $stock_list;
            $this->data['transactions_list'] = $transaction_list;
            $this->data['movements_list'] = $movement_list;
            $this->data['transactions'] = $transaction;
            $this->data['trades'] = $this->parser->parse('stock/trades', $this->data, true);
            $this->data['menu'] = $this->parser->parse('menu/loggedin', $this->data, true);
            $this->render();
        }
    }

    public function GetStock($stock) {

        $this->load->model('Stocks');
        $this->load->model('Transactions');
        $this->load->model('Movements');

        $stock_list = $this->Stocks->get_all();
        $transaction_list = $this->Transactions->get_all();
        $movement_list = $this->Movements->get_all();
        $transaction = $this->Stocks->get_stock_activity($stock);

        $this->data['title'] = 'Trade Market';
        $this->data['pagebody'] = 'stock/ind_trades';
        $this->data['transactions'] = $transaction;
        $this->data['stockname'] = $stock;
        $this->data['stock_list'] = $stock_list;
        $this->data['transactions_list'] = $transaction_list;
        $this->data['movements_list'] = $movement_list;
        $this->data['trades'] = $this->parser->parse('stock/ind_trades', $this->data, true);

        $this->render();
    }
}