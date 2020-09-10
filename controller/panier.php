<?php
$allArticles = array();
if (!isset($_SESSION['user'])) {
    header("Location: login");
} else {
    $ids = array_keys($_SESSION['panier']);

    if (empty($ids)) {
        $products = array();
    } else {
        $articleDao = new ArticleDAO();
        /* @var $alloffers type */
        $allArticles = $articleDao->getImplode($ids);
    }

    $smarty->assign('allArticles', $allArticles);
    $smarty->assign('panier', new Panier());
}
