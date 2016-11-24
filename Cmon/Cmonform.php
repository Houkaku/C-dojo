<div class="center2">
<form class="form-horizontal">
    <textarea name="answer" cols="80" rows="30">
#include <stdio.h>
void main(void) {
   //ここにソースを記述する
}
    </textarea>
    <input type="hidden" name="mon" value="<?php echo $monNum; ?>">
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
            <td><a class="btn btn-info" href="Cmon<?php echo $monNum; ?>compile.php"><font size="6">送信</a></td>
            <td><a class="btn btn-info" href="Cmon1hint.php" target="_blank"><font size="6">ヒント</a></td>
            <td><a class="btn btn-info" href="kekka.php"><font size="6">採点</td>
        </tr>
    </table>
    </div>
</div>
?<html>
</body>
</html>