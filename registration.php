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
    <a href='index.html'><img id='image' src='photos/logo.jpg'></a>
</nav>
<body class='main-container'><br>
    <h1 id='slogan'>Choose Your Method of Payment</h1>
    <br><br>
    <script src="https://www.paypal.com/sdk/js?client-id=AUswnRdNXdUFuSHavSu1BWHrM0byvoV0rgsFlV6uSLjJSUb4r12LJCor2XECG3qgLG3rIOniUqsv8WGK"> 
    </script>

    <div id="paypal-button-container"></div>

    <!-- Add the checkout buttons, set up the order and approve the order -->
    <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: <?php echo ($_POST['number'] + $_POST['tip'])?>
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + ', thanks for supporting Chuber!');
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
    <br>
    <button type="button" id='button' class='btn btn-default'><a href='ratings.php'><i>Leave a Review</i></a></button>
</body>
<footer>
    <div class='col-12'>
		<hr class='light'>
		<h5 id='slogan'>&copy; chuberrides.com</h5>
	</div>
</footer>
</html>