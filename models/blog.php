<?php
    // M.Cファイルはクラス化する必要がある
    // 命名規則はリソース名(テーブル名)の単数形
    // 頭文字は大文字
    class Blog{
      // プロパティ
      private $dbconnect = '';

      // コンストラクタ
      public function __construct(){
        // db接続ファイルの読み込み
        require('dbconnect.php');
        $this->dbconnect = $db;
      }

      public function index(){
        // index()はデータ(リソース)の一覧を取得し表示するためのメソッド
        echo "モデルファイルblog.phpのindex()メソッドが呼ばれました．<br>";
        $sql = 'SELECT * FROM `blogs`';
        $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

        while ($result = mysqli_fetch_assoc($results)) {
          echo $result['id'] . ':' . $result['title'] . ':' . $result['create'] . '<br>';
        }
      }
    }

?>
