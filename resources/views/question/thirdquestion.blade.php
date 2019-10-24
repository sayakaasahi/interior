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
     Q3:好きな雰囲気は？
    </div>
  </div>
</header>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <img class="taste" src="{{ asset('image/natural01.jpg') }}" alt="ナチュラル系"　width="150px" height="200px">
       <div class="checkbox mb-3">
         <label>
           <input type="checkbox" value="ナチュラル系">
           ナチュラル系
         </label>
       </div>
      <img class="taste" src="{{ asset('image/hotellike.jpg') }}" alt="ホテルライク系"　width="150px" height="200px">
     <div class="checkbox mb-3">
         <label>
           <input type="checkbox" value="ホテルライク系">
           ホテルライク系
         </label>
       </div>
      <img class="taste" src="{{ asset('image/nordic01.jpg') }}" alt="北欧系"　width="150px" height="200px">
       <div class="checkbox mb-3">
         <label>
           <input type="checkbox" value="北欧系">
           北欧系
         </label>
       </div>
      <img class="taste" src="{{ asset('image/vintage01.jpg') }}" alt="ヴィンテージ系"　width="150px" height="200px">
       <div class="checkbox mb-3">
         <label>
           <input type="checkbox" value="ヴィンテージ系">
           ヴィンテージ系
         </label>
       </div>
  　 </div>
　　</div>
　　<div class="next-page">
　　  <a href="firstquestion" class="btn btn-secondary" >はじめに戻る</a>
　　  <a href="fourthquestion" class="btn btn-primary" >次へ</a>
　　</div> 
  </body>
</html>