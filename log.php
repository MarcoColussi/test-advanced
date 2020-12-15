<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel ="stylesheet" href="stile.css"
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <?php

            $user = $_POST["user"];
            $psw = $_POST["password"];

            if (($user=="user") AND ($psw=="password")){
            echo "<Login Corretto
            <br>
            <a href='path.html'>Vai</a>";
            }
            else{
                echo "Credenziali errate!
                <br>
                <a href='main.php'>Torna al login</a>";
            }
        ?>
    </div>
</body>
</html>