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
<form action="" method="post">
  <label for="title">Board Game Name:</label><br>
  <input type="text" id="title" name="title"><br>

  <label for="publisher">Publisher:</label><br>
  <input type="text" id="publisher" name="publisher"><br>

  <label for="rating">Rating:</label><br>
  <input type="number" step="0.1" id="rating" name="rating"><br>

  <label for="type">Type:</label><br>
  <input type="number" step="0.1" id="type" name="type"><br>

  <label for="playersMin">Minimum Players: </label><br>
  <input type="number" id="playersMin" name="playersMin"><br>

  <label for="playersMax">Maximum Players:</label><br>
  <input type="text" id="playersMax" name="playersMax"><br>

  
  <label for="cooperative">Cooperative (y/n):</label><br>
  <input type="text" id="cooperative" name="cooperative"><br>

  <label for="length">Length (Min):</label><br>
  <input type="number" id="length" name="length">

  <input type="submit" name="submit" value="Submit me!" />
</form>

<?php
if(isset($_POST['submit'])) {
$title = $_POST['title'];
$publisher = $_POST['publisher'];
$rating = $_POST['rating'];
$type = $_POST['type'];
$playersMin = $_POST['playersMin'];
$playersMax = $_POST['playersMax'];
$cooperative = $_POST['cooperative'];
$length = $_POST['length'];
echo $title . $publisher . $rating . $type . $playersMin . $playersMax . $cooperative . $length;
}

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


$query = 'INSERT INTO public.boardgame(title, author, rating, type, playersmin, playersmax, cooperative, length) VALUES (:title, :author, :rating, :type, :playersmin, :playersmax, :cooperative, :length)';

    $stmt = $db->prepare($query);
    $stmt -> bindValue(":title", $title);
    $stmt -> bindValue(":author", $publisher);
    $stmt -> bindValue(":rating", $rating);
    $stmt -> bindValue(":type", $type);
    $stmt -> bindValue(":playersmin", $playersMin);
    $stmt -> bindValue(":playersMax", $playersMax);  
    $stmt -> bindValue(":cooperative", $cooperative);
    $stmt -> bindValue(":length", $length);
    $stmt -> execute();

    $newid = $PDO ->lastInsertId("public.boardGame_id_seq");
?>
</main>
</body>

</html>