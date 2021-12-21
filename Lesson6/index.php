<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ボーリングスコア</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=pacifico|lato' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div>
      <form method="post" action="score.php">
        <?php for($i = 0; $i < 10; $i++): ?>
          <?php if($i == 9): ?>
            <input type="text" value="5" name="<?php echo $i ?>">
            <input type="text" value="0" name="<?php echo "s".$i ?>">
            <input type="text" value="3" name="<?php echo "t".$i ?>">
          <?php else: ?>
            <input type="text" value="5" name="<?php echo $i ?>">
            <input type="text" value="0" name="<?php echo "s".$i ?>">
          <?php endif ?>
        <?php endfor ?>
        <input type="submit" value="送信">
      </form>
    </div>
  </body>
</html>