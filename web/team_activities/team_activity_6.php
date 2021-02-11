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

<form method="POST">
Book: <input type="text" name="book">
<br/>
Chaper: <input type="text" name="chapter">
<br/>
Verse: <input type="text" name="verse">
<br/>
Content: <input type="textarea" name="content">
<br/>
<?php

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}











?>

<input type="submit">
</form>

    </ul>
</main>
</body>

</html>