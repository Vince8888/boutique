<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offres
 *
 * @author 1703728
 */
class User {

    private $_email;
    private $_password;

    function __construct($email, $password) {
        $this->set_email($email);
        $this->set_password($password);
    }

    function get_email() {
        return $this->_email;
    }

    function get_password() {
        return $this->_password;
    }

    function set_email($_email) {
        $this->_email = $_email;
    }

    function set_password($_password) {
        $this->_password = $_password;
    }


}
