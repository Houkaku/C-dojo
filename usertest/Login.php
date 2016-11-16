<html>
<head>
</head>
<body>
<from>
<form method="POST" action="ninsho.php">
<input type="text" name="username">
<input type="text" name="Passward">
<input type="submit" name="btn1" value="登録">

<?php
session_start();

$count = isset($_SESSION['count']) ? $_SESSION['count'] : "できてない";

echo $count;

if($count=="roguinnsitorude"){
    header('Location: http://localhost/menu.php');
	exit;}
    else{
	print("ログイン失敗やで");}
?>
</from>
</body>
</html>
