<?php
if($_POST){
    $encrypt_method = "AES-256-CBC";
    $secret_iv = $_POST['secret_iv'];
    $string = $_POST['string'];
    $decr = openssl_decrypt($string, $encrypt_method, $secret_iv);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Decrypt - TEXT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This tool allows you to encrypt any text. The algorithm to encrypt using AES-256 CBC. The system is anonymous and no database available.">
  <meta name="keywords" content="encrypt, AES-256, text, messages">
  <meta name="author" content="Stoyan Miladinov">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-sm-12">
<form role="form" method="POST">
<br>
<div class="form-group">
  <label for="comment">Encrypt - TEXT</label>
  <textarea class="form-control" rows="10" id="comment" name="string"></textarea>
</div>
<div class="form-group">
  <label for="comment">Key</label>
  <input type="text" class="form-control" id="usr" name="secret_iv">
</div>

  <button type="submit" class="btn btn-success">Decrypt</button>
</form>

<hr>
<div class="form-group">
  <label for="comment">Result</label>
  <textarea class="form-control" rows="10" id="comment" name="string"><?=$decr;?></textarea></div>
</div>
