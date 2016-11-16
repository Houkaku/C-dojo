<html>
<head></head>
<body>
<?php
$users = array("towa"=>"55501","houkaku" => "5501");
$userid = $_POST["username"];
echo $userid;

$passward = $_POST["Passward"];
echo $passward;

if(isset($users[$userid]) && $users[$userid]==$passward){
    //print($users['towa']);
	session_start();
	$_SESSION['count'] = "roguinnsitorude";
}else{
    session_start();
	$_SESSION['count'] = "roguinndekitenaide";
}
echo $_SESSION['count'];
header('Location: http://localhost/Login.php');
exit;
?>
</body>
</html>
