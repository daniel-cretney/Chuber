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
    <h7 id='slogan'><i>(If you don't get a phone call back within the first ten minutes assume driver is busy)</i></h7><br><br>
    <h1 id='slogan'>Request a Ride</h1><br>
    <form method='post' action='contact.php'>
        <input type='text' name='name' id='center' size='30' placeholder='Enter Your Full Name' required><br><br>
        <input type='tel' name='tel' id='center' size='30' placeholder='Enter Your Phone Number' required><br><br>
        <input type='email' name='email' id='center' size='30' placeholder='Enter Your Email' required><br><br>
        <input type='text' name='pickup' id='center' size='30' placeholder='Enter Pickup Zone' required><br><br>
        <input type='text' name='destination' id='center' size='30' placeholder='Enter Destination' required><br><br>
        <input type='number' name='passengers' id='center' size='30' min='1' placeholder='# of Passengers' required><br><br>
        <input type='submit' id='button' class='btn btn-default' value='Submit'>
    </form>
</body>
</html>