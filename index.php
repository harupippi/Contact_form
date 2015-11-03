<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>お問い合わせフォーム</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<h1>お問い合わせフォーム</h1>
  	<br />
  	お客様からのご質問をお問い合わせフォームにて受け付けております。<br />
  	必要事項をご記入の上、<strong>送信する</strong>を押してください。
  	<form method="POST" action="send.php">
  		<h2>お客様情報</h2>
      <div class="form-group">
  	  	<h3>お名前(漢字)</h3>
  	  	<input type="text" class="form-control" 　id="name" name="name" placeholder="お名前を入力してください"/>
      </div>
      <div class="form-group">
  	  	<h3>フリガナ(カタカナ)</h3>
  	  	<input type="text" class="form-control" id="kana" name="kana"/>
  	  </div>
      	<h3>性別</h3><br />
  	  	<?php 
    $sexes = array('男性','女性','その他');
    foreach($sexes as $sex){
      print('<input type="radio" name="sex" value="'.$sex.'"');
      print(' />');
      print($sex);
    }
    ?>
      <div class="form-group">
  	  	<h3>メールアドレス</h3><br />
  	  	<input type="text" class="form-control" id="email" name="email" placeholder="メールアドレスを入力して下さい。"/>
  	  </div>
      <h2>お問い合わせの内容</h2>
  	  <div class="form-group">
      	<h3>件名</h3><br />
  	  	<input type="text" class="form-control" id="title" name="title"/>
  	  </div>
      <div class="form-group">
      	<h3>ご記入欄</h3><br />
  	  	<textarea class="form_control" rows="5" id="memo"
  		name="memo"></textarea>
      </div><br />

		<input type="submit" value="送信" class="btn btn-default"/>
	</form>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
