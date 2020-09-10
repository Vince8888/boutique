<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require 'defines.inc.php';
require 'Autoload.php';
require _PATH_ . '/view/web/tools/smarty/Smarty.class.php';

Autoloader::register();

// Initialisation Smarty
$smarty = new Smarty();
$panier = new Panier();
$smarty->assign('panier', $panier);
