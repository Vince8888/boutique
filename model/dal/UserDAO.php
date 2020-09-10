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
class UserDAO extends Dao {

//Récupérer toutes les user
    public function getAll() {
        //On définit la bdd pour la fonction

        $query = $this->_bdd->prepare("SELECT email, password FROM users");
        $query->execute();
        $users = array();

        while ($data = $query->fetch()) {
            $users[] = new User($data);
        }
        return ($users);
    }

    //Ajouter une offre
    public function Add($data) {

        $valeurs = ['email' => $data->get_email(), 'password' => password_hash($data->get_password(), PASSWORD_BCRYPT)];
        echo "data";echo $data->get_password()."\n";
        $requete = 'INSERT INTO users (email, password) VALUES (:email , :password)';
        $insert = $this->_bdd->prepare($requete);
        if (!$insert->execute($valeurs)) {
            print_r($insert->errorInfo());
            return false;
        } else
            return true;
    }

    //Récupérer plus d'info sur 1 user
    public function getOne($data) {

        $query = $this->_bdd->prepare('SELECT email, password FROM users WHERE users.email = :email');
        $query->execute(array('email' => $data->get_email()));
        $result = $query->fetch();
        if (!empty($result) && password_verify($data->get_password(), $results['password'])) {
             $user = new User($result);
        } else {
            $user = null;
        }
        return $user;
    }

    //Récupérer plus d'info sur 1 user
    public function getUserOK($data) {

        $query = $this->_bdd->prepare('SELECT email, password FROM users WHERE users.email = :email');
        $query->execute(array('email' => $data->get_email()));
        $result = $query->fetch();
        echo $result['password'];
        echo " mdp ";
        print_r($data->get_password());
        if (!empty($result) && password_verify($data->get_password(), $result['password'])) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserExist($email) {

        $query = $this->_bdd->prepare('SELECT email, password FROM users WHERE users.email = :email');
        $query->execute(array('email' => $email));
        $result = $query->fetch();

        if (!empty($result)) {
            return true;
        } else {
            return false;
        }
    }

}
