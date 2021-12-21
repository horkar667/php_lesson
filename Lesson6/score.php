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
        if($i == 9) {
          ${"score".$i} = array($_POST[$i], $_POST["s".$i], $_POST["t".$i]);
        } else {
          ${"score".$i} = array($_POST[$i], $_POST["s".$i]);
        }
        $scores[] = ${"score".$i};
      ?>
    <?php endfor ?>
    <div>
      <?php echo Lesson6::getScore($scores); ?>
    </div>
  </body>
</html>