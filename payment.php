<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Chuber</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='icon' href='photos/favicon.png' type='image/x-icon'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<nav>
    <a href='index.html'><img id='image'src='photos/logo.jpg'></a>
</nav>
<body class='main-container'><br>
    <h1 id='slogan'>Gettin' you where you need to be.</h1>
    <label id='slogan'><i>*Note: Pay After the Service Has Been Provided*</i></label><br><br>
    <form method='post' action='registration.php'>
        <label id='slogan'>How long was your ride in minutes?</label><br>
        <input type='number' name='number' min='1' id='center' placeholder='$1/min' required><br><br>
        <label id='slogan'>Do you wish to tip your driver?</label><br>
        <input type='number' name='tip' min='0' id='center' value='0'><br><br>
        <input type='submit' id='button' class='btn btn-default' value='Submit'>
    </form>
</body>
</html>