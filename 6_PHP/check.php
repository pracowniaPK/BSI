<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();

    if (isset($_SESSION['user']) && $_SESSION['user'] == 1) {

    } else {
        if (isset($main)) {
            echo '<script>window.location="6_PHP/login.php"</script>';
        } else {
            echo '<script>window.location="../6_PHP/login.php"</script>';
        }
    }
?>