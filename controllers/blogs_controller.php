<?php
    // フレームワークのM．Cのファイルはクラス化する
    // 命名規則 → リソース名Controller

    // 対応するモデルファイルをrequireする
    require('models/blog.php');

    $controller = new BlogsController();
    // アクション名によって，呼び出すメソッドを変える
    switch ($action) {
      case 'index':
        $controller->index();
        break;
      default:
        # code...
        break;
    }



    /**
     *
     */
    class BlogsController{
      // プロパティの登録
      private $resource = '';
      private $action = '';

      // URLがblogs/indexであった場合に呼ばれるメソッドで，
      // blogデータの全体を取得し，表示するため処理をするメソッドです．
      public function index(){
        echo 'blogs_controller.phpのindex()メソッドが呼ばれた<br>';
        // モデルを呼び出す
        $blog = new Blog();
        $blog->index();

        // アクション名を設定
        $this0->action = 'index';

        // 共通レイアウトファイルを呼び出す
        require('views/layout/application.php');
      }
    }

    echo 'blogs_controller.phpが呼ばれました．'
?>
