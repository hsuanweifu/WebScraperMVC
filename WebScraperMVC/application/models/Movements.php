<?php
/**
 * Created by PhpStorm.
 * User: A00897119
 * Date: 2/13/2016
 * Time: 8:32 PM
 */
class Movements extends MY_Model {



    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_all(){
        $query = $this->db->get('movements');
        return $query->result();
    }




}