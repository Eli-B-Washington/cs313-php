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
<?php
// Set session variables
$prod_id = "hello world";

$_SESSION["cart"] = array();


function addBackgammon(){
array_push($_SESSION["cart"],$prod_id);
}

function addChess(){

}
function addDice(){
    
}
function addLudo(){
    
}

?>
<main>
    <div>
    <img src="img/backgammon.jpg" alt="Backgammon board">
    <p>Price: $20</p>
    <input type="button" name="backgammon" value="Add">
    </div>
    <div>
   <img src="img/chess.jpg" alt="Chess Board">
   <p>Price: $20</p>
   <input type="button" name="chess" value="Add">
    </div>
    <div>
   <img src="img/dice.jpg" alt="Red Dice">
   <p>Price: $5</p>
   <input type="button" name="dice" value="Add">
    </div>
    <div>
   <img src="img/ludo.jpg" alt="Ludo Board">
   <p>Price: $25</p>
   <input type="button" name="ludo" value="Add">
    </div>
</main>
</body>

</html>