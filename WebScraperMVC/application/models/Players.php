<?php
/**
 * Created by PhpStorm.
 * User: Sam Salvail
 * Date: 2016-02-12
 * Time: 3:24 PM
 */
class Players extends MY_Model {

    public $player;
    public $cash;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_all(){
        $query = $this->db->get('players');
        return $query->result();
    }

    public function get_all_players(){
        $query = $this->db->query("SELECT player FROM players");
        return $query->result();
    }
}