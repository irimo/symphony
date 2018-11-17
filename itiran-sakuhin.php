<?php
include("index_north.php");
$require_once (dirname(__FILE__)."/sensitive.php");


$sakuhinkey = $_GET['sakuhinkey'];

$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET SJIS",$conn);

$sql2 = "SELECT * FROM sakuhintable WHERE sakuhinkey = '$sakuhinkey'";
$res2 = mysql_query($sql2,$conn);
while($row2 = mysql_fetch_array($res2)){
print("<div id=\"sakuhintitle\">");
print($row2['sakuhinmei']);
print("</div>");
}

$sql = "SELECT * FROM sym_utatable WHERE sakuhinkey = '$sakuhinkey'";

$res = mysql_query($sql,$conn);

while($row = mysql_fetch_array($res)){
print("<div class=\"oya\">");
print("<font class=\"title\">");
print($row['uta']);
print("</font><font class=\"artist\">");
print($row['kasyu']);
print("</font>");
if($row['kashi'])print("[<a href=\"".$row['kashi']."\">歌詞</a>]");else("[歌詞]");
if($row['sicho'])print("[<a href=\"".$row['sicho']."\">視聴</a>]");else("[視聴]");
if($row['joho'])print("[<a href=\"".$row['joho']."\">情報</a>]");else("[情報]");
print("<br>");
print("<br>");
print("<a href=\"tuika-comme-form.php?utakey=".$row['utakey']."\">→コメントを見る</a>");
print("</div>");
}

include("index_south.php");
?>

</body></html>
