<div class="center2">
<form action="Cmon<?php echo $monNum; ?>compile.php" method="post" class="form-horizontal">
<input type="hidden" name="mon" value="<?php echo $monNum; ?>">
    <textarea name="answer" cols="80" rows="30">
#include <stdio.h>
void main(void) {
   //ここにソースを記述する
}
    </textarea>
    
<p>

<div class="btn-group">
    <table class="center">
        <tr>
            <td><a class="btn btn-info" href="aaa.php">メニューへ</a></td>
            <td><a class="btn btn-info" href="Cmon2.php">次の問題</a></td>
        </tr>
    </table>
    <table class="center">
        <tr>
            <td><input type="submit" class="btn btn-info" value="送信"></td>
            <td><a class="btn btn-info" href="Cmon1hint.php" target="_blank">ヒント</a></td>
            <td><a class="btn btn-info" href="kekka.php">採点</td>
        </tr>
    </table>
    </div>
</div>
</form>
</body>
</html>