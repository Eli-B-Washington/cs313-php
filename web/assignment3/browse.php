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
  <h1>BUY YOUR ITEMS!</h1>
  <nav>
    <ul>
        <li><a href="browse.php">Home</a></li>
        <li><a href="view_cart.php">View Cart</a></li>
    </ul>
</nav>
</header>

<main>
<form  action="view_cart.php" method="post">
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