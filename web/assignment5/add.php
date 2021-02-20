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

  <label for="author">Publisher:</label><br>
  <input type="text" id="author" name="author"><br>

  <label for="rating">Rating:</label><br>
  <input type="number" step="0.1" id="rating" name="rating"><br>

  <label for="type">Type:</label><br>
  <input type="number" step="0.1" id="type" name="type"><br>

  <label for="playersmin">Minimum Players: </label><br>
  <input type="number" id="playersmin" name="playersmin"><br>

  <label for="playersmax">Maximum Players:</label><br>
  <input type="text" id="playersmax" name="playersmax"><br>

  
  <label for="cooperative">Cooperative (y/n):</label><br>
  <input type="text" id="cooperative" name="cooperative"><br>

  <label for="length">Length (Min):</label><br>
  <input type="number" id="length" name="length">

  <input type="submit" name="submit" value="Submit me!" />
</form>

<?php
/*
values from the table

id SERIAL NOT NULL PRIMARY KEY,
title VARCHAR(100) NOT NULL,
author VARCHAR(100) NOT NULL,
rating FLOAT(3) NOT NULL,
type VARCHAR(100) NOT NULL,
playersMin SMALLINT NOT NULL,
playersMax SMALLINT NOT NULL,
cooperative BOOLEAN NOT NULL,
length int*/


require 'db_connect.php';
$db = get_db();


if($_SERVER['REQUEST_METHOD'] == ('POST')) {
$title = $_POST['title'];
$author = $_POST['author'];
$rating = $_POST['rating'];
$type = $_POST['type'];
$playersmin = $_POST['playersmin'];
$playersmax = $_POST['playersmax'];
$cooperative = $_POST['cooperative'];
$length = $_POST['length'];
echo $title . $author . $rating . $type . $playersMin . $playersMax . $cooperative . $length;



if(!empty($_POST['title' or 'author' or 'rating' or 'type' or 'playersmin' or 'playersmax' or 'cooperative' or 'length'])){

  try{
$query = 'INSERT INTO public.boardgame(title, author, rating, type, playersmin, playersmax, cooperative, length) VALUES (:title, :author, :rating, :type, :playersmin, :playersmax, :cooperative, :length)';
    $stmt = $db->prepare($query);
    $stmt -> bindValue(":title", $title);
    $stmt -> bindValue(":author", $author);
    $stmt -> bindValue(":rating", $rating);
    $stmt -> bindValue(":type", $type);
    $stmt -> bindValue(":playersmin", $playersmin);
    $stmt -> bindValue(":playersmax", $playersmax);  
    $stmt -> bindValue(":cooperative", $cooperative);
    $stmt -> bindValue(":length", $length);
    $stmt -> execute();
    $newid = $pdo ->lastInsertId("public.boardGame_id_seq");
  }
  catch(Exception $ex){
    echo "Error with DB. Details: $ex";
    die();
  }
}
}
?>
</main>
</body>

</html>