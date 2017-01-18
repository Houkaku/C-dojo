<?php
require './users.php';

$newuser_id = $_POST["userid"];
$newuser_pass = $_POST["userpass"];

$users[$newuser_id] = $newuser_pass;

$txt = '<?php $users = '.
       var_export($users, true) .
       '; ?>';

file_put_contents('./users.php', $txt);
?>