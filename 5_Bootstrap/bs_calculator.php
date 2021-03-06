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
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="../index.php">powrót: Główna</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bs_index.php">Tekst</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bs_gallery.php">Galeria</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bs_form.php">Formularz</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Kalkulator</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <button type="button" onClick="onoff()" class="btn btn-outline-light btn-block" id="guzik">ON/OFF</button>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <div class="row" id="calculator">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form name="kalkulator">
                    <div class="row row_buffer">
                        <div class="col-sm-9">
                            <input name="wyswietlacz" placeholder="0" class="form-control" id="target" />
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val(eval($('#target').val()))">=</button>
                        </div>
                    </div>
                    <div class="row row_buffer">
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '1')" class="guzik">1</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '2')" class="guzik">2</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '3')" class="guzik">3</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '+')" class="guzik">+</button>
                        </div>
                    </div>
                    <div class="row row_buffer">
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '4')" class="guzik">4</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '5')" class="guzik">5</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '6')" class="guzik">6</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '-')" class="guzik">-</button>
                        </div>
                    </div>
                    <div class="row row_buffer">
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '7')" class="guzik">7</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '8')" class="guzik">8</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '9')" class="guzik">9</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '*')" class="guzik">*</button>
                        </div>
                    </div>
                    <div class="row row_buffer">
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '0')" class="guzik">0</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '.')" class="guzik">.</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val('')" class="guzik">C</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-outline-light btn-block" onclick="$('#target').val($('#target').val() + '/')" class="guzik">/</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script>
        let on = false;

        $('#calculator').css({
            // transform: 'translateX(-1000px)'
            transform: 'translate(-2000px,0)'
        });

        function onoff() {
            if (on) {
                Posun(0, -1200);
                on = false;
            }
            else {
                Posun(-1200, 0);
                on = true;
            }
        }

        function Posun(x1, x2) {
            $({ x: x1 }).animate({ x: x2 }, {
                duration: 2000,
                step: function (now) {
                    $('#calculator').css({ transform: 'translate(' + now + 'px, ' + (- now / 4) + 'px) rotate(' + -now / 8 + 'deg )' });
                }
            });
        }
    </script>
</body>

</html>