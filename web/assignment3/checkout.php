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
  <h1>Please Review your order</h1>
  <i class="fa fa-shopping-cart"></i>
  <nav>
    <ul>
        <li><a href="browse.php">Home</a></li>
        <li><a href="view_cart.php">Back</a></li>
        <li><a href="confirmation.php">Confirmation</a></li>
    </ul>
</nav>
</header>
<main>
<?php
$name ="";
$address="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Email is required";
  } else {
    $address = test_input($_POST["address"]);
  }
}
?>

<form action="confirmation.php" method="post">
Name: <input type="text" name="name" required><br>
<span class="error">* <?php echo $nameErr;?></span>
Address: <input type="text" name="address"><br>
<span class="error">* <?php echo $addressErr;?></span>
<input type="submit" name="submit" value="Confirm">
</form>
   
</main>
</body>

</html>