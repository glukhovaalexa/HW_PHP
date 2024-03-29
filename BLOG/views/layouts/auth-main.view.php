<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <ul class="navbar-nav mr-auto">
            <li class="navbar-item">
                <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']?>">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
                <a class="navbar-brand" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']). '?action=auth/login' ?>">Login</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-brand" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']). '?action=auth/signup' ?>">Register</a>
            </li>
        </ul>

        </div>
    </nav>
    <div class="container">
        {{content}}
    </div>

</body>

</html>