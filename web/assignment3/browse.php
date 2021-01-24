<?php
// Start the session
session_start();
?>
<?php
// Set session variables
$prod_id_0 = "backgammon";
$prod_id_1 = "chess";
$prod_id_2 = "dice";
$prod_id_3 = "ludo";

$_SESSION["backgammon"] = array();
$_SESSION["chess"] = array();
$_SESSION["dice"] = array();
$_SESSION["ludo"] = array();


if(isset($_POST['backgammon'])) {
    $_SESSION['backgammon'][] = $prod_id_0;
    echo count(array_keys($_SESSION["backgammon"], $prod_id_0));
}
if(isset($_POST['chess'])) { 
    $_SESSION['chess'][] = $prod_id_1; 
} 
if(isset($_POST['dice'])) { 
    $_SESSION['dice'][] = $prod_id_2; 
} 
if(isset($_POST['ludo'])) { 
    $_SESSION['ludo'][] = $prod_id_3;
} 

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
  <h1>BUY YOUR ITEMS!</h1>
  <nav>
    <ul>
        <li><a href="browse.php">Home</a></li>
        <li><a href="view_cart.php">View Cart</a></li>
    </ul>
</nav>
</header>

<main>
<form id="form1" action="" method="post">
    <div>
    <img src="img/backgammon.jpg" alt="Backgammon board">
    <p>Price: $20</p>
    <input type="submit" name="backgammon" value="Add">
    </div>
    <div>
   <img src="img/chess.jpg" alt="Chess Board">
   <p>Price: $20</p>
   <input type="submit" name="chess" value="Add">
    </div>
    <div>
   <img src="img/dice.jpg" alt="Red Dice">
   <p>Price: $5</p>
   <input type="submit" name="dice" value="Add">
    </div>
    <div>
   <img src="img/ludo.jpg" alt="Ludo Board">
   <p>Price: $25</p>
   <input type="submit" name="ludo" value="Add">
    </div>
    </form>
</main>
</body>

</html>