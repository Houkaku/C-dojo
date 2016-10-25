
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>問題１</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
<link rel="stylesheet" type="text/css" href="css/ripples.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/material.min.js"></script>
<script type="text/javascript" src="js/ripples.min.js"></script>
</head>

<body>

<p>問題１</p>

<?php
if(isset($_COOKIE['a'])){
	$getval = $_COOKIE['mon1'];
	echo $getval;
}
?>

<p>３+５の計算をし、答えを表示するプログラムを作成しなさい。</p>
<form action="Cmon1compile.php" method="post">
<p>回答</p>
<textarea name="answer" cols="80" rows="15"></textarea>
<input type="hidden" name="mon" value="1">
<p>
<div class="btn-group">
	　　　　　　　　　　        　　　　　　　　　　　　　　　　
    
	<p>　　　　　　　　　　　　　　　　　　　　　
	<a class="btn btn-info" href="menu.php">メニュー</a>　　　　　　　　　　　　　　
	<a class="btn btn-info" href="Cmon2.php">次の問題</a>
      
	</p>
    
	</p>
    
	<p>
      
	<button type="submit" class="btn btn-info"> 送 信</button>　        　　　　　　　　　　　　　　  
	<a class="btn btn-info" href="Cmon1hint.php" target="_blank">ヒ ン ト</a>
　　     　　　　　　　　　　　　　　
    <a class="btn btn-info" href="saitenn.php">採点</a>　　</p>
</div>

</form>
</body>
</html>
