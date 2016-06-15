<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Application {

    public function __construct()
    {
        parent::__construct();

        //$this->load->database();
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == null){
            $this->data['title'] = 'Register';
            $this->data['pagebody'] = 'register_body';
            $this->data['menu'] = $this->parser->parse('menu/loggedout', $this->data, true);
            $this->render();
        }
        else{
            redirect('/');
        }
    }

    public function action(){
        // load
        $this->load->model('Users');

        // variables
        $username           = $_POST['username'];
        $password           = $_POST['password'];
        $confirm_password   = $_POST['confirm_password'];
        $target_dir         = base_url() . 'assets/images/';

        //var_dump($avatar);
        // if the username exist in database return to register page
        if ($this->Users->check_username($username) != null){
            redirect('register');
        }
        // if the passwords does not match return to register page
        else if ($password != $confirm_password){
            redirect('register');
        }
        // check if the file uploaded is an image
        else if (getimagesize($_FILES["avatar"]["tmp_name"]) == false) {
            redirect('register');
        }
        // check if file is too big
        if ($_FILES["avatar"]["size"] > 500000) {
            redirect('register');
        }
        // if everything is good register and redirect to login
        else{
            $user = new Users();
            $user->username = $username;
            $user->password = hash('md5', $password);
            $user->avatar   = 'something';
            $user->isAdmin  = false;

            $user->insert();

            // move_uploaded_file($_FILES["avatar"]["tmp_name"], "assets/images/" . ($user->get_largest_id() + 1));

            redirect('login');
        }
    }
}