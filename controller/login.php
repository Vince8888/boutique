<?php

if (isset($_SESSION['user'])) {
    header("Location: article");
}

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    //On appelle la fonction getAll()
    $userDao = new UserDAO();
    
    /* @var $alloffers type */
    $userFind = $userDao->getUserOK(new User($_POST['email'],$_POST['password']));

    $message = '';

    if ($userFind) {
        $_SESSION['user'] = $_POST['email'];
        header("Location: article");
    } else {
        $message = 'Désolé, email ou mot de passe incorrect';
    }  
    
    $smarty->assign('message', $message);
    
    
    
}