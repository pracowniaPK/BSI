<!doctype html>
<html lang="en">

<head>
    <?php
        require("../6_PHP/check.php");
    ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

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
            <a class="nav-link disabled" href="#">Dane</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">     
                <div class="form-group row"><label class="col-sm-12 col-form-label">           
                <?php
                // getting credentials for DB login
                require("credentials.php");
                // connecting to DB
                $con =  new mysqli("$db_host", "$db_username", "$db_pass", "$db_name");
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                } 

                // check if there is update or new user
                // new user
                if (isset($_POST["new"])){
                    $sql = 'INSERT INTO users (name1, name2) VALUES ("'.$_POST["name1"].'", "'.$_POST["name2"].'")';
                    if ($con->query($sql) === TRUE) {
                        echo "new user created successfully";
                    } else {
                        echo "error: " . $sql . "<br>" . $con->error;
                    }
                } elseif (isset($_POST["action"])) {
                    // editing user
                    if($_POST["action"] == "edit"){
                        print "changing user no. ".$_POST["id"]." action: ".$_POST["action"]."<br/>";
                        $sql = 'UPDATE users SET name1="'.$_POST["name1"].'", name2="'.$_POST["name2"].'" WHERE id='.$_POST["id"];
                        // print "<br/>".$sql."<br/>";
                        if ($con->query($sql) === TRUE) {
                            echo "user updated successfully";
                        } else {
                            echo "error updating user: " . $con->error;
                        }
                    // deleting user
                    } elseif ($_POST["action"] == "delete") {
                        print "deleting user no. ".$_POST["id"]." action: ".$_POST["action"]."<br/>";
                        $sql = 'DELETE FROM users WHERE id='.$_POST["id"];
                        if ($con->query($sql) === TRUE) {
                            echo "user deleted successfully";
                        } else {
                            echo "error deleting record: " . $con->error;
                        }
                    }elseif ($_POST["action"] == "set_edit"){
                        echo "making ".$_POST["id"]." editable";
                    }
                } else {
                    print "nothing to report";
                }
                echo "</label></div>";

                // getting users list from DB
                $sql = "SELECT * FROM users";
                $result = $con->query($sql);

                // printing list of users
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if (isset($_POST["action"]) && $_POST["action"] == "set_edit" && $row["id"] == $_POST["id"]){
                            echo '
                                <form action="" method="post">
                                    <input type="hidden" value='.$row["id"].' name="id" />
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <input value="'.$row["name1"].'" class="form-control" id="name1" name="name1" type="text" />
                                        </div>
                                        <div class="col-sm-5">
                                            <input value="'.$row["name2"].'" class="form-control" id="name2" name="name2" type="text" />
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="btn-group" role="group">
                                                <button type="submit" name="action" value="edit" class="btn btn-light"><div style="color: #555555"><i class="fas fa-check"></i></div></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            ';
                        } else {
                            echo '
                                <form action="" method="post">
                                    <input type="hidden" value='.$row["id"].' name="id" />
                                    <div class="form-group row">
                                        <label class="col-sm-10 col-form-label">'.$row["name1"].'  '.$row["name2"].'</label>
                                        <div class="col-sm-2">
                                            <div class="btn-group" role="group">
                                                <button type="submit" name="action" value="set_edit" class="btn btn-light"><div style="color: #555555"><i class="fas fa-edit"></i></div></button>
                                                <button type="submit" name="action" value="delete" class="btn btn-light"><div style="color: #555555"><i class="fas fa-trash"></i></div></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                ';
                        }
                    }
                } else {
                    echo "0 results";
                }

                ?>
                <form action="" method="post">
                    <input type="hidden" value=true name="new" />
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <input placeholder="Imię" class="form-control" id="name1" name="name1" type="text" />
                        </div>
                        <div class="col-sm-5">
                            <input placeholder="Nazwisko" class="form-control" id="name2" name="name2" type="text" />
                        </div>
                        <div class="col-sm-2">
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-light"><div style="color: #555555"><i class="fas fa-check"></i></div></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
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