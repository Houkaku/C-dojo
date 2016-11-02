<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
<link rel="stylesheet" type="text/css" href="css/ripples.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/material.min.js"></script>
<script type="text/javascript" src="js/ripples.min.js"></script>

<style>

table{
margin-bottom: 10px;
border-collapse: separate;
}

table.center{
border-spacing: 40px 10px;
text-aling:center;
}

.center1{
    font-size:200%;
    text-align: center;
    line-height:100px;
}

.center2{
    text-align: center;
}

body{ 
  background-color:#dddddd;
}

</style>

<title>問題１</title>
</head>

<body>
<div class="center1">
    問題１<br>
    ３+５の計算をし、答えを表示するプログラムを作成しなさい。
</div>

<div class="center2">
<form class="form-horizontal">
    <textarea name="answer" cols="80" rows="30">
#include <stdio.h>
void main(void) {
   //ここにソースを記述する
}
    </textarea>
    <input type="hidden" name="mon" value="1">
<p>
</form>
<div class="btn-group">
    <table class="center">
        <tr>
            <td><a class="btn btn-info" href="aaa.php"><font size="6">メニューへ</a></td>
            <td><a class="btn btn-info" href="Cmon2.php"><font size="6">次の問題</a></td>
        </tr>
    </table>
    <table class="center">
        <tr>
            <td><a class="btn btn-info" href="#"><font size="6">送信</a></td>
            <td><a class="btn btn-info" href="Cmon1hint.php" target="_blank"><font size="6">ヒント</a></td>
            <td><a class="btn btn-info" href="#"><font size="6">採点</td>
        </tr>
    </table>
    </div>
</div>
=======
﻿<html>

<head>
<?php
$title = '問題1';
$monNum = 1;
include( "Cmonhead.php" );
?>
</head>

<body>
<?php include("body.php"); ?>
<?php
require("Cmon.php");
echo mon1;
?>
<?php include("form.php"); ?>
>>>>>>> dd7ce11c86cd073cdc7a9e20720dd21e42589137
</body>

</html>