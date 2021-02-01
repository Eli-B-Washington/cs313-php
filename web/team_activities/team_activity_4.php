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
  <h1>Introduction</h1>
  <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="assignments.php">Assignment Portal</a></li>
        <li><?php
echo "Today is " . date("m/d/Y") . "<br>";
?></li>
    </ul>
</nav>
</header>
<main>
    <h2>Assignment Links <br>
<?php
try
{
  $user = 'postgres';
  $password = 'password';
  $db = new PDO('pgsql:host=localhost;dbname=myTestDB', $user, $password);

  // this line makes PDO give us an exception when there are problems,
  // and can be very helpful in debugging! (But you would likely want
  // to disable it for production environments.)
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>

    </ul>
</main>
</body>

</html>