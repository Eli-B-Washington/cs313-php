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
  <h1>All Games</h1>
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
<p>
<form action="" method="POST">
<?php 
require 'db_connect.php';
$db = get_db();


echo "<table>";
echo "<th>". "" . "</th><th>". "Title" . "</th><th>". "Publisher" . "</th><th>". "Rating"
. "</th><th>" . "Type" . "</th><th>". "Minimum Players" . "</th><th>".
"Maximum Players" . "</th><th>". "Cooperative" . "</th><th>".
"Length" . "</th>";

foreach ($db->query('SELECT title, author, rating, type, playersmin, playersmax, cooperative, length FROM public.boardGame') as $row)
{  
  echo "<tr><td>" . "<input name='checkbox[]' type='checkbox'" . "</td><td>" .
    $row['title'] . "</td><td>" . $row['author'] ."</td><td>"
  . $row['rating'] . "</td><td>" . $row['type'] . "</td><td>"
  . $row['playersmin'] . "</td><td>". $row['playersmax'] . "</td><td>"
  . $row['cooperative'] . "</td><td>" . $row['length'] . "</td></tr>"; 
}

echo "</table>";

?>
<?php

if(isset($_POST['Delete'])){
/*$del_id = $_POST['checkbox']; 
$detectinglocations = 'public.boardGame';

foreach($del_id as $value){
   $query = "DELETE FROM ".$detectinglocations." WHERE id ='".$value."'";
   $stmt = $db->query($query);*/
   echo "Hello";
}
?>


</p>

<input type="submit" value="Delete">
<button type="button">Update</button>
<button id="addButton">Add</button>
</form>
</main>
</script>
</body>

</html>