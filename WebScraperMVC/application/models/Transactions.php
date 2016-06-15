<?php
/**
 * Created by PhpStorm.
 * User: Sam Salvail
 * Date: 2016-02-12
 * Time: 5:21 PM
 */
class Transactions extends MY_Model {

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
        $query = $this->db->get('transactions');
        return $query->result();
    }

    public function get_all_stock(){
        $allStocks = array();
        //www.comp4711bsx.local/data/stocks
        //http://bsx.jlparry.com/data/stocks
        if(($fileHandler = fopen("www.comp4711bsx.local/data/stocks", 'r')) !== FALSE) {
            while (($data = fgetcsv($fileHandler, 0, ',', '"')) !== FALSE) {
                $allStocks[] = array("code" => $data[0], "name" => $data[1], "category" => $data[2], "value" => $data[3]);
            }
            fclose($fileHandler);
        }
        array_shift($allStocks);
        return $allStocks;
    }

    public function get_player_stock($name)
    {
        $sql = 'SELECT * FROM holdings WHERE player = ?;';
        $query = $this->db->query($sql, array($name));

        return $query->result();
    }

    public function get_player_history($name)
    {
        $sql = 'SELECT * FROM transactions WHERE player = ?;';
        $query = $this->db->query($sql, array($name));

        return $query->result();
    }
}