<?php

$panier = new panier();
$json = array('error' => true);
if (isset($_GET['id'])) {
    //On appelle la fonction getAll()
    $articleDao = new ArticleDAO();
    /* @var $alloffers type */
    $article = $articleDao->getOne($_GET['id']);
    
    if (empty($article)) {
        $json['message'] = "Ce produit n'existe pas";
    } else {
        $panier->add($article->get_idArticle());
        $json['error'] = false;
        $json['total'] = number_format($panier->total(), 2, ',', ' ');
        $json['count'] = $panier->count();
        $json['message'] = 'Le produit a bien été ajouté à votre panier';
    }
} else {
    $json['message'] = "Vous n'avez pas sélectionné de produit à ajouter au panier";
}
echo json_encode($json);
header('Location: article');
