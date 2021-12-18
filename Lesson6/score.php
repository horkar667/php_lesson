<?php require_once('Lesson6.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ボーリングスコア</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=pacifico|lato' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <?php for($i = 0; $i < 10; $i++): ?>
      <?php
        $score = array($_POST[$i], $_POST[$i."s"]);
        $scores[] = $score.$i[0];
      ?>
    <?php endfor ?>
    <div>
      <!-- < echo Lesson6::getScore($scores); ?> -->
      <?php echo $score ?>
    </div>
  </body>
</html>