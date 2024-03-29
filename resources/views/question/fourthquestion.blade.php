<!DOCTYPE HTML>
<html>
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
     Q4:どんな家具を置きたいですか？
    </div>
  </div>
</header>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <form action="{{ action('QuestionController@fourthquestion') }}" method="post" enctype="multipart/form-data">
      <img class="furniture" src="{{ asset('image/campus_sofa.jpg') }}" alt="キャンパス地のソファー"　width="150px" height="200px">
       <div class="radio mb-3">
         <label>
           <input id="campus_sofa" type="radio" name="Furniture" value="キャンパス地のソファー">
           キャンパス地のソファー
         </label>
       </div>
      <img class="furniture" src="{{ asset('image/leather_sofa.jpg') }}" alt="革張りのソファー"　width="150px" height="200px">
       <div class="radio mb-3">
         <label>
           <input id="leather_sofa" type="radio" name="Furniture" value="革張りのソファー">
           革張りのソファー
         </label>
       </div>
      <img class="furniture" src="{{ asset('image/wood_dining.jpg') }}" alt="木目のダイニングセット"　width="150px" height="200px">
       <div class="radio mb-3">
         <label>
           <input id="wood_dining" type="radio" name="Furniture" value="木目のダイニングセット">
           木目のダイニングセット
         </label>
       </div>
      <img class="furniture" src="{{ asset('image/desiners.jpg') }}" alt="デザイナーズ家具"　width="150px" height="200px">
       <div class="radio mb-3">
         <label>
           <input id="desiners" type="radio" name="Furniture" value="デザイナーズ家具">
           デザイナーズ家具
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