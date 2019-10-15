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
  <div class="center">
  　<h1 class="logo">好みのスタイルでQUMAに相談する</h1>
  </div>
</header>
  <div class="main">
  　<div class="container">
    　<form action="confirm.php" method="post" name="Form1">
    　  <label>お好みのスタイル</label>
    　  <select class="form-control form-control-lg" >
  　　 　　<option>カントリースタイル</option>
  　　 　　<option>ナチュラルスタイル</option>
  　　 　　<option>北欧スタイル</option>
　　　　<option>モダンスタイル</option>
　　　　<option>ヴィンテージスタイル</option>
　　　　<option>シンプルスタイル</option>
　　　　<option>ブルックリンスタイル</option>>
 　　 　　　<option>スタイルを選ばない</option>on>
　　　 </select>
        <div class="form-group">
          <label>■お名前■　<span class="label label-danger">※必須</span></label>
          <input type="text" class="form-control" placeholder="リノベ太郎" name="name" required>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label>■メールアドレス■　<span class="label label-danger">※必須</span></label>
          <input type="email" class="form-control" placeholder="xxxxxx@yahoo.co.jp" name="email" required>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label>■住所■(可能な範囲で結構です)</label>
          <input type="text" class="form-control" placeholder="○○県△△市□□町xxxx-yy-z" name="address">
        </div>
        <div class="form-group">
          <label>■電話番号■</label>
          <input type="text" class="form-control" placeholder="xxx-yyyy-zzzz" name="phone">
        </div>
          <label>■件名■</label><br>
          <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxA" onClick="changeDisabled()"> リノベーションプランの相談がしたい
          </label>
          <label class="radio-inline">
            <input type="radio" name="subjectR" value="checkboxB" onClick="changeDisabled()"> 物件探しから相談したい
            </label>
          <label class="radio-inline">
            <input type="radio" name="subjectR" value="others" onClick="changeDisabled()"> その他(下記の件名にご記入ください)
          </label>
        <div class="form-group" style="margin-top:10px;">
          <input type="text" class="form-control" placeholder="〇〇について" name="subject" onClick="changeDisabled()">
        </div>
        <div class="form-group">
          <label>■お問い合わせ内容■　<span class="label label-danger">※必須</span></label>
          <textarea placeholder="お問い合わせ内容" rows="10" class="form-control" name="main" required></textarea>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
　　　　　<div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="form-item">
      <input type="checkbox" name="agree" id="agree-check" />利用規約に同意する<a href="privacy.html" target="_blank">『利用規約』</a>
    </div>
    <button type="submit" class="btn btn-warning btn-lg btn-block">送信</button>
      </form>
  　</div>
　</div>
</html>