<?php
require_once (dirname(__FILE__)."/sensitive.php");
include("index_north.php");

?>
いらっしゃいませ！<br>
こちらは週間少年ジャンプの漫画屋<br>
藤崎竜先生作品のイメージソングを募っているサイトです。<br>
作者様、出版者様とは一切関係ありません。<br>

<img src="fukki.jpg" width="218" height="268" alt="トップ絵こっそり募集～してますっ">
<br>
★最終更新…2019/11/18　：　スパムを消しました。<br>
<br>
<div id="sakuhintitle">

<?php

$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET SJIS",$conn);


$sql = "SELECT * FROM sym_utatable";
$res = mysql_query($sql,$conn);
while($row = mysql_fetch_array($res)){
if($num < $row['utakey'])$num = $row['utakey'];
}
print("<a href=\"tuika-comme-form.php?utakey=".$num."\" style=\"text-decoration:none\">★最新書き込み歌：");

$sql2 = "SELECT * FROM sym_utatable WHERE utakey = '$num'";
$res2 = mysql_query($sql2,$conn);
while($row2 = mysql_fetch_array($res2)){
print("『".$row2['uta']."』");
print("　-by　");
print($row2['kasyu']);
}

?>
</a>
</div>
<?php
include("index_south.php");
?>
