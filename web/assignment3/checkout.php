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
  <h1>Please Review your order</h1>
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
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<h2>Review</h2>
<form method="post" action="confirmation.php">  
  Name: <input type="text" name="name" required><br>
  Address: <input type="text" name="email" required>
  <br><br>
  <input type="submit" name="submit" value="Confirmation">

  <br><br>
  
</form>
   
</main>
</body>

</html>