<?php

if (isset($_SESSION['user'])) {
    header("Location: article");
}
else{
     header("Location: login");
}