<?php session_start(); ?>
<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8" />
  <title>PHP Quiz</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    <header>
      <div class="container">
        <h1>PHP Quiz</h1>
      </div>
    </header>
    <main>
      <div class="container">
        <h2> You're done!</h2>
        <p> You have completed the test</p>
        <p> Final Score: <?php echo $_SESSION['score']; ?></p>
        <a href="question.php?n=1" class="start">Try Again</a>
      </div>
    </main>
    <footer>
      <div class="container">
        Copyright &copy;
      </div>
    </footer>
  </body>

</html>
