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
    <h1 id='slogan'>Let Us Know About Your Experience</h1><br>
    <form method='post' action='confirmation.php'>
        <input type='text' id='center' name='name' placeholder='Enter Your Name' required><br><br>
        <label id='slogan'>Leave a Rating: </label>
            <select name='rating'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5' selected>5</option>
            </select>
        <br><br>
        <input id='center' type='text' placeholder='Leave a Review'><br><br>
        <input type='submit' id='button' class='btn btn-default' value='Submit'>
    </form>
</body>
<footer>
    <div class='col-12'>
		<hr class='light'>
		<h5 id='slogan'>&copy; chuberrides.com</h5>
	</div>
</footer>
</html>