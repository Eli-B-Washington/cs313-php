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
  echo "<tr><td>" . "<input type='checkbox' name='del[]' id='del[]' value='$row[0]'>" . "</td><td>" .
    $row['title'] . "</td><td>" . $row['author'] ."</td><td>"
  . $row['rating'] . "</td><td>" . $row['type'] . "</td><td>"
  . $row['playersmin'] . "</td><td>". $row['playersmax'] . "</td><td>"
  . $row['cooperative'] . "</td><td>" . $row['length'] . "</td></tr>"; 
}

echo "</table>";


if(isset($_POST['delete'])){
$checkbox = $_POST['del'];
    for($i=0;$i<count($checkbox);$i++)
    {
       $id = $checkbox[$i];
       print_r($id);
       $sql1 = "DELETE FROM public.boardgame WHERE title ='$id' ";
       $db->query($sql1);
    }
  }

?>



<input type="submit" name="delete" value="Delete"/>
<button type="button" onclick="location.href='add.php';">Add</button>

<button id="addButton">Update</button>
</form>



</p>


</main>
</script>
</body>

</html>