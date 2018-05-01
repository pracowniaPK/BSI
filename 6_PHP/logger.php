<?php
    if ($_POST["login"] == "user" && sha1($_POST["passwd"]) == "12dea96fec20593566ab75692c9949596833adc9") {
        session_start();
        $_SESSION['user'] = 1;
        header('Location: ../index.php');
    } else {
        header('Location: login.php?fail=1');
    }
?>

login <?php echo $_POST["login"]; ?><br />
hasło <?php echo $_POST["passwd"]; ?><br />
