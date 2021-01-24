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
        $email = test_input($_POST["email"]);
         
        $backgammon = $_SESSION["backgammon"] = array();
        $chess = $_SESSION["chess"] = array();
        $dice = $_SESSION["dice"] = array();
        $ludo = $_SESSION["ludo"] = array();
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
?>


         
</main>
</body>

</html>