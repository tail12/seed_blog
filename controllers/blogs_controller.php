<?php
    // フレームワークのM．Cのファイルはクラス化する
    // 命名規則 → リソース名Controller

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
      // URLがblogs/indexであった場合に呼ばれるメソッドで，
      // blogデータの全体を取得し，表示するため処理をするメソッドです．
      public function index(){
        echo 'blogs_controller.phpのindex()メソッドが呼ばれた';
      }
    }

    echo 'blogs_controller.phpが呼ばれました．'
?>
