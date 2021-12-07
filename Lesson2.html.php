<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <div class="main">
      <div class="contact-form">
        <div class="form-title">お問い合わせ</div>
        <form method="post" action="Lesson2_sent.php">
          <div class="form-item">名前</div>
          <input type="text" name="name">
    
          <div class="form-item">年齢</div>
          <select name="age">
            <option value="未選択">選択してくただい</option>
            <?php
              for($i = 6; $i <= 1000; $i++){
                echo "<option value='{$i}'>{$i}</option>";
              }
            ?>
          </select>
    
          <div class="form-item">好きな食べ物</div>
          <?php
            $types = array('カレー', 'ラーメン', 'お寿司', 'ピザ', '焼肉');
          ?>
          <select name="category">
            <option value="未選択">選択してください</option>
            <?php
              foreach($types as $type) {
                echo "<option value='{$type}'>{$type}</option>";
              }
            ?>
          </select>
    
          <div class="form-item">内容</div>
          <textarea name="body"></textarea>
        </form>
      </div>
    </div>
  </body>
</html>