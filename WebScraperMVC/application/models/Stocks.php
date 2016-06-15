<?php
/**
 * Created by PhpStorm.
 * User: Sam Salvail
 * Date: 2016-02-12
 * Time: 3:25 PM
 */
class Stocks extends MY_Model {

    public $code;
    public $name;
    public $category;
    public $value;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_all(){
        $query = $this->db->get('stocks');
        return $query->result();
    }

    public function get_transaction() {

        $query = $this->db->get('transactions', 'Stock');
        return $query->result();
    }

    public function get_stock_activity($name) {

        $query = 'SELECT * FROM transactions WHERE stock = ?;';
        $query = $this->db->query($query, array($name));
        return $query->result();
    }

}
