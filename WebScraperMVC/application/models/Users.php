<?php
/**
 * Created by PhpStorm.
 * User: Sam Salvail
 * Date: 2016-02-12
 * Time: 3:24 PM
 */
class Users extends MY_Model {

    public $password;
    public $username;
    public $avatar;
    public $isAdmin;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_all(){
        $query = $this->db->get('Users');
        return $query->result();
    }

    public function get_all_usernames(){
        $query = $this->db->query("SELECT username FROM users");
        return $query->result();
    }

    public function get_largest_id(){
        $query = $this->db->query("SELECT COUNT(*) FROM users");
        return $query->result();
    }

    public function login($username, $password){
        $query = $this->db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        return $query->result();
    }
    public function check_username($username){
        $query = $this->db->query("SELECT username FROM users WHERE username = '$username'");
        return $query->result();
    }

    public function insert()
    {
        $this->db->insert('users', $this);
    }
}