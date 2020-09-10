<?php

if (isset($_SESSION['user'])) {
    header("Location: /offres/");
}
$message = '';
$erreur = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
    if ($_POST['password'] == $_POST['confirm_password']) {
        // Enter the new user in the database
        $userDao = new UserDAO();
        $userFind = $userDao->getUserExist($_POST['email']);

        if (!$userFind) {
            $userAdd = $userDao->add(new User($_POST['email'], $_POST['password']));
            if ($userAdd) {
                $message = 'Successfully created new user';
            } else {
                $erreur = 'Sorry there must have been an issue creating your account';
            }
        } else {
            $erreur = 'Désolé Utilisateur déjà existant';
        }
    } else {
        $erreur = 'Veuillez re-confirmer votre mot de passe';
    }
} 
$smarty->assign('message', $message);
$smarty->assign('erreur', $erreur);
