<?php
include("index_north.php");
require_once (dirname(__FILE__)."/sensitive.php");
?>
<?php
$utakey = $_GET['utakey'];

$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET SJIS",$conn);

$sql = "SELECT * FROM sym_utatable WHERE utakey = '$utakey'";

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
print("<a href=\"itiran-sakuhin.php?sakuhinkey=".$row['sakuhinkey']."\">→戻る</a>");
print("</div>");
}


$sql = "SELECT * FROM sym_comme WHERE utakey = '$utakey'";
$res = mysql_query($sql,$conn);
while($row = mysql_fetch_array($res)){
print("<div class=\"ko\">");
print($row['comme']);
if($row['commesya'])print("　-by　".$row['commesya']);
print("</div><br>");
}
?>

<form action="tuika-comme.php" method="post">

<?php
print("<input type=\"hidden\" name=\"utakey\" value=\"".$utakey."\">");
?>
コメントありましたらどうぞ<br>
<input type="text" name="comme" size="60">

 -HN(任意)
 <input type="text" name="commesya" size="8"><br>

<input type="submit" value="書き込み">
</form>

<?php
include("index_south.php");
?>
