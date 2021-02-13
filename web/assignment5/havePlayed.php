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
  <h1>Have Played List</h1>
  <nav>
    <ul>
        <li><a href="index.php">All Games</a></li>
        <li><a href="wantToPlay.php">Want to Play List</a></li>
        <li><a href="havePlayed.php">Have Played List</a></li>
        <li><a href="search.php">Search Games</a></li>
        <li><a href="add.php">Add Games</a></li>
    </ul>
</nav>
</header>
<main>
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


foreach ($db->query('SELECT title, author FROM public.boardGame') as $row)
{  echo 'Title: ' . $row['title'];
    echo 'Publisher: ' . $row['author'];
echo '<br/>';
}
echo  $db->prepare('SELECT * FROM public.boardGame ');
?>
</main>
</body>

</html>