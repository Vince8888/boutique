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
class ArticleDAO extends Dao {

//Récupérer toutes les offres
    public function getAll() {
//On définit la bdd pour la fonction

        $query = $this->_bdd->prepare("SELECT idArticle, nomArticle, imageArticle, prixArticle, descriptionArticle, idCategorie FROM articles");
        $query->execute();
        $articles = array();

        while ($data = $query->fetch()) {
            $articles[] = new Article($data);
        }
        return ($articles);
    }

//Ajouter une offre
    public function Add($data) {
        
    }

//Récupérer plus d'info sur 1 user
    public function getOne($id) {

        $query = $this->_bdd->prepare('SELECT idArticle, nomArticle, imageArticle, prixArticle, descriptionArticle, idCategorie FROM articles WHERE articles.idArticle = :idArticle');
        $query->execute(array('idArticle' => $id));
        $result = $query->fetch();
        if (!empty($result)) {
            $article = new Article($result);
        } else {
            $article = null;
        }
        return $article;
    }

//Récupérer plus d'info sur 1 user
    public function getImplode($ids) {
        $listeId = implode(',', $ids);
        $req = "SELECT idArticle, nomArticle, imageArticle, prixArticle, descriptionArticle, idCategorie FROM articles WHERE articles.idArticle IN ($listeId)";
        $query = $this->_bdd->prepare($req);
        $query->execute();
        $articles = array();
        
        while ($data = $query->fetch()) {
            $articles[] = new Article($data);
        }
        
        return ($articles);
    }

}
