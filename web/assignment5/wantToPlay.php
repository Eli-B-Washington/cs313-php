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
  <h1>Want to PLay List</h1>
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
require 'db_connect.php';
$db = get_db();


foreach ($db->query("SELECT title, username FROM public.boardGame, public.wantoplay, public.user WHERE wanttoplay = 't'  ") as $row)
{  echo 'Title: ' . $row['title'];
    echo '   Publisher: ' . $row['author'];
echo '<br/>';
}

?>

</main>
</body>

</html>
</html>