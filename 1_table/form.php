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
        <div class="code">&lt;table&gt;</div>
        <h1>Form</h1>
        <h2>Dane</h2>

        <form action="../index.php">
            <table class="forma">
                <tr>
                    <td>Imię:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Nazwisko:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Hasło:</td>
                    <td>
                        <input type="password" />
                    </td>
                </tr>
                <tr>
                    <td>Prawo jazdy:</td>
                    <td>
                        <input type="checkbox" value="1" /> tak
                    </td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Województwo:</td>
                    <td>
                        <select>
                            <option>Mazowieckie</option>
                            <option>inne</option>
                            <option>Nevada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Miasto:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Ulica:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Numer domu:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Kod pocztowy:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Płeć:</td>
                    <td>
                        M
                        <input type="radio" value="1" /> K
                        <input type="radio" value="2" />
                    </td>
                </tr>
                <tr>
                    <td>Data urodzenia:</td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>Uwagi:</td>
                    <td>
                        <textarea name="uwagi" rows="5" cols="10">good moaning</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" />
                    </td>
                    <td>

                        <input type="reset" />
                    </td>
                </tr>
            </table>
        </form>
        <p>
            <a href="http://validator.w3.org/check?uri=referer">
                <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
            </a>
        </p>

    </div>
</body>

</html>