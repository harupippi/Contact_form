<?php
  require_once'Encode.php'; 
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>お問い合わせフォーム</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>ご回答ありがとうございました。<small>以下の内容で送信いたしました。</small></h1>
    <br />
    <dl>
        <dt>お名前(漢字)：</dt>
        <dd><?php print(e($_POST['name'])); ?></dd>
        <dt>フリガナ(カタカナ)：</dt>
        <dd><?php print(e($_POST['kana'])); ?></dd>
        <dt>性別：</dt>
        <dd><?php print(e($_POST['sex'])); ?></dd>
        <dt>メールアドレス：</dt>
        <dd><?php print(e($_POST['email'])); ?></dd>
        <dt>件名:</dt>
        <dd><?php print(e($_POST['title'])); ?></dd>
        <dt>お問い合わせの内容:</dt>
        <dd><?php print(n12br(e($_POST['memo']))); ?></dd>
    </dl>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
