<?php
  require_once'Encode.php'; 

  /*$errors = array();
  foreach ($_POST as $key => $value) {
      if (is_array($value)) {
          $value = implode('', $value);
      }
      if (!mb_check_encoding($value)) {
          $errors[] = '文字コードに誤りがあります。';
        break;
      }
  }*/
  if (trim($_POST['name']) === '') {
      $errors[] = 'お名前は必ず入力してください。';
  }
  if (mb_strlen($_POST['name']) > 50) {
      $errors[] = 'お名前は50文字以内で入力してください。';
  }
  if (trim($_POST['kana']) === '') {
      $errors[] = 'フリガナは必ず入力してください。';
  }
  if (mb_strlen($_POST['kana']) > 50) {
      $errors[] = 'フリガナは50文字以内で入力してください。';
  }
  if (!preg_match('/^\w+([-+.\']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/iD', $_POST['email'])) {
      $errors[] = '不正なメールアドレスです。';
   }
    if (trim($_POST['title']) === '') {
      $errors[] = '件名は必ず入力してください。';
  }
  if (mb_strlen($_POST['title']) > 50) {
      $errors[] = '件名は50文字以内で入力してください。';
  }
  if (count($errors) > 0) {
      die(implode('<br />', $errors).
        '<br /><a href="index.php"><div class="btn btn-success">戻る</div></a>');
  }

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
        <dd><?php print(nl2br(e($_POST['memo']))); ?></dd>
    </dl>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
