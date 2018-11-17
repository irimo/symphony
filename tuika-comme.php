<?php
include("index_north.php");
require_once (dirname(__FILE__)."/sensitive.php");
?>
コメントを書き込みました。<br>
ありがとうございました！<br>
<br>
<br>

<?php

$utakey = $_POST["utakey"];
$comme = $_POST["comme"];
$commesya = $_POST["commesya"];

$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET UTF8",$conn);

//////wordidを取得
$sql = "SELECT * FROM sym_comme";
$line = mysql_query($sql,$conn);
// 検索結果の行数を自動で出してくれる関数。
$num = mysql_num_rows($line);
if(!$num)$num = 0;
//次の数にする。
$num++;


$sql = "INSERT INTO sym_comme(commekey,utakey,comme,commesya) VALUES('$num','$utakey','$comme','$commesya')";
mysql_query($sql,$conn);

print("<a href=\"tuika-comme-form.php?utakey=$utakey\">→戻る</a>")

?><?php
include("index_south.php");
?>
