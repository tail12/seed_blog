<?php
    // echo 'routes.phpを通りました<br>';

    $params = explode('/', $_GET['url']);
    var_dump($params);
    // 例：$params = explode('/', blogs/index)の場合↓
    // http://192.168.33.11/seed_blog/blogs/index というリクエストが来た場合
    // http://192.168.33.10/seed_blog/routes.php?url=blogs/index として処理する
    // $_GETの中身
    // $_GET['url']='blogs/index';
    // $params = array['blogs', 'index']; ← $_GET['url']をexplodeすると，
    // $params配列が完成する．

    // パラメータの分解
    $resource = $params[0]; // 上記リクエストの場合はblogが格納される
    $action = $params[1];   //
    $id = 0;

    // オプションになにか入っていれば…
    if (isset($params[2])) {
      // controllerのshow($id)の$idになる．
      // そこから，modelsの中のblogにあるshowの引数になる
      $id = $params[2];
    }

    // コントローラの呼び出し
    // 作成した変数を文字列連結させ，require()を使って，必要なコントローラーファイルを呼び出す
    // echo 'controllers/' . $resource . '_controller.php<br>';
    require('controllers/'. $resource . '_controller.php');

?>
