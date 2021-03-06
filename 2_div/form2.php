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
        <div class="code">&lt;div&gt;</div>
        <h1>Form</h1>
        <h2>Dane</h2>

        <form action="../index.php">
            <div class="nadramka_form">
                <div class="ramka_form">
                    Imię:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Nazwisko:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Hasło:</div>
                <div class="ramka_form">
                    <input type="password" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Prawo jazdy:</div>
                <div class="ramka_form">
                    <input type="checkbox" value="1" /> tak
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Numer telefonu:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Województwo:</div>
                <div class="ramka_form">
                    <select>
                        <option>Mazowieckie</option>
                        <option>inne</option>
                        <option>Nevada</option>
                    </select>
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Miasto:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Ulica:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Numer domu:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Kod pocztowy:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Płeć:</div>
                <div class="ramka_form">
                    M
                    <input type="radio" value="1" /> K
                    <input type="radio" value="2" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Data urodzenia:</div>
                <div class="ramka_form">
                    <input type="text" />
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    Uwagi:</div>
                <div class="ramka_form">
                    <textarea name="uwagi" rows="5" cols="10">dziń dybry</textarea>
                </div>
            </div>
            <div class="nadramka_form">
                <div class="ramka_form">
                    <input type="submit" />
                </div>
                <div class="ramka_form">
                    <input type="reset" />
                </div>
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