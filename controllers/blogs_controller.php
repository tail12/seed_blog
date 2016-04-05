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
      case 'show':
        $controller->show($id);
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
      private $viewOptions = ''; // viewに送りたいデータを保持するプロパティ

      // URLがblogs/indexであった場合に呼ばれるメソッドで，
      // blogデータの全体を取得し，表示するため処理をするメソッドです．
      public function index(){
        // echo 'blogs_controller.phpのindex()メソッドが呼ばれた<br>';
        // モデルを呼び出す
        $blog = new Blog();
        $this->viewOptions = $blog->index(); // 返り値をrtn返します

        // foreach ($this->viewOptions as $viewOption) {
        //   echo  $viewOption['id']. ':'.
        //         $viewOption['title']. ':'.
        //         $viewOption['created'].'<br>';
        // }

        // アクション名を設定
        $this->action = 'index';

        // 共通レイアウトファイルを呼び出す
        require('views/layout/application.php');
      }

      public function show($id){
        $blog = new Blog();
        // URLのップションに指定したidのデータ一件が格納される．
        $this->viewOption = $blog->show($id);

        $this->action = 'show';

        include('views/layout/application.php');
      }
    }

    // echo 'blogs_controller.phpが呼ばれました．'
?>
