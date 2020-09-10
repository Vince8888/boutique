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
class Offres {

    private $_title;
    private $_description;

    function __construct($offres) {
        $this->set_title($offres['title']);
        $this->set_description($offres['description']);
    }

    function get_title() {
        return $this->_title;
    }

    function get_description() {
        return $this->_description;
    }

    function set_title($_title) {
        $this->_title = $_title;
    }

    function set_description($_description) {
        $this->_description = $_description;
    }

}
