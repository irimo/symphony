<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css.css" type="text/css">
<title>藤崎竜交響曲</title>
</head>

<body>
<div id="container_soto">
<div id="container_uti">
  <div align="center"><a href="index.php"><img src="title2.gif" alt="藤竜作品イメージソングデータベース『藤崎竜交響曲』" width="523" height="96" border="0"></a>
  </div>
  <div class="overmenu"><a href="index.php">[TOP]</a>[<a href="comma.php?mode=howtouse">使い方]</a><a href="tuika-uta-form.php">[曲投稿]</a><a href="link.php">[リンクについて]</a><a href="comma.php?mode=ad">[エイディー]</a></div>

<div id="underseparate">
<div id="leftmenu">作品<br>
<?php
$require_once (dirname(__FILE__)."/sensitive.php")

$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET SJIS",$conn);

$sql = "SELECT * FROM sakuhintable";
$res = mysql_query("$sql",$conn);

while($row = mysql_fetch_array($res)){
print("├<a href=\"itiran-sakuhin.php?sakuhinkey=".$row['sakuhinkey']."\">");
print($row['sakuhinmei']."</a><br>");
}

?>
<a href="itiran.php">曲一覧</a><br>
</div>
<div id="rightcontents">
