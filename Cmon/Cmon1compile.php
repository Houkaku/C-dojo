<?php
if(isset($_POST["answer"])){

	$answer=$_POST["answer"];
	file_put_contents($_POST["mon"].".c",$answer);

}

$_path = 'set PATH='.__DIR__.'\borland\bcc55\Bin;';
$_cd   = 'cd /d C:\xampp\htdocs';
$_bcc = 'bcc32 '.$_POST["mon"].'.c';

$_com = $_path . ' & ' . $_cd . ' & ' . $_bcc;

system($_com);
$Kaitou = system($_POST["mon"].'.exe');

$Sample = system('0'.$_POST["mon"].'.exe');

if($Kaitou == $Sample)
{
	setcookie('mon'.$_POST["mon"],'正解');
}
else
{
	setcookie('mon'.$_POST["mon"],"不正解");
}

header('Location: http://localhost/Cmon'.$_POST["mon"].'.php');
exit;
?>