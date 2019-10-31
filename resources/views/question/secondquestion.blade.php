<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">

　　<!-- BootstrapのCSS読み込み -->
　　<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
　　<!-- jQuery読み込み -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
　　
　　<!--<link rel="stylesheet" href="css/normalize.css">-->
    <!--<link rel="stylesheet" href="css/style.css">-->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
<header>
  <div class="container">
    <div class="alert alert-success" role="alert">
     Q2:好きな色素材は？
    </div>
  </div>
</header>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <form action="{{ action('QuestionController@secondquestion') }}" method="post" enctype="multipart/form-data">
    　<img class="Material" src="{{ asset('image/wood1.jpg') }}" alt="木目"　width="150px" height="200px">
       <div class="checkbox mb-3">
         <label>
           <input id="Material_wood" type="radio" name="Material" value="木目">
           木目
         </label>
       </div>
     <img class="Material" src="{{ asset('image/concrete.jpg') }}" alt="コンクリート"　width="150px" height="200px">
  　   <div class="checkbox mb-3">
         <label>
           <input id="Material_concrete" type="radio" name="Material" value="コンクリート">
           コンクリート
         </label>
      </div>
      <img class="Material" src="{{ asset('image/iron.jpg') }}" alt="アイアン"　width="150px" height="200px">
    　<div class="checkbox mb-3">
         <label>
           <input id="Material_iron" type="radio" name="Material" value="アイアン">
           アイアン
         </label>
      </div>
    </div>
  　</div>
　　<div class="next-page">
　　  <a href="firstquestion" class="btn btn-secondary" >はじめに戻る</a>
　　  {{ csrf_field() }}
　　  <input type="submit" class="btn btn-primary" value="次へ">
　　</div>  
　　 </form>
  </body>
</html>