<?php
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
  <h1>Please Confirm The Items for your Purchase!</h1>
  <i class="fa fa-shopping-cart"></i>
  <nav>
    <ul>
        <li><a href="browse.php">Home</a></li>
        <li><a href="browse.php">Back</a></li>
        <li><a href="checkout.php">Checkout</a></li>
    </ul>
</nav>
</header>
<main>
<?php
// Echo session variables that were set on previous page
print_r($_SESSION['backgammon']);
print_r($_SESSION['chess']);
print_r($_SESSION['dice']);
print_r($_SESSION['ludo']);
?>

<ol>
<li>Backgammon: <?php echo count($_SESSION['backgammon'])?></li>
<li>Chess: <?php echo count($_SESSION['chess'])?></li>
<li>Dice: <?php echo count($_SESSION['dice'])?></li>
<li>Ludo: <?php echo count($_SESSION['ludo'])?></li>
</ol>
</main>
</body>

</html>
