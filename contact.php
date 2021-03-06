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
    <?php 
    $message = "Name: " . $_POST['name'] . ", Phone Number: " . $_POST['tel'] . ", Pickup Location: " . $_POST['pickup'] 
    . ", Destination: " . $_POST['destination'];
    $sendMail = mail("chubersml@gmail.com", "Chuber Rides Request From " . $_POST['name'], $message, "From: " . $_POST['email']);    
    if ($sendMail){
        ?><h1 id='slogan'><?php echo "Request Sent Successfully";?></h1><br><br>
        <button type="button" id='button' class='btn btn-default'><a href='index.html'><i>Home Page</i></a></button><?php
    }
    else {
        ?><h1 id='slogan'><?php echo "Request Failed, Try Again";?></h1><br><br>
        <button type="button" id='button' class='btn btn-default'><a href='request.php'><i>Request Page</i></a></button>
        <button type="button" id='button' class='btn btn-default'><a href='index.html'><i>Home Page</i></a></button><?php
        }
    ?>
</body>
<footer>
    <div class='col-12'>
		<hr class='light'>
		<h5 id='slogan'>&copy; chuberrides.com</h5>
	</div>
</footer>
</html>