<p></p>
<form action="Cmon<?php echo $monNum; ?>compile.php" method="post">
<input type="hidden" name="mon" value="<?php echo $monNum; ?>">
<p>回答</p>
<textarea name="answer" cols="80" rows="15"></textarea>
<p>
<div class="btn-group">
	　　　　　　　　　　        　　　　　　　　　　　　　　　　
    
	<p>　　　　　　　　　　　　　　　　　　　　　
	<a class="btn btn-info" href="menu.php">メニュー</a>　　　　　　　　　　　　　　
	<a class="btn btn-info" href="Cmon2.php">次の問題</a>
      
	</p>
    

    
	<p>
      
	<button type="submit" class="btn btn-info"> 送 信</button>　        　　　　　　　　　　　　　　  
	<a class="btn btn-info" href="Cmon1hint.php" target="_blank">ヒ ン ト</a>
　　     　　　　　　　　　　　　　　
    <a class="btn btn-info" href="saitenn.php">採点</a>　　</p>
</div>

</form>