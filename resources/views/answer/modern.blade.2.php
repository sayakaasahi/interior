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
　　
　　<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/answer.css">
  </head>
  <body>
<header>
  <div class="container">
    <div class="header-title-area">
      <p class="text-sub">あなたの好みのインテリアスタイルは</p>
      <h1 class="logo">モダンスタイル</h1>
    </div>
  </div>
</header>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <img class="style" src="{{ asset('image/modern01.jpg') }}" alt="モダン"　width="250px" height="200px">
      <img class="style" src="{{ asset('image/modern02.jpg') }}" alt="モダン"　width="250px" height="200px">
  　</div>
  　<div class="card-contents">
    　<h5>無駄なものをそぎ落とした洗練されたインテリアスタイル。<br>白・黒・グレーを基調に機能美にあふれたアイテムを用いたスタイルは、ホテルやオフィスといった公共の場だけでなく、今では一般家庭の中でも多く見られます。</h5>
　　</div>
  　 <div class="choice">
  　   <a href="/" class="btn btn-secondary" >はじめに戻る</a>
    　<a href="contact" class="btn btn-outline-danger">お問い合わせ</a>
     </div>
　</div>
</html>