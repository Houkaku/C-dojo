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
  padding:50px;
  text-align: center;
  font-size:400%;
}

table.menu{
  font-size:200%;
}

table.menu td{
  padding:20px 60px 20px 60px;
  text-align:center;
}

.yohaku{
  margin-top:50px;
}
</style>

<title>結果画面</title>
</head>

<boby>
<?php

?>
<div class="center1">
    結果画面<br>
</div>
<table class="menu" align="center">
<th>
    <tr>
      <td><a href="Cmon1.php">問１</td>
      <td><a href="Cmon2.php">問２</td>
      <td><a href="Cmon3.php">問３</td>
      <td><a href="Cmon4.php">問４</td>
      <td><a href="Cmon5.php">問５</td>
    <tr>
    <tr>
      <td><?php if(isset($_COOKIE["mon1"])){$kekka1 = $_COOKIE["mon1"];}else{$kekka1 = "未回答";} echo $kekka1; ?></td>
      <td><?php if(isset($_COOKIE["mon2"])){$kekka2 = $_COOKIE["mon2"];}else{$kekka2 = "未回答";} echo $kekka2; ?></td>
      <td><?php if(isset($_COOKIE["mon3"])){$kekka3 = $_COOKIE["mon3"];}else{$kekka3 = "未回答";} echo $kekka3; ?></td>
      <td><?php if(isset($_COOKIE["mon4"])){$kekka4 = $_COOKIE["mon4"];}else{$kekka4 = "未回答";} echo $kekka4; ?></td>
      <td><?php if(isset($_COOKIE["mon5"])){$kekka5 = $_COOKIE["mon5"];}else{$kekka5 = "未回答";} echo $kekka5; ?></td>
    <tr>
    <tr>
      <td><a href ="#">解説</td>
      <td><a href ="#">解説</td>
      <td><a href ="#">解説</td>
      <td><a href ="#">解説</td>
      <td><a href ="#">解説</td>
    <tr>
</th>
</table>
<table class="menu yohaku" align="center">
<th>
    <tr>
      <td><a href="Cmon6.php">問６</td>
      <td><a href="Cmon7.php">問７</td>
      <td><a href="Cmon8.php">問８</td>
      <td><a href="Cmon9.php">問９</td>
    <tr>
    <tr>
      <td><?php if(isset($_COOKIE["mon6"])){$kekka6 = $_COOKIE["mon6"];}else{$kekka6 = "未回答";} echo $kekka6; ?></td>
      <td><?php if(isset($_COOKIE["mon7"])){$kekka7 = $_COOKIE["mon7"];}else{$kekka7 = "未回答";} echo $kekka7; ?></td>
      <td><?php if(isset($_COOKIE["mon8"])){$kekka8 = $_COOKIE["mon8"];}else{$kekka8 = "未回答";} echo $kekka8; ?></td>
      <td><?php if(isset($_COOKIE["mon9"])){$kekka9 = $_COOKIE["mon9"];}else{$kekka9 = "未回答";} echo $kekka9; ?></td>
    <tr>
    <tr>
      <td><a href ="#">解説</td>
      <td><a href ="#">解説</td>
      <td><a href ="#">解説</td>
      <td><a href ="#">解説</td>
    <tr>
</th>
</table>

</boby>

<?php
$txt = '<?php $mon1="'.$kekka1.'";'.
             '$mon2="'.$kekka2.'";'.
             '$mon3="'.$kekka3.'";'.
             '$mon4="'.$kekka4.'";'.
             '$mon5="'.$kekka5.'";'.
             '$mon6="'.$kekka6.'";'.
             '$mon7="'.$kekka7.'";'.
             '$mon8="'.$kekka8.'";'.
             '$mon9="'.$kekka9.'";?>';
file_put_contents('rireki.php', $txt);
?>

</html>
