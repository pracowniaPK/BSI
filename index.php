<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php
        error_reporting(E_ERROR | E_PARSE);
        if (isset($_GET['logout']) && $_GET['logout'] == "true") {
            session_start();
            $_SESSION['user'] = 0;
            header('Location: 6_PHP/login.php');
        }
    ?>
    <?php
        $main = 1;
        require("6_PHP/check.php");
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BSI</title>
    <link rel="stylesheet prefetch" href="https://meyerweb.com/eric/tools/css/reset/reset.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styl.css" />
    <link rel="stylesheet" href="styl_bs.css" />
</head>

<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="?logout=true">wyloguj <i class="far fa-times-circle"></i></a>
        </li>
    </ul>
    <div class="ramka">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h5 style="text-transform: uppercase;">bsi 2018</h5>
                <h6>zadanie 1: HTML table</h6>
                <div class="ramka_linki">
                    <a class="menu" href="1_table/index1.php">Główna</a>
                    <a class="menu" href="1_table/form.php">Formularz</a>
                    <a class="menu" href="1_table/gallery.php">Galeria</a>
                </div>
                <h6>zadanie 2: HTML div</h6>
                <div class="ramka_linki">
                    <a class="menu" href="2_div/index2.php">Główna</a>
                    <a class="menu" href="2_div/form2.php">Formularz</a>
                    <a class="menu" href="2_div/gallery2.php">Galeria</a>
                </div>
                <h6>zadanie 3: Java Script</h6>
                <div class="ramka_linki">
                    <a class="menu" href="3_JS/calculator.php">Kalkulator</a>
                    <a class="menu" href="3_JS/form3.php">Formularz</a>
                </div>
                <h6>zadanie 4: XSLT + XML</h6>
                <div class="ramka_linki">
                    <a class="menu" href="4_XSLT/invoice.xml">Faktura</a>
                </div>
                <h6>zadanie 5: Bootstrap</h6>
                <div class="ramka_linki">
                    <a class="menu" href="5_Bootstrap/bs_index.php">Główna</a>
                    <a class="menu" href="5_Bootstrap/bs_form.php">Formularz</a>
                    <a class="menu" href="5_Bootstrap/bs_gallery.php">Galeria</a>
                    <a class="menu" href="5_Bootstrap/bs_calculator.php">Kalkulator</a>
                </div>
                <h6>6: PHP</h6>
                <div class="ramka_linki">
                    <a class="menu" href="6_PHP/login.php">Login</a>
                    <a class="menu" href="6_PHP/form.php">Formularz</a>
                    <a class="menu" href="6_PHP/users_form.php">Dane</a>
                </div>
                <h6>Źródło</h6>
                <div class="ramka_linki">
                    <a class="menu" href="https://github.com/pracowniaPK/BSI" style="text-align: center;">
                        <div style="font-size:2em; color: #555555"><i class="fab fa-github"></i></div>
                    </a>
                </div>
                <div class="ramka_linki">
                    <a class="menu" href="about.php">O stronie</a>
                </div>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer">
                        <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
                    </a>
                </p>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>

</html>