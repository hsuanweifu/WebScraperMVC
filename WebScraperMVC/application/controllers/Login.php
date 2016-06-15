<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Application {

    public function index()
    {
        if ($this->session->userdata('logged_in') == null){
            $this->data['title'] = 'Login';
            $this->data['pagebody'] = 'login_body';
            $this->data['menu'] = $this->parser->parse('menu/loggedout', $this->data, true);
            $this->data['left'] = '';
            $this->data['right'] = '';
            $this->render();
        }
        else{
            redirect('/');
        }

    }

    public function action(){
        if (strcmp($_POST['username'], 'Admin') == 0 && strcmp($_POST['password'], 'arts16vista') == 0){
            $sess_array = array(
                'username' => 'Admin'
            );
            $this->session->set_userdata('logged_in', $sess_array);
            redirect('/');
        }
        else {
            redirect('login');
        }

        /*
        // load
        $this->load->model('Users');

        // variables
        $user               = new Users();
        $username           = $_POST['username'];
        $password           = hash('md5', $_POST['password']);
        $current_user       = $user->login($username, $password);

        if ($user != null){
            $sess_array = array(
                'id' => $current_user[0]->id,
                'username' => $current_user[0]->username
            );
            $this->session->set_userdata('logged_in', $sess_array);
            redirect('/');
        }
        else {
            redirect('login');
        }*/
    }
    public function logout(){
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login');
    }
}