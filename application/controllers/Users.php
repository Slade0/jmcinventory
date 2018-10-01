<?php

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('authit');
        $this->load->helper('authit');
        $this->config->load('authit');
        $this->load->model('users_model');
        $this->load->helper('html_helper');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function dashboard() {
        if(!logged_in()) redirect('auth/login');
        echo "Weclome back " . user('id');
        echo "<br>";
        echo "<br>Your role is " . user('role_id');
        echo "<br>";
        echo "<br><a href=''>Make a Reservation</a>";
        echo "<br><a href=''>View Current Inventory</a>";
        echo "<br><a href=''>Add Items to Inventory</a>";
        echo "<br>";
        echo "<br>Software Web Dev 2 Team:";
        echo "<br>";
        echo "<br>Edgar Flores";
        echo "<br>Roland Burks";
        echo "<br>Slade Davidson";
        echo "<br>Andrew Reville";
        exit;
    }
}
