<?php

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    unset($_SESSION['panier']);
    header("Location: article");
}
