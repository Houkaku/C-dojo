<?php
require 'users.php';

$userid = $_POST["UserID"];
//echo $userid;

$passward = $_POST["Passward"];
//echo $passward;

if(isset($users[$userid]) && $users[$userid]==$passward){
    //print($users['towa']);
	session_start();
	$_SESSION['count'] = "login";
}else{
    session_start();
	$_SESSION['count'] = "notlogin";
}
echo $_SESSION['count'];
header('Location: ./usertest/Login.php');
exit;
?>
</body>
</html>
