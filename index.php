<?php include 'database.php'; ?>
<?php
/*
* Get total question number
*/
$query ="SELECT * FROM questions";
//Get results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $result->num_rows;
?>

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
        <h2>Test your knowledge</h2>
        <p>This is multiple choice quiz</p>
        <ul>
          <li><strong>Number of questions: </strong><?php echo $total ?></li>
          <li><strong>Type: </strong>Multiple Choice</li>
          <li><strong>Estimated Time: </strong><?php echo $total*.5 ?> Minutes</li>
        </ul>
        <a href="question.php?n=1" class="start">Start Quiz</a>
      </div>
    </main>
    <footer>
      <div class="container">
        Copyright &copy;
      </div>
    </footer>
  </body>

</html>
