<!doctype html>
<html lang="en">

<head>
    <?php
        require("../6_PHP/check.php");
    ?>
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
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form.php">Formularz</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Wyniki</a>
        </li>
    </ul>
    <div class="container">

        <form action="get.php" method="get">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">
                        <h5>Dane z formularza:</h5>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Imię:  </label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["name1"]) && $_GET["name1"] != "" ) {
                                    echo $_GET["name1"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nazwisko:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["name2"]) && $_GET["name2"] != "" ) {
                                    echo $_GET["name2"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Hasło:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["passwd"]) && $_GET["passwd"] != "" ) {
                                    echo $_GET["passwd"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3  col-form-label">Prawo jazdy:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["prawkoB"]) || isset($_GET["prawkoT"])) {
                                    echo "kategorie: ";
                                    echo (isset($_GET["prawkoB"])) ? $_GET["prawkoB"]." " : "" ;
                                    echo (isset($_GET["prawkoT"])) ? $_GET["prawkoT"]." " : "" ;
                                    echo "<br />";
                                } else {
                                    echo "-- brak wartości --";
                                } 
                                ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Adres e-mail:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["email"]) && $_GET["email"] != "" ) {
                                    echo $_GET["email"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Numer telefonu:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["phone"]) && $_GET["phone"] != "" ) {
                                    echo $_GET["phone"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Województwo</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["woj"]) && $_GET["woj"] != "" ) {
                                    echo $_GET["woj"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Miasto:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["city"]) && $_GET["city"] != "" ) {
                                    echo $_GET["city"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ulica:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["street"]) && $_GET["street"] != "" ) {
                                    echo $_GET["street"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Numer domu:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["address_number"]) && $_GET["address_number"] != "" ) {
                                    echo $_GET["address_number"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Numer mieszkania:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["address_number2"]) && $_GET["address_number2"] != "" ) {
                                    echo $_GET["address_number2"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kod pocztowy:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["address_code"]) && $_GET["address_code"] != "" ) {
                                    echo $_GET["address_code"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Płeć:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["gender"]) && $_GET["gender"] != "" ) {
                                    echo $_GET["gender"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Data urodzenia:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["birthday"]) && $_GET["birthday"] != "" ) {
                                    echo $_GET["birthday"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Uwagi:</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">
                                <?php if (isset($_GET["extra"]) && $_GET["extra"] != "" ) {
                                    echo $_GET["extra"];
                                } else {
                                    echo "-- brak wartości --";
                                } ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </form>

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