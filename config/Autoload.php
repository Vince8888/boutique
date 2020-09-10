<?php

/**
 * Class Autoloader
 */
class Autoloader {

    /**
     * Enregistre notre autoloader
     */
    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class) {
        if (file_exists(_MODEL_BO_ . $class . '.php'))
            require _MODEL_BO_ . $class . '.php';

        if (file_exists(_MODEL_DAL_ . $class . '.php'))
            require _MODEL_DAL_ . $class . '.php';
    }

}
