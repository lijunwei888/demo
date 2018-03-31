<?PHP
//header('content-type:text/html;charset=utf-8');
session_start();
$_SESSION['username']='test';
$_SESSION['password']='test234';
$arr[]=session_name();
$arr[]=session_id();
var_dump($arr);
header('content-type:text/html;charset=utf-8');

//echo "<a href='dump.php?".session_name()."=".session_id()."'>通过url的传递</a>"; get方式提交session_id

//<a href="dispsql.php?action=delete&id=这里放的是你数据库里对应记录的id">删除</a>
?>
<!--get方式的提交session_id-->
<a href='dump.php?<?php echo  session_name(); ?>=<?php echo  session_id(); ?>'>通过url的传递</a>

<!--post方式提交session_id-->
<form action="dump.php" method="post">
    <input type="hidden" name="<?php echo session_name(); ?>" value="<?php echo session_id();?>">
    <input type="submit">
</form>