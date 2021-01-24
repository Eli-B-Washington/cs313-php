<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction Page</title>
    <meta name="description" content="A page that displays hello world">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<header>
  <h1>Please Confirm</h1>
  <i class="fa fa-shopping-cart"></i>
  <nav>
    <ul>
        <li><a href="browse.php">Home</a></li>
        <li><a href="checkout.php">Back</a></li>
    </ul>
</nav>
</header>
<main>
   <?php 
        $name = test_input($_POST["name"]);
        $address = test_input($_POST["email"]);
         
        $backgammon = $_SESSION["backgammon"];
        $chess = $_SESSION["chess"];
        $dice = $_SESSION["dice"];
        $ludo = $_SESSION["ludo"];

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
?>

<form  action="view_cart.php" method="post">
<h2>Please Review</h2>
<p>Name: <?=$name ?></p>
<p>Address: <?=$address ?></p>
<p>backgammon: <?php echo count($_SESSION['backgammon'])?></p>
<p>chess: <?php echo count($_SESSION['chess'])?></p>
<p>dice: <?php echo count($_SESSION['dice'])?></p>
<p>ludo: <?php echo count($_SESSION['ludo'])?></p>
</form>


         
</main>
</body>

</html>