<?php
require 'db_connect.php';
$db = get_db();

$output = '';
if(isset($POST['search'])){
  $searchq = $_POST['search'];
  $searchq = preg_replace('#[^0-9a-z]#i', "", $searchq);

  $query = mysql_query("SELECT * FROM public.boardGame WHERE title LIKE '%$searchq$%' ") or die("could not search database");
  $count = mysql_num_rows($query);
  if ($count == 0){
   $output = 'There was no search results!';
  }
  else{
  }
  while($row = mysql_fetch_array($query)){
    $title = $row['title'];

    $output = $title;
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
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
  <form action="search.php" method="post">
  <input type="text" name= "search" placeholder="Search for Members">
  <input type="submit" value=">>">
  </form>

  <?php
  print($output);
  ?>
</main>
</body>

</html>