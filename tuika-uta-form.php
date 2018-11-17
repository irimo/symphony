<?php
include("index_north.php");
$require_once (dirname(__FILE__)."/sensitive.php")
?>
<div id="sakuhintitle">曲投稿</div>
藤崎竜作品のあなた的イメージソング教えてください♪<br>
歌詞の場所などは、管理人が調べて一言コメントと併せて付けたしいたします。<br>
カプ色が強い歌は…良心<font size="-7">（(C)羅漢）</font>越えなければ…オケイです！<br>
<br>

<form action="tuika-uta.php" method="post">

<table border="0" cellspacing="0" cellpadding="5">
<tr>
    <td>元ネタ藤崎作品(必須)</td>
    <td>：</td><td>
<select name="sakuhinkey">
<?php

$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET UTF8",$conn);

$sql = "SELECT * FROM sakuhintable";
$res = mysql_query($sql,$conn);
while($row = mysql_fetch_array($res)){
print("<option value=\"".$row['sakuhinkey']."\">".$row['sakuhinmei']."</option>");
}
?>
</select></td>
  </tr>
  <tr>
    <td>曲名(必須)</td>
    <td>：</td>
    <td><input type="text" name="uta" size="30"></td>
  </tr>
  <tr>
    <td>うたいて(必須)</td>
    <td>：</td>
    <td><input type="text" name="kasyu" size="30"></td>
  </tr>
  <tr>
    <td>歌詞URL(わかれば・空欄可)</td>
    <td>：</td>
    <td>
<input type="text" name="kashi" size="50"></td>
  </tr>
  <tr>
    <td>視聴URL(わかれば・空欄可)</td>
    <td>：</td>
    <td>
<input type="text" name="sicho" size="50"></td>
  </tr>
<tr>
<td><input type="submit" value="書き込み"></td>
  </tr></table></form>

<?php
include("index_south.php");
?>
