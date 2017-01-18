<body>
<div class="center1">
<?php echo $title; ?>
<p></p>
<?php if(isset($_COOKIE["mon1"])){$kekka1 = $_COOKIE["mon1"];}else{$kekka1 = "未回答";} echo $kekka1; ?>
<p></p>
<?php echo $monText; ?>
<p></p>
</div>
