<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php
        require("../6_PHP/check.php");
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BSI</title>
    <link rel="stylesheet prefetch" href="https://meyerweb.com/eric/tools/css/reset/reset.css" />
    <link rel="stylesheet" href="../styl.css" />
</head>

<body>
    <div class="ramka">
        <div class="ramka_linki">
            <a class="menu" href="../index.php">powrót: Główna</a>
        </div>
        <h1>Kalkulator</h1>
        <form name="kalkulator" style="text-align:center">
            <div class="tabela calculator" style="display: inline-block;">
                <input name="wyswietlacz" placeholder="0" class="guzik szeroki4" />
                <div onclick="document.kalkulator.wyswietlacz.value = eval(document.kalkulator.wyswietlacz.value)" class="guzik">=</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='1'" class="guzik">1</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='2'" class="guzik">2</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='3'" class="guzik">3</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='+'" class="guzik">+</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='4'" class="guzik">4</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='5'" class="guzik">5</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='6'" class="guzik">6</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='-'" class="guzik">-</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='7'" class="guzik">7</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='8'" class="guzik">8</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='9'" class="guzik">9</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='*'" class="guzik">*</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='0'" class="guzik">0</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='.'" class="guzik">.</div>
                <div onclick="document.kalkulator.wyswietlacz.value =''" class="guzik">C</div>
                <div onclick="document.kalkulator.wyswietlacz.value +='/'" class="guzik">/</div>
            </div>
        </form>

        <p>
            <a href="http://validator.w3.org/check?uri=referer">
                <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
            </a>
        </p>
    </div>
</body>

</html>