<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//On appelle la fonction getAll()
$articleDao = new ArticleDAO();
/* @var $alloffers type */
$allArticles = $articleDao->getAll();
//On transmets les variables à Smarty

$smarty->assign('allArticles', $allArticles);