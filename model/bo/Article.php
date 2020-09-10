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
class Article {

    private $_idArticle;
    private $_nomArticle;
    private $_imageArticle;
    private $_prixArticle;
    private $_descriptionArticle;
    private $_idCategorie;

    function __construct($article) {
        $this->set_idArticle($article['idArticle']);
        $this->set_nomArticle($article['nomArticle']);
        $this->set_imageArticle(_IMG_.$article['imageArticle']);
        $this->set_prixArticle($article['prixArticle']);
        $this->set_descriptionArticle($article['descriptionArticle']);
        $this->set_idCategorie($article['idCategorie']);
    }

    function get_idArticle() {
        return $this->_idArticle;
    }

    function get_nomArticle() {
        return $this->_nomArticle;
    }

    function get_imageArticle() {
        return $this->_imageArticle;
    }

    function get_prixArticle() {
        return $this->_prixArticle;
    }

    function get_descriptionArticle() {
        return $this->_descriptionArticle;
    }

    function get_idCategorie() {
        return $this->_idCategorie;
    }

    function set_idArticle($_idArticle) {
        $this->_idArticle = $_idArticle;
    }

    function set_nomArticle($_nomArticle) {
        $this->_nomArticle = $_nomArticle;
    }

    function set_imageArticle($_imageArticle) {
        $this->_imageArticle = $_imageArticle;
    }

    function set_prixArticle($_prixArticle) {
        $this->_prixArticle = $_prixArticle;
    }

    function set_descriptionArticle($_descriptionArticle) {
        $this->_descriptionArticle = $_descriptionArticle;
    }

    function set_idCategorie($_idCategorie) {
        $this->_idCategorie = $_idCategorie;
    }


}
