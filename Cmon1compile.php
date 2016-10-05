<?php
if(isset($_POST["answer"])){

	$answer=$_POST["answer"];
	file_put_contents($_POST["mon"].".c",$answer);

}

//system('set PATH=Z:\プログラミング技術\borland\bcc55\Bin;C:\ProgramData\Oracle\Java\javapath;C:\PROGRA~1\COMMON~1\MICROS~1\WINDOW~1;C:\PROGRA~2\COMMON~1\MICROS~1\WINDOW~1;C:\Windows\System32;C:\Windows;C:\Windows\System32\wbem;C:\PROGRA~2\WIC4A1~1\Shared;C:\PROGRA~1\Intel\INTEL(~1\DAL;C:\PROGRA~1\Intel\INTEL(~1\IPT;C:\PROGRA~2\Intel\INTEL(~1\DAL;C:\PROGRA~2\Intel\INTEL(~1\IPT');
//system('cd プログラミング技術');
//system('bcc32 E-21.c');

$_path = 'set PATH=Z:\プログラミング技術\borland\bcc55\Bin;C:\ProgramData\Oracle\Java\javapath;C:\PROGRA~1\COMMON~1\MICROS~1\WINDOW~1;C:\PROGRA~2\COMMON~1\MICROS~1\WINDOW~1;C:\Windows\System32;C:\Windows;C:\Windows\System32\wbem;C:\PROGRA~2\WIC4A1~1\Shared;C:\PROGRA~1\Intel\INTEL(~1\DAL;C:\PROGRA~1\Intel\INTEL(~1\IPT;C:\PROGRA~2\Intel\INTEL(~1\DAL;C:\PROGRA~2\Intel\INTEL(~1\IPT';

system($_path .' & cd /d C:\xampp\htdocs & bcc32 '.$_POST["mon"].'.c');
$Kaitou = system($_path .' & cd /d C:\xampp\htdocs & '.$_POST["mon"].'.exe');

system($_path .' & cd /d C:\xampp\htdocs & bcc32 eCmo'.$_POST["mon"].'.c');
$Sample = system($_path .' & cd /d C:\xampp\htdocs & eCmo'.$_POST["mon"].'.exe');


//header('Location: http://localhost/Cmon'.$_POST["mon"].'.php');
//exit;
?>