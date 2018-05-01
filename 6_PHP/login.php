<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">


    <link rel="stylesheet" href="../styl_bs.css" />

    <title>BSI</title>
</head>

<body>
    <ul class="nav  ">
        <li class="nav-item">
            <a class="nav-link active" href="../index.php">powrót: Główna</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form.php">Formularz</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <?php
                    if (isset($_GET['fail']) && $_GET['fail'] == 1) {
                        echo '<div class="alert alert-warning  alert-dismissible fade show" role="alert">Nieprawidłowy login lub hasło!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                        ';
                }
                ?>
                <?php
                    session_start();
                    if (isset($_SESSION['user']) && $_SESSION['user'] == 1) {
                        echo '
                        <button type="button" onclick="location.href=\'../index.php?logout=true\';" class="btn btn-light btn-lg btn-block">Wyloguj</button>
                        ';
                    } else {
                        echo '
                            <form action="logger.php" method="post">
                                <div class="form-group">
                                    <label for="login">Login:</label>
                                    <input type="text" class="form-control" id="login" name="login">
                                </div>
                                <div class="form-group">
                                    <label for="passwd">Hasło:</label>
                                    <input type="password" class="form-control" id="passwd" name="passwd">
                                    <small class="form-text text-muted">login: user, hasło: user</small>
                                </div>
                                <button type="submit" class="btn btn-light">Zaloguj</button>
                            </form> 
                            ';
                    }
                ?>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>