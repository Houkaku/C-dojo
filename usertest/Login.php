<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
<link rel="stylesheet" type="text/css" href="css/ripples.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/material.min.js"></script>
<script type="text/javascript" src="js/ripples.min.js"></script>

<style>
body{ 
  background-color:#dddddd;
}
.center1{
    margin-top:100px;
    text-align:center;
    font-size:300%;
}
.center2{
    text-align:center;
    font-size:200%;
</style>
<title>ログイン</title>
</head>

<body>
<div  class="center1">
<p>ログイン画面
</div>
<div class="center2">
<form method="POST" action="ninsho.php">
<p>ユーザーID：<input type="text" name="UserID" onfocus="placeholders()"  id="placeholder" />
<p>パスワード ：<input type="text" name="Passward" onfocus="placeholders()"  id="placeholder" />
<p><input type="submit" name="btn1" class="btn btn-info" value="ログイン">
<p><a href="http://localhost/Cmon/shinki.php">アカウントをお持ちでない方はこちら</a>
<p><a href="#">パスワードを忘れた方はこちら</a>

</div>

<?php
session_start();

$count = isset($_SESSION['count']) ? $_SESSION['count'] : "notlogin";

if($count=="login"){
	header('Location: http://localhost/Cmon/menu.php');
	exit;}
	else{
	print("ログイン失敗");}
?>
</form>
</body>
</html>