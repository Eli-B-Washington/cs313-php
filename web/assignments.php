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
    <img src="img/monitor.jpg" alt="Picture of two Monitors"></h2>
    <ul>
      <li>Week 1: <a href="hello.html">Prove 1</a></li>
      <li>Week 2: <a href="index.php">Prove 2 - HomePage</a></li>
      <li>Week 2: <a href="#">Prove 2 - Project Proposal</a></li>
      <li>Week 3: <a href="assignment3/browse.php">Prove 3 -Shopping Cart</a></li>
      <li>Week 4: <a href="#">Prove 4 - DB Setup</a></li>
      <li>Week 5: <a href="assignment5/browse.php">05 Prove: Assignment - DB Access</a></li>
      <li>Week 6: <a href="#">06 Prove : Assignment - DB Update</a></li>
      <li>Week 7: <a href="#">07 Prove: Assignment - Project 1</a></li>
      <li>Week 8: <a href="#">08 Prove: Assignment - Hello World</a></li>
      <li>Week 9: <a href="#">09 Prove: Project 2 Proposal</a></li>
      <li>Week 9: <a href="#">09 Prove: Assignment - Postal Rate Calculator</a></li>
      <li>Week 10: <a href="#">10 Prove: Assignment - Milestone 1</a></li>
      <li>Week 11: <a href="#">11 Prove: Assignment - Milestone 2</a></li>
      <li>Week 12: <a href="#">12 Prove: Assignment - Milestone 3</a></li>
      <li>Week 14: <a href="#">14 Prove: Project 2</a></li>
    </ul>
</main>
</body>

</html>