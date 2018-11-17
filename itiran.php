<?php
include("index_north.php");
require_once (dirname(__FILE__)."/sensitive.php");


$sakuhinkey = $_GET['sakuhinkey'];
$front = $_GET['front'];
$behind = $_GET['behind'];

if(!$front)$front = 0;
if(!$behind)$behind = 9;

$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET UTF8",$conn);


$sql = "SELECT * FROM sym_utatable WHERE utakey BETWEEN '$front' AND '$behind'";

$res = mysql_query($sql,$conn);

while($row = mysql_fetch_array($res)){

print("<div id=\"sakuhintitle\">");

	$sql2 = "SELECT * FROM sakuhintable";
	$res2 = mysql_query($sql2,$conn);
	while($row2 = mysql_fetch_array($res2)){
		if($row['sakuhinkey'] == $row2['sakuhinkey'])print($row2['sakuhinmei']);
	}
print("</div><div class=\"oya\"><font class=\"title\">");
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

//////wordidを取得
$sql = "SELECT * FROM sym_utatable";
$line = mysql_query($sql,$conn);
// 検索結果の行数を自動で出してくれる関数。
$num = mysql_num_rows($line);
if(!$num)$num = 0;

print("<div align=\"right\">");
for($i=0;$i<=$num;$i+=11){
print("[<a href=\"itiran.php?front=");
print($i);
print("&behind=");
print($i+10);
print("\">");
print(floor($i/10)+1);
print("</a>]");
}
print("</div>");

include("index_south.php");
?>
