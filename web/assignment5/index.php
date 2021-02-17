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
<?php
require 'db_connect.php';
$db = get_db();

$data = $db->query('SELECT title, author FROM public.boardGame');

function display_data($data) {
  $output = '<table>';
  foreach($data as $key => $var) {
      $output .= '<tr>';
      foreach($var as $k => $v) {
          if ($key === 0) {
              $output .= '<td><strong>' . $k . '</strong></td>';
          } else {
              $output .= '<td>' . $v . '</td>';
          }
      }
      $output .= '</tr>';
  }
  $output .= '</table>';
  echo $output;
}


display_data($data);




/*echo "<table>";

foreach ($db->query('SELECT title, author FROM public.boardGame') as $row)
{  
  echo "<tr><td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
}

echo "</table>";*/


?>
</p>
</main>
</body>

</html>