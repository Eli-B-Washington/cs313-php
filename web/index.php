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
        <li><a href="index.html">Home</a></li>
        <li><a href="assignments.html">Assignment Portal</a></li>
        <li><?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?></li>
    </ul>
</nav>
</header>
<main>
   <div>
  <img src="img/me.jpg" alt="Image of Me">
   </div>
   <div>
  <p>Hello my name is Eli Bear and I am close to finishing a degree in Applied Technology (should be finished in July). Pictured with me is my beautiful wife Morgan.  We
      have two daughters, one who is 3 and another who is 1.  In my free time I enjoy playing sports, playing video games, board games, swimming, and most of all just spending time with family.
  </p>
  </div>
</main>
</body>

</html>