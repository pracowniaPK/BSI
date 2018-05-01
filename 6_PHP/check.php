<?php
    session_start();
    if (isset($_SESSION['user']) && $_SESSION['user'] == 1) {

    } else {
        if (isset($main)) {
            header('Location: 6_PHP/login.php');
        } else {
            header('Location: ../6_PHP/login.php');
        }
    }
?>