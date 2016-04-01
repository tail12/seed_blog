<!-- 表示したいページによりデザインデータが違う -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>フレームワーク ブログ</title>
  </head>
  <body>
    ヘッダー<br>
    <!-- 各ページに必要なコードをURLを元にrequire -->
    <?php
        include('views/blogs/'. $this->action . '.php');
    ?>
    フッター<br>
  </body>
</html>
