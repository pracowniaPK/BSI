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
            <a class="nav-link disabled" href="#">Formularz</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="users_form.php">Dane</a>
        </li>
    </ul>
    <div class="container">

        <form action="get.php" method="get">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Imię:</label>
                        <div class="col-sm-9">
                            <input placeholder="Imię" class="form-control" id="name1" name="name1" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nazwisko:</label>
                        <div class="col-sm-9">
                            <input placeholder="Nazwisko" class="form-control" id="name2" name="name2" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Hasło:</label>
                        <div class="col-sm-9">
                            <input placeholder="Hasło" class="form-control" name="passwd" type="password" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3  col-form-label">Prawo jazdy:</label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="prawkoB" value="B">
                                <label class="form-check-label" >
                                    kategoria B
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"  name="prawkoT" value="T">
                                <label class="form-check-label">
                                    kategoria T
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Adres e-mail:</label>
                        <div class="col-sm-9">
                            <input placeholder="user@example.com" class="form-control" name="email" id="email" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Numer telefonu:</label>
                        <div class="col-sm-9">
                            <input placeholder="123456789" class="form-control" name="phone" id="phone" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Województwo</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="woj">
                                <option selected>Mazowieckie</option>
                                <option>Dolnośląskie</option>
                                <option>Kujawsko-pomorskie</option>
                                <option>Lubelskie</option>
                                <option>Lubuskie</option>
                                <option>Łódzkie</option>
                                <option>Małopolskie</option>
                                <option>Opolskie</option>
                                <option>Podkarpackie</option>
                                <option>Podlaskie</option>
                                <option>Pomorskie</option>
                                <option>Śląskie</option>
                                <option>Świętokrzyskie</option>
                                <option>Warmińsko-mazurskie</option>
                                <option>Wielkopolskie</option>
                                <option>Zachodniopomorskie</option>
                                <option>inne</option>
                                <option>Nevada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Miasto:</label>
                        <div class="col-sm-9">
                            <input placeholder="Miasto" class="form-control" name="city" id="city" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ulica:</label>
                        <div class="col-sm-9">
                            <input placeholder="Ulica" class="form-control" name="street" id="street" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Numer domu:</label>
                        <div class="col-sm-9">
                            <input placeholder="12" class="form-control" name="address_number" id="address_number" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Numer mieszkania:</label>
                        <div class="col-sm-9">
                            <input placeholder="21" class="form-control" name="address_number2" id="address_number2" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kod pocztowy:</label>
                        <div class="col-sm-9">
                            <input placeholder="00-000" class="form-control" name="address_code" id="address_code" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Płeć:</label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="mężczyzna" checked>
                                <label class="form-check-label">
                                    Mężczyzna
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="kobieta">
                                <label class="form-check-label">
                                    Kobieta
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Data urodzenia:</label>
                        <div class="col-sm-9">
                            <input placeholder="dd-mm-yyy" class="form-control" name="birthday" id="birthday" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Uwagi:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" name="extra"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-light">Prześlij</button>
                                <button type="button" class="btn btn-light">Naciśnij</button>
                                <button type="reset" class="btn btn-light">Resetuj</button>
                            </div>
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