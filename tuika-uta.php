<?php
include("index_north.php");
$require_once (dirname(__FILE__)."/sensitive.php")
?>
歌を追加しました。<br>
ありがとうございました！<br>
<br>
<br>
<?php

$sakuhinkey = $_POST["sakuhinkey"];
$uta = $_POST["uta"];
$kasyu = $_POST["kasyu"];
$kashi = $_POST["kashi"];
$sicho = $_POST["sicho"];
$joho = $_POST["joho"];
$conn = mysql_connect($DBADRESS_P,$DBUSERNAME_P,$DBPW_P);
mysql_query("USE mnlab_public",$conn);
mysql_query("SET CHARACTER SET UTF8",$conn);

//////wordidを取得
$sql = "SELECT * FROM sym_utatable";
$line = mysql_query($sql,$conn);
// 検索結果の行数を自動で出してくれる関数。
$num = mysql_num_rows($line);
if(!$num)$num = 0;
//次の数にする。
$num++;


$sql = "INSERT INTO sym_utatable(utakey,sakuhinkey,uta,kasyu,kashi,sicho,joho) VALUES('$num','$sakuhinkey','$uta','$kasyu','$kashi','$sicho','$joho')";
mysql_query($sql,$conn);

print("<a href=\"tuika-uta-form.php\">更にうたを書き込めます</a>")

?>

<?php
include("index_south.php");
?>
