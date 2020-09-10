<?php

// Script PHP de la supression d'un article dans le panier

// Test si un id est passé en GET
if(isset($_GET['id'])){
    // Appel de la fonction del du panier
    $panier->del($_GET['id']);
}
header('location: panier');
