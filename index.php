<?php

// Initialisation de l'environnement
include('./config/config.init.php');

// Gestion de Routing
if (isset($_GET['action']) && file_exists(_CTRL_ . $_GET['action'] . '.php'))
    include(_CTRL_ . $_GET['action'] . '.php');
elseif (isset($_GET['action']) && !file_exists(_CTRL_ . $_GET['action'] . '.php'))
    include(_CTRL_ . 'erreur.php');
else
    include(_CTRL_ . 'index.php');

if (isset($_SESSION['user'])) {
    $smarty->assign('logUser',$_SESSION['user']);
}
// Affichage des templates

$smarty->display(_VIEW_ . 'header.tpl');

if (isset($_GET['action']) && file_exists(_VIEW_ . $_GET['action'] . '.tpl'))
    $smarty->display(_VIEW_ . $_GET['action'] . '.tpl');
elseif (isset($_GET['action']) && !file_exists(_CTRL_ . $_GET['action'] . '.tpl'))
    $smarty->display(_VIEW_ . 'erreur.tpl');
else
    $smarty->display(_VIEW_ . 'index.tpl');

$smarty->display(_VIEW_ . 'footer.tpl');
?>