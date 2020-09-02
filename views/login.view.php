<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/main.css" tyle="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="./js/messanger.js"></script>

    <title>Login panel</title>
</head>
<body style="background-color: #16213e">
<div class="container-fluid">
    <div class="col-md-8 offset-2" style="background-color: azure; min-height: 20vh; margin-top:10vh">
        <div class="row">
            <div class="col-md-6" style="margin-top:2vh; text-align: center;border-right: #1a1a2e solid 1px">
                <h3>Login</h3>
                <form method="POST" action="user/login">
                    <input class="form-control" type="text" name="login" placeholder="login">
                    <input class="form-control" type="password" name="password" placeholder="haslo">
                    <button type="submit" style="margin-top:2vh"class="btn btn-primary">Zaloguj</button>
                </form>
            </div>
            <div class="col-md-6" style="margin-top:2vh;text-align: center">
                <h3>Register</h3>
                <form method="POST" action="user/register">
                    <input class="form-control" type="text" name="login" placeholder="login">
                    <input class="form-control" type="email" name="email" placeholder="email">
                    <input class="form-control" type="password" name="password" placeholder="haslo">
                    <button type="submit" style="margin-top:2vh;margin-bottom: 2vh"class="btn btn-primary">Zarejestruj</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include_once 'templates/messanger.php'?>